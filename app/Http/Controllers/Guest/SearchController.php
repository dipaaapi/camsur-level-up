<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use App\Models\PressRelease;
use App\Models\Lgu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    /**
     * Prohibited keywords targeting administrative, authentication, or CMS endpoints.
     */
    private array $restrictedKeywords = [
        'admin', 'administrator', 'login', 'log in', 'sign in', 'signin', 
        'register', 'registration', 'sign up', 'signup', 'dashboard', 
        'cms', 'auth', 'authenticate', 'password', 'cpanel', 'phpmyadmin',
        'backend', 'wp-admin', 'root', 'credential'
    ];

    /**
     * Public informational and service pages directory.
     */
    private function getPublicPagesRegistry(): array
    {
        return [
            [
                'title' => 'Official Portal Homepage',
                'category' => 'Portal Home',
                'badge' => 'General',
                'description' => 'Provincial Government of Camarines Sur official web portal homepage, executive banner, and direct civic services.',
                'url' => route('home'),
                'keywords' => 'home welcome camsur capitol governor bicol provincial official news events',
            ],
            [
                'title' => 'Educational Assistance (Scholarship) Program',
                'category' => 'Public Services',
                'badge' => 'Scholarship',
                'description' => 'Provincial scholarship opportunities, qualifications, documentary requirements, and payout schedules for CamSur students.',
                'url' => route('services.educational-assistance'),
                'keywords' => 'scholar scholarship student education financial assistance college tuition allowance payout cash aid requirements phrmo',
            ],
            [
                'title' => 'Visit CamSur - Tourism & Eco-Adventure Guide',
                'category' => 'Tourism',
                'badge' => 'Destination',
                'description' => 'Official tourist guide for the Caramoan Archipelago, Mt. Isarog, wakeboarding, marine reserves, and provincial heritage sites.',
                'url' => route('tourism'),
                'keywords' => 'tourism caramoan visit cwc travel beach islands resort hotel itinerary package eco-adventure tour guide diving surfing',
            ],
            [
                'title' => 'Government Careers With Us (Plantilla)',
                'category' => 'Employment',
                'badge' => 'Civil Service',
                'description' => 'Provincial Capitol permanent, casual, and contractual plantilla vacancies and civil service opportunities.',
                'url' => route('careers.government'),
                'keywords' => 'jobs career plantilla civil service csc government hiring vacancies permanent phrmo apply qualification',
            ],
            [
                'title' => 'Private Local Job Directory (PESO)',
                'category' => 'Employment',
                'badge' => 'Local Jobs',
                'description' => 'Accredited private companies, corporate partners, and local business employment opportunities in Camarines Sur.',
                'url' => route('careers.local'),
                'keywords' => 'private jobs employment local peso sm robinsons work vacancy hiring companies corporate office sales naga pili',
            ],
            [
                'title' => 'Overseas & OFW Careers (DMW / POEA Accredited)',
                'category' => 'Employment',
                'badge' => 'Overseas',
                'description' => 'Legitimate, verified overseas recruitment and licensed foreign placement agencies under DMW standards.',
                'url' => route('careers.overseas'),
                'keywords' => 'overseas abroad ofw dmw poea foreign employment work dubai saudi cruise ship seafarer canada nurse hospital',
            ],
            [
                'title' => 'Special Program for Employment of Students (SPES)',
                'category' => 'Employment',
                'badge' => 'Student Jobs',
                'description' => 'DOLE and Provincial Government student youth employment, summer internships, and Capitol trainee slots.',
                'url' => route('careers.spes'),
                'keywords' => 'spes student summer job youth internship ojt dole stipend wage college high school work experience',
            ],
            [
                'title' => 'Public Help Desk & Frequently Asked Questions (FAQ)',
                'category' => 'Help Desk',
                'badge' => 'Assistance',
                'description' => 'Answers to common inquiries regarding provincial services, health assistance (AICS), taxation, scholarships, and hiring.',
                'url' => route('faq'),
                'keywords' => 'faq questions help desk inquiry assistance contact customer service requirements procedure how to apply',
            ],
            [
                'title' => 'Transparency Seal Compliance',
                'category' => 'Transparency',
                'badge' => 'Governance',
                'description' => 'Official transparency seal disclosures, budget allocations, financial reports, and Good Financial Housekeeping compliance.',
                'url' => route('seal'),
                'keywords' => 'transparency seal budget procurement financial audit coa annual report fund disbursement governance dilg compliance',
            ],
            [
                'title' => 'Citizen\'s Charter',
                'category' => 'Transparency',
                'badge' => 'Public Standards',
                'description' => 'Service standards, processing timelines, and step-by-step transaction guidelines across Capitol departments.',
                'url' => route('citizens-charter'),
                'keywords' => 'citizens charter citizen processing time step procedure requirements fees service standard arta anti red tape',
            ],
            [
                'title' => 'Bids & Awards Committee (BAC) Procurement Notices',
                'category' => 'Procurement',
                'badge' => 'Bids & Awards',
                'description' => 'Official invitations to bid, bidding documents, notices of award, and procurement opportunities for provincial projects.',
                'url' => route('bac'),
                'keywords' => 'bac bids awards procurement tender contract bidding infrastructure supply materials goods services notice philgeps',
            ],
            [
                'title' => 'Press Releases & Capitol Broadcasts',
                'category' => 'News & Media',
                'badge' => 'Press Room',
                'description' => 'Official press releases, governor\'s advisories, disaster updates, and public announcements.',
                'url' => route('press-releases.index'),
                'keywords' => 'press releases media news advisory announcement official statement broadcast bulletin video story updates',
            ],
            [
                'title' => 'Latest Capitol News & Stories',
                'category' => 'News & Media',
                'badge' => 'News',
                'description' => 'Editorial features, project inaugurations, community programs, and socio-civic achievements in CamSur.',
                'url' => route('guest.news.index'),
                'keywords' => 'news capitol stories projects governor programs agriculture health events features accomplishments',
            ],
            [
                'title' => 'Provincial Profile & Demographics',
                'category' => 'About CamSur',
                'badge' => 'Profile',
                'description' => 'Geographic overview, population, economy, cultural heritage, and municipal jurisdictions of Camarines Sur.',
                'url' => route('profile'),
                'keywords' => 'profile demographics population geography land area climate weather economy map borders',
            ],
            [
                'title' => 'Socio-Economic Profile (Municipalities & Cities)',
                'category' => 'About CamSur',
                'badge' => 'Socio-Economic',
                'description' => 'Comprehensive data on the 35 municipalities and 2 component cities of Camarines Sur.',
                'url' => route('socio-economic'),
                'keywords' => 'socio economic municipalities cities naga iriga pili calabanga libmanan income class livelihood statistics',
            ],
            [
                'title' => 'History of Camarines Sur',
                'category' => 'About CamSur',
                'badge' => 'History',
                'description' => 'Historical chronicle of Camarines Sur from pre-colonial times, Spanish era, revolution, to modern day progress.',
                'url' => route('province-history'),
                'keywords' => 'history heritage past historical eras origin founding culture bicolano heroes colonial',
            ],
            [
                'title' => 'History of the Provincial Capitol',
                'category' => 'About CamSur',
                'badge' => 'History',
                'description' => 'Architectural and administrative history of the Provincial Capitol Complex located in Cadlan, Pili.',
                'url' => route('capitol-history'),
                'keywords' => 'capitol history seat government cadlan pili complex building architecture landmark',
            ],
            [
                'title' => 'Provincial Mission, Vision & Strategic Pillars',
                'category' => 'About CamSur',
                'badge' => 'Governance',
                'description' => 'Official developmental direction, 10-point agenda, and core vision of the Provincial Government of Camarines Sur.',
                'url' => route('mission-vision'),
                'keywords' => 'mission vision goals agenda governance values commitments smart province level up',
            ],
            [
                'title' => 'Roster of Past Governors of Camarines Sur',
                'category' => 'About CamSur',
                'badge' => 'Leadership',
                'description' => 'Chronological tribute to the leaders and governors who have served Camarines Sur throughout its history.',
                'url' => route('past-governors'),
                'keywords' => 'past governors leaders administration tenure terms villafuerte frentzen term roster hall of governors',
            ],
            [
                'title' => 'Videos & Short Video Reels Hub',
                'category' => 'News & Media',
                'badge' => 'Multimedia',
                'description' => 'Official documentary broadcasts, event highlights, tourist reels, and mobile short-form video streaming.',
                'url' => route('guest.videos.index'),
                'keywords' => 'videos reels shorts broadcast streaming clips multimedia youtube facebook documentaries',
            ],
            [
                'title' => 'Official Press Releases & Statements',
                'category' => 'News & Media',
                'badge' => 'Press Room',
                'description' => 'Archive of official Capitol statements, executive bulletins, and legal administrative communiqués.',
                'url' => route('press-releases.index'),
                'keywords' => 'press releases statements bulletins official notices communiques executive announcements governor',
            ],
            [
                'title' => 'Social Media Hub (Multi-Platform)',
                'category' => 'News & Media',
                'badge' => 'Social Directory',
                'description' => 'Centralized directory of verified Facebook, Instagram, YouTube, and X (formerly Twitter) accounts of Camarines Sur.',
                'url' => route('home') . '#social-hub',
                'keywords' => 'social media facebook instagram youtube twitter x feeds channels follow verified officials migz lray',
            ],
            [
                'title' => 'Public Inquiries & Citizen Feedback Desk',
                'category' => 'Public Services',
                'badge' => 'Citizen Support',
                'description' => 'Direct submission portal for citizen queries, assistance requests, and public feedback with rate-limited protection.',
                'url' => route('faq') . '#inquiry',
                'keywords' => 'inquiry citizen feedback concern complain assistance contact request help desk public service',
            ],
            [
                'title' => 'Centralized Public Search Directory',
                'category' => 'Portal Home',
                'badge' => 'Search Engine',
                'description' => 'Real-time multi-category search engine across all provincial vacancies, news, services, and LGU profiles.',
                'url' => route('search'),
                'keywords' => 'search find query index directory lookup portal services jobs information',
            ],
            [
                'title' => 'Official Web App Sitemap & Directory',
                'category' => 'Portal Home',
                'badge' => 'Sitemap',
                'description' => 'Complete structural map of all public gateways, civic systems, department portals, and transparency documents.',
                'url' => route('sitemap'),
                'keywords' => 'sitemap map directory tree index structure all pages navigation routes overview',
            ],
        ];
    }

    /**
     * Display the official, auto-updating Public Sitemap for the entire web app.
     */
    public function sitemap()
    {
        $publicPages = $this->getPublicPagesRegistry();

        $sections = [
            'Core Portals & Executive Gateway' => [
                'icon' => '🏛️',
                'description' => 'Main executive portals, provincial profile, developmental direction, and governance history.',
                'items' => array_values(array_filter($publicPages, fn($p) => in_array($p['category'], ['Portal Home', 'About CamSur'])))
            ],
            'Civic Services & Citizen Assistance' => [
                'icon' => '🤝',
                'description' => 'Direct public assistance, scholarship grants, FAQ help desk, and citizen inquiry systems.',
                'items' => array_values(array_filter($publicPages, fn($p) => in_array($p['category'], ['Public Services', 'Help Desk'])))
            ],
            'Employment, Careers & Placement' => [
                'icon' => '💼',
                'description' => 'Four verified placement streams: Civil Service, Local Private Firms, Overseas, and SPES.',
                'items' => array_values(array_filter($publicPages, fn($p) => $p['category'] === 'Employment'))
            ],
            'News, Media & Press Room' => [
                'icon' => '📰',
                'description' => 'Official Capitol press releases, provincial journalism, 4K video broadcasts, and social feeds.',
                'items' => array_values(array_filter($publicPages, fn($p) => $p['category'] === 'News & Media'))
            ],
            'Good Governance & Transparency' => [
                'icon' => '⚖️',
                'description' => 'Transparency seal compliance, Citizen\'s Charter processing times, and BAC procurement notices.',
                'items' => array_values(array_filter($publicPages, fn($p) => in_array($p['category'], ['Transparency', 'Procurement'])))
            ],
            'Tourism, Culture & Heritage' => [
                'icon' => '🌴',
                'description' => 'Caramoan island sanctuaries, watersports resorts, cultural heritage, and municipal profiles.',
                'items' => array_values(array_filter($publicPages, fn($p) => in_array($p['category'], ['Tourism'])))
            ],
            'Emergency Hotlines & Public Assistance' => [
                'icon' => '🚨',
                'description' => 'Verified direct telephone hotlines, health assistance, disaster response, and Capitol directory.',
                'items' => [
                    [
                        'title' => 'Provincial Health Office (PHO)',
                        'category' => 'Public Assistance',
                        'badge' => 'Direct Call',
                        'description' => 'Primary provincial healthcare, hospital coordination, medical missions, and AICS health inquiries.',
                        'url' => 'tel:+63544777000',
                        'contact' => '(054) 477-7000',
                        'type' => 'phone'
                    ],
                    [
                        'title' => 'CamSur Rescue / EDMERO Quick Response',
                        'category' => 'Emergency',
                        'badge' => '24/7 Hotline',
                        'description' => 'Environment Disaster Management and Emergency Response Office for 24/7 rescue and calamity dispatch.',
                        'url' => 'tel:+63548812831',
                        'contact' => '(054) 881-2831',
                        'type' => 'phone'
                    ],
                    [
                        'title' => 'Provincial Capitol Public Desk',
                        'category' => 'Public Assistance',
                        'badge' => 'Capitol Trunkline',
                        'description' => 'Official administrative assistance, governor\'s office routing, and citizen inquiries in Cadlan, Pili.',
                        'url' => 'tel:+63548812831',
                        'contact' => '(054) 881-2831',
                        'type' => 'phone'
                    ],
                    [
                        'title' => 'Provincial Capitol Official Email',
                        'category' => 'Public Assistance',
                        'badge' => 'Email Dispatch',
                        'description' => 'Send official electronic communiqués, public records requests, and official business to the province.',
                        'url' => 'mailto:info@camarinessur.gov.ph',
                        'contact' => 'info@camarinessur.gov.ph',
                        'type' => 'email'
                    ]
                ]
            ],
        ];

        try {
            $totalJobs = JobPosting::active()->count();
        } catch (\Throwable $e) { $totalJobs = 0; }

        try {
            $totalPress = PressRelease::count();
        } catch (\Throwable $e) { $totalPress = 0; }

        try {
            $totalLgus = Lgu::count();
        } catch (\Throwable $e) { $totalLgus = 37; }

        return view('pages.guest.sitemap', compact('sections', 'publicPages', 'totalJobs', 'totalPress', 'totalLgus'));
    }

    /**
     * Execute comprehensive public search.
     */
    public function index(Request $request)
    {
        $rawQuery = trim($request->input('q', ''));
        $categoryFilter = $request->input('category', 'all');

        $securityAlert = null;
        $results = collect();

        // 1. Security Check: Detect restricted administrative or authentication keywords
        if ($rawQuery !== '') {
            $lowerQuery = strtolower($rawQuery);
            foreach ($this->restrictedKeywords as $restricted) {
                if (Str::contains($lowerQuery, $restricted)) {
                    $securityAlert = [
                        'keyword' => $rawQuery,
                        'message' => 'Access to administrative interfaces, internal content management systems (CMS), and authentication endpoints is strictly restricted to authorized government personnel.',
                        'legal' => 'Unauthorized access or penetration attempts against government information systems are punishable under Republic Act No. 10175 (Cybercrime Prevention Act of 2012).'
                    ];
                    break;
                }
            }
        }

        // If a security alert was triggered, do NOT return administrative results
        if ($securityAlert) {
            return view('pages.guest.search', [
                'query' => $rawQuery,
                'results' => collect([]),
                'totalResults' => 0,
                'securityAlert' => $securityAlert,
                'categoryFilter' => $categoryFilter,
                'availableCategories' => ['All', 'Services', 'Careers', 'News', 'Transparency', 'Tourism', 'About']
            ]);
        }

        // 2. Search Dynamic Content: Active Job Postings
        try {
            $jobQuery = JobPosting::active();
            if ($rawQuery !== '') {
                $jobQuery->where(function ($q) use ($rawQuery) {
                    $q->where('title', 'like', "%{$rawQuery}%")
                      ->orWhere('department_or_company', 'like', "%{$rawQuery}%")
                      ->orWhere('location', 'like', "%{$rawQuery}%")
                      ->orWhere('employment_type', 'like', "%{$rawQuery}%")
                      ->orWhere('description', 'like', "%{$rawQuery}%")
                      ->orWhere('requirements', 'like', "%{$rawQuery}%");
                });
            }
            $jobs = $jobQuery->latest('posted_at')->take(30)->get();

            foreach ($jobs as $job) {
                $sectorLabel = match($job->type) {
                    'government' => 'Government Careers',
                    'private_local' => 'Private Local Jobs',
                    'overseas' => 'Overseas Careers',
                    'spes' => 'SPES & Internships',
                    default => 'Employment'
                };

                $results->push([
                    'title' => $job->title,
                    'category' => 'Careers',
                    'badge' => $job->employment_type ?? $sectorLabel,
                    'meta' => ($job->department_or_company ?? 'Provincial Office') . ' • ' . ($job->location ?? 'Camarines Sur'),
                    'description' => Str::limit(strip_tags($job->description ?: $job->requirements), 150),
                    'url' => route('careers.show', $job->id),
                    'action_text' => 'View Requirements & Apply',
                    'created_at' => $job->posted_at,
                ]);
            }
        } catch (\Exception $e) {
            // Log or continue gracefully if DB table is unavailable
        }

        // 3. Search Dynamic Content: News & Press Releases
        try {
            $newsQuery = PressRelease::query();
            if ($rawQuery !== '') {
                $newsQuery->where(function ($q) use ($rawQuery) {
                    $q->where('title', 'like', "%{$rawQuery}%")
                      ->orWhere('excerpt', 'like', "%{$rawQuery}%")
                      ->orWhere('content', 'like', "%{$rawQuery}%")
                      ->orWhere('category', 'like', "%{$rawQuery}%")
                      ->orWhere('author', 'like', "%{$rawQuery}%");
                });
            }
            $newsItems = $newsQuery->latest('published_at')->take(30)->get();

            foreach ($newsItems as $pr) {
                $results->push([
                    'title' => $pr->title,
                    'category' => 'News & Media',
                    'badge' => $pr->category ?? 'Press Release',
                    'meta' => 'Published: ' . ($pr->published_at ? $pr->published_at->format('M d, Y') : 'Recent'),
                    'description' => Str::limit(strip_tags($pr->excerpt ?: $pr->content), 150),
                    'url' => route('guest.news.show', $pr->slug),
                    'action_text' => 'Read Full Story',
                    'created_at' => $pr->published_at,
                ]);
            }
        } catch (\Exception $e) {
            // Continue gracefully
        }

        // 4. Search Dynamic Content: LGUs / Municipalities
        try {
            $lguQuery = Lgu::query();
            if ($rawQuery !== '') {
                $lguQuery->where(function ($q) use ($rawQuery) {
                    $q->where('name', 'like', "%{$rawQuery}%")
                      ->orWhere('district', 'like', "%{$rawQuery}%")
                      ->orWhere('classification', 'like', "%{$rawQuery}%");
                });
            }
            $lgus = $lguQuery->take(15)->get();

            foreach ($lgus as $lgu) {
                $results->push([
                    'title' => 'Municipality / City of ' . $lgu->name,
                    'category' => 'About CamSur',
                    'badge' => 'Local Government Unit',
                    'meta' => ($lgu->district ?? 'District') . ' • ' . ($lgu->classification ?? 'LGU'),
                    'description' => 'Profile, socio-economic standing, and local administration data for ' . $lgu->name . ', Camarines Sur.',
                    'url' => route('socio-economic') . '#lgu-' . Str::slug($lgu->name),
                    'action_text' => 'View LGU Profile',
                    'created_at' => null,
                ]);
            }
        } catch (\Exception $e) {
            // Continue gracefully
        }

        // 5. Search Static & Core Public Services Registry
        $pages = $this->getPublicPagesRegistry();
        foreach ($pages as $page) {
            if ($rawQuery === '') {
                $results->push([
                    'title' => $page['title'],
                    'category' => $page['category'],
                    'badge' => $page['badge'],
                    'meta' => 'Public Government Page',
                    'description' => $page['description'],
                    'url' => $page['url'],
                    'action_text' => 'Open Page',
                    'created_at' => null,
                ]);
            } else {
                $searchContent = strtolower($page['title'] . ' ' . $page['category'] . ' ' . $page['description'] . ' ' . $page['keywords']);
                $queryWords = explode(' ', strtolower($rawQuery));
                $match = false;
                foreach ($queryWords as $word) {
                    if (strlen($word) >= 2 && str_contains($searchContent, $word)) {
                        $match = true;
                        break;
                    }
                }
                if ($match) {
                    $results->push([
                        'title' => $page['title'],
                        'category' => $page['category'],
                        'badge' => $page['badge'],
                        'meta' => 'Public Government Page',
                        'description' => $page['description'],
                        'url' => $page['url'],
                        'action_text' => 'Open Page',
                        'created_at' => null,
                    ]);
                }
            }
        }

        // Filter by Category if user selected a specific tab
        if ($categoryFilter !== 'all' && $categoryFilter !== '') {
            $results = $results->filter(function ($item) use ($categoryFilter) {
                return Str::contains(strtolower($item['category']), strtolower($categoryFilter));
            });
        }

        $totalResults = $results->count();

        return view('pages.guest.search', [
            'query' => $rawQuery,
            'results' => $results->values(),
            'totalResults' => $totalResults,
            'securityAlert' => null,
            'categoryFilter' => $categoryFilter,
            'availableCategories' => ['All', 'Services', 'Careers', 'News', 'Transparency', 'Tourism', 'About']
        ]);
    }
}
