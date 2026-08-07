<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use App\Models\WordOfWisdom;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class JobPostingController extends Controller
{
    public function index()
    {
        $govtActiveCount = JobPosting::active()->ofType('government')->count();
        $localActiveCount = JobPosting::active()->ofType('private_local')->count();
        $overseasActiveCount = JobPosting::active()->ofType('overseas')->count();
        $spesActiveCount = JobPosting::active()->ofType('spes')->count();

        $totalActiveCareers = $govtActiveCount + $localActiveCount + $overseasActiveCount + $spesActiveCount;

        return view('pages.guest.careers', compact(
            'govtActiveCount',
            'localActiveCount',
            'overseasActiveCount',
            'spesActiveCount',
            'totalActiveCareers'
        ));
    }

    private function getWisdomQuotes(array $categories = ['all'])
    {
        if (class_exists(WordOfWisdom::class)) {
            try {
                return WordOfWisdom::whereIn('category_type', $categories)->get();
            } catch (\Exception $e) {
                return collect([]);
            }
        }
        return collect([]);
    }

    // ==========================================
    // 1. GOVERNMENT CAREERS
    // ==========================================
    public function careersWithUs(Request $request)
    {
        $perPage = in_array($request->input('per_page'), [10, 25, 50]) ? (int)$request->input('per_page') : 10;
        $baseQuery = JobPosting::active()->ofType('government');

        $startOfMonth = Carbon::now()->startOfMonth();
        $latestFeaturedJobs = (clone $baseQuery)->where('posted_at', '>=', $startOfMonth)->latest('posted_at')->get();

        $query = clone $baseQuery;

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('department_or_company', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($request->filled('csc_filter')) {
            $csc = $request->input('csc_filter');
            if ($csc === 'required') {
                $query->where('csc_eligibility_required', true);
            } elseif ($csc === 'not_required') {
                $query->where('csc_eligibility_required', false);
            }
        }

        if ($request->filled('employment_type')) {
            $query->where('employment_type', $request->input('employment_type'));
        }

        $jobs = (clone $query)->latest('posted_at')->paginate($perPage)->withQueryString();
        $allActiveGovtJobs = (clone $query)->latest('posted_at')->get();

        $totalActive = $allActiveGovtJobs->count();
        $csRequiredCount = $allActiveGovtJobs->where('csc_eligibility_required', true)->count();
        $csNotRequiredCount = $allActiveGovtJobs->where('csc_eligibility_required', false)->count();

        $employmentTypeStats = $allActiveGovtJobs->groupBy('employment_type')->map(fn($group) => $group->count());
        $wisdomQuotes = $this->getWisdomQuotes(['government', 'all']);

        return view('pages.guest.careers.careers-with-us', compact(
            'jobs', 'allActiveGovtJobs', 'latestFeaturedJobs', 'totalActive',
            'csRequiredCount', 'csNotRequiredCount', 'employmentTypeStats', 'wisdomQuotes', 'perPage'
        ));
    }

    // ==========================================
    // 2. PRIVATE LOCAL JOBS
    // ==========================================
    public function localJobs(Request $request)
    {
        $perPage = in_array($request->input('per_page'), [10, 25, 50]) ? (int)$request->input('per_page') : 10;
        $baseQuery = JobPosting::active()->ofType('private_local');

        // Featured Announcements
        $startOfMonth = Carbon::now()->startOfMonth();
        $latestFeaturedJobs = (clone $baseQuery)->where('posted_at', '>=', $startOfMonth)->latest('posted_at')->get();

        $query = clone $baseQuery;

        // Search & Filters
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                ->orWhere('department_or_company', 'like', "%{$search}%")
                ->orWhere('location', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($request->filled('company')) {
            $query->where('department_or_company', $request->input('company'));
        }

        if ($request->filled('employment_type')) {
            $query->where('employment_type', $request->input('employment_type'));
        }

        if ($request->filled('sort')) {
            $sort = $request->input('sort');
            if ($sort === 'title_asc') { $query->orderBy('title', 'asc'); }
            elseif ($sort === 'title_desc') { $query->orderBy('title', 'desc'); }
            elseif ($sort === 'oldest') { $query->oldest('posted_at'); }
            else { $query->latest('posted_at'); }
        } else {
            $query->latest('posted_at');
        }

        $jobs = (clone $query)->paginate($perPage)->withQueryString();
        $allActiveLocalJobs = (clone $baseQuery)->latest('posted_at')->get();

        $availableCompanies = $allActiveLocalJobs->pluck('department_or_company')->unique()->filter()->values();
        $availableEmploymentTypes = $allActiveLocalJobs->pluck('employment_type')->unique()->filter()->values();
        $totalActive = $allActiveLocalJobs->count();

        // Available Years for Trend Graph Filter
        $availableYears = JobPosting::ofType('private_local')
            ->selectRaw('YEAR(posted_at) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year')
            ->toArray();

        if (empty($availableYears)) {
            $availableYears = [Carbon::now()->year];
        }

        $selectedYear = $request->input('year', $availableYears[0]);

        // Initial Trend Graph Data for Selected Year
        $graphData = $this->getEmploymentTypeTrendData($selectedYear, $availableEmploymentTypes);

        $wisdomQuotes = $this->getWisdomQuotes(['private', 'local', 'all']);

        return view('pages.guest.careers.local-jobs', compact(
            'jobs', 'allActiveLocalJobs', 'latestFeaturedJobs', 'totalActive',
            'availableYears', 'selectedYear', 'graphData', 'wisdomQuotes', 'perPage',
            'availableCompanies', 'availableEmploymentTypes'
        ));
    }

    // Helper method for Trend Graph calculation per year
    private function getEmploymentTypeTrendData($year, $employmentTypes)
    {
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $colors = ['#059669', '#0284c7', '#d97706', '#7c3aed', '#e11d48'];
        $chartDatasets = [];
        $colorIndex = 0;

        $baseQuery = JobPosting::ofType('private_local')->whereYear('posted_at', $year);

        foreach ($employmentTypes as $type) {
            $dataPoints = [];
            for ($m = 1; $m <= 12; $m++) {
                $count = (clone $baseQuery)
                    ->where('employment_type', $type)
                    ->whereMonth('posted_at', $m)
                    ->count();
                $dataPoints[] = $count;
            }

            $color = $colors[$colorIndex % count($colors)];
            $chartDatasets[] = [
                'label' => $type ?? 'Full-time',
                'data' => $dataPoints,
                'borderColor' => $color,
                'backgroundColor' => $color,
                'pointBackgroundColor' => '#ffffff',
                'pointBorderColor' => $color,
                'pointBorderWidth' => 3,
                'pointRadius' => 5,
                'pointHoverRadius' => 7,
                'tension' => 0.3,
                'fill' => false
            ];
            $colorIndex++;
        }

        return [
            'labels' => $months,
            'datasets' => $chartDatasets
        ];
    }

    // Live AJAX Endpoint for Trend Graph Year Switching
    public function filterTrendGraph(Request $request)
    {
        $year = $request->input('year', Carbon::now()->year);
        $availableEmploymentTypes = JobPosting::ofType('private_local')
            ->pluck('employment_type')
            ->unique()
            ->filter()
            ->values();

        $graphData = $this->getEmploymentTypeTrendData($year, $availableEmploymentTypes);

        return response()->json([
            'status' => 'success',
            'data' => $graphData
        ]);
    }

    // FAQ Inquiry Submission with Preventive Security Measures
    public function sendFaqInquiry(Request $request)
    {
        // 1. Bot Honeypot Preventive Measure
        if ($request->filled('website_hp')) {
            return response()->json(['status' => 'error', 'message' => 'Spam detected.'], 400);
        }

        // 2. Strict Input Validation
        $validator = Validator::make($request->all(), [
            'full_name' => [
                'required', 'string', 'min:5', 'max:70',
                'regex:/^[a-zA-Z\s\.\-\']+$/', // Bawal ang numbers at symbols sa pangalan
                function ($attribute, $value, $fail) {
                    if (count(explode(' ', trim($value))) < 2) {
                        $fail('Mangyaring ilagay ang iyong kumpletong Buong Pangalan (First Name at Last Name).');
                    }
                }
            ],
            'email' => 'required|email:rfc,dns|max:100',
            'title' => 'required|string|min:6|max:120',
            'content' => 'required|string|min:15|max:1000',
        ], [
            'full_name.regex' => 'Ang pangalan ay dapat binubuo lamang ng mga letra.',
            'email.email' => 'Mangyaring maglagay ng totoong email address.',
            'content.min' => 'Ang mensahe ay dapat hindi bababa sa 15 character para maging malinaw.',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()->first()], 422);
        }

        $fullName = trim($request->input('full_name'));
        $email = strtolower(trim($request->input('email')));
        $title = trim($request->input('title'));
        $content = trim($request->input('content'));

        // 3. Gibberish / Nonsense Content Detection Preventative Rules
        if ($this->isNonsenseText($title) || $this->isNonsenseText($content)) {
            return response()->json([
                'status' => 'error', 
                'message' => 'Ang iyong mensahe ay natukoy na hindi malinaw o paulit-ulit na letra. Mangyaring ayusin ang nilalaman.'
            ], 422);
        }

        // Process inquiry (e.g. Log or send via mail)
        try {
            // Send email to PESO Camsur (or queue mail)
            // Mail::raw("Inquiry from $fullName ($email):\n\n$content", function($m) use ($title) {
            //     $m->to('phrmo@camarinessur.gov.ph')->subject("PESO Inquiry: $title");
            // });

            return response()->json([
                'status' => 'success',
                'message' => 'Matagumpay na naisend ang iyong katanungan sa PESO Camarines Sur! Mag-a-update kami sa iyong email.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Nagkaroon ng problema sa pagpapadala. Subukan ulit mamaya.'], 500);
        }
    }

    // Helper to check nonsense or repeating keys (e.g., "asdfghjkl", "aaaaaaa")
    private function isNonsenseText($text)
    {
        // Check repeating character streaks >= 5 (e.g. "aaaaa")
        if (preg_match('/(.)\1{4,}/i', $text)) {
            return true;
        }

        // Check keyboard key mash patterns
        $gibberishPatterns = ['asdfgh', 'qwerty', 'zxcvbn', '123456', 'hjklmn'];
        foreach ($gibberishPatterns as $pattern) {
            if (stripos($text, $pattern) !== false) {
                return true;
            }
        }

        return false;
    }

    // ==========================================
    // 3. OVERSEAS JOBS
    // ==========================================
    public function overseasJobs(Request $request)
    {
        $perPage = in_array($request->input('per_page'), [10, 25, 50]) ? (int)$request->input('per_page') : 10;
        $baseQuery = JobPosting::active()->ofType('overseas');

        $startOfMonth = Carbon::now()->startOfMonth();
        $latestFeaturedJobs = (clone $baseQuery)->where('posted_at', '>=', $startOfMonth)->latest('posted_at')->get();

        $query = clone $baseQuery;

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('department_or_company', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $jobs = (clone $query)->latest('posted_at')->paginate($perPage)->withQueryString();
        $allActiveOverseasJobs = (clone $query)->latest('posted_at')->get();

        $totalActive = $allActiveOverseasJobs->count();
        $destinationStats = $allActiveOverseasJobs->groupBy('location')->map(fn($group) => $group->count());
        $employmentTypeStats = $allActiveOverseasJobs->groupBy('employment_type')->map(fn($group) => $group->count());
        $wisdomQuotes = $this->getWisdomQuotes(['overseas', 'all']);

        return view('pages.guest.careers.overseas-jobs', compact(
            'jobs', 'allActiveOverseasJobs', 'latestFeaturedJobs', 'totalActive',
            'destinationStats', 'employmentTypeStats', 'wisdomQuotes', 'perPage'
        ));
    }

    // ==========================================
    // 4. SPES & INTERNSHIPS
    // ==========================================
    public function spesInternships(Request $request)
    {
        $perPage = in_array($request->input('per_page'), [10, 25, 50]) ? (int)$request->input('per_page') : 10;
        $baseQuery = JobPosting::active()->ofType('spes');

        $startOfMonth = Carbon::now()->startOfMonth();
        $latestFeaturedJobs = (clone $baseQuery)->where('posted_at', '>=', $startOfMonth)->latest('posted_at')->get();

        $query = clone $baseQuery;

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('department_or_company', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $jobs = (clone $query)->latest('posted_at')->paginate($perPage)->withQueryString();
        $allActiveSpesJobs = (clone $query)->latest('posted_at')->get();

        $totalActive = $allActiveSpesJobs->count();
        $employmentTypeStats = $allActiveSpesJobs->groupBy('employment_type')->map(fn($group) => $group->count());
        $wisdomQuotes = $this->getWisdomQuotes(['spes', 'all']);

        return view('pages.guest.careers.spes-internships', compact(
            'jobs', 'allActiveSpesJobs', 'latestFeaturedJobs', 'totalActive',
            'employmentTypeStats', 'wisdomQuotes', 'perPage'
        ));
    }
}