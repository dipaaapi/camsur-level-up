<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\PressRelease;
use Illuminate\Http\Request;

class NewsVideoController extends Controller
{
    /**
     * Display the News & Videos media hub page.
     */
    public function index(Request $request)
    {
        $query = PressRelease::query();

        // Search filter
        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%");
            });
        }

        // Category filter
        if ($request->filled('category') && $request->input('category') !== 'all') {
            $query->where('category', $request->input('category'));
        }

        // Year filter
        if ($request->filled('year') && $request->input('year') !== 'all') {
            $query->whereYear('published_at', $request->input('year'));
        }

        // Sorting
        $sort = $request->input('sort', 'latest');
        if ($sort === 'oldest') {
            $query->oldest('published_at');
        } elseif ($sort === 'az') {
            $query->orderBy('title', 'asc');
        } elseif ($sort === 'za') {
            $query->orderBy('title', 'desc');
        } else {
            $query->latest('published_at');
        }

        // Sub-tab detection for News & Press Releases page: 'all', 'news', 'press-releases'
        $tab = $request->input('tab', 'all');
        if (!in_array($tab, ['all', 'news', 'press-releases'])) {
            $tab = 'all';
        }

        // Sub-filter by tab if selected
        if ($tab === 'press-releases') {
            $query->where('category', 'like', '%Press Release%');
        } elseif ($tab === 'news') {
            $query->where('category', 'not like', '%Press Release%');
        }

        $news = $query->paginate(9)->withQueryString();

        // Featured news item
        $featured = PressRelease::where('is_featured', true)->first()
            ?? PressRelease::latest('published_at')->first();

        // Available categories and years for filters
        $categories = PressRelease::select('category')->distinct()->pluck('category')->filter()->values();
        $years = PressRelease::selectRaw('YEAR(published_at) as year')->distinct()->orderBy('year', 'desc')->pluck('year')->filter()->values();

        // Counts for tabs
        $totalAll = PressRelease::count();
        $totalPressReleases = PressRelease::where('category', 'like', '%Press Release%')->count();
        $totalNews = $totalAll - $totalPressReleases;

        return view('pages.guest.news.index', compact(
            'news', 
            'featured', 
            'categories', 
            'years', 
            'tab',
            'totalAll',
            'totalNews',
            'totalPressReleases'
        ));
    }

    /**
     * Display the dedicated Videos & Reels page.
     */
    public function videos(Request $request)
    {
        // Widescreen Horizontal Videos (16:9 Cinema Broadcasts)
        $videos = [
            [
                'id' => 1,
                'title' => 'CamSur: The Wakeboarding & Adventure Capital of the Philippines',
                'category' => 'Tourism & Adventure',
                'duration' => '3:45',
                'date' => 'August 2026',
                'thumbnail' => asset('img/home/stories/cwc.jpg'),
                'badge' => 'Documentary Spotlight',
                'embed_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0',
                'views' => '45.2K',
                'channel' => 'Visit CamSur Official'
            ],
            [
                'id' => 2,
                'title' => 'Caramoan Islands: Pristine White Sand & Marine Sanctuaries',
                'category' => 'Eco-Tourism',
                'duration' => '2:18',
                'date' => 'July 2026',
                'thumbnail' => asset('img/services/tourism/background/caramoan_gota.jpg'),
                'badge' => 'Special Feature',
                'embed_url' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FVisitCamsur%2Fvideos%2F1692915404860146%2F&show_text=false&width=560&t=0',
                'views' => '38.6K',
                'channel' => 'Visit CamSur Official'
            ],
            [
                'id' => 3,
                'title' => 'Digital Public Service & New Capitol Infrastructure Milestones',
                'category' => 'Governance',
                'duration' => '3:05',
                'date' => 'June 2026',
                'thumbnail' => asset('img/home/stories/capitol.jpg'),
                'badge' => 'Capitol Progress',
                'embed_url' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FVisitCamsur%2Fvideos%2F1692915404860146%2F&show_text=false&width=560&t=0',
                'views' => '21.4K',
                'channel' => 'Provincial Information Office'
            ],
            [
                'id' => 4,
                'title' => 'CamSur Watersports Complex: International Wakeboarding Experience',
                'category' => 'Sports & Tourism',
                'duration' => '4:20',
                'date' => 'May 2026',
                'thumbnail' => asset('img/services/tourism/background/cwc-background.jpg'),
                'badge' => 'Sports Special',
                'embed_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0',
                'views' => '52.8K',
                'channel' => 'CWC Sports Channel'
            ],
            [
                'id' => 5,
                'title' => 'Flavors of Camarines Sur: Authentic Culinary Heritage & Local Delicacies',
                'category' => 'Gastronomy & Culture',
                'duration' => '3:15',
                'date' => 'May 2026',
                'thumbnail' => asset('img/services/tourism/food/bicol_express.jpg'),
                'badge' => 'Food & Heritage',
                'embed_url' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FVisitCamsur%2Fvideos%2F1692915404860146%2F&show_text=false&width=560&t=0',
                'views' => '31.1K',
                'channel' => 'Flavors of Bicol'
            ],
            [
                'id' => 6,
                'title' => 'Kaogma Festival Highlights: Resilience, Joy, and Grandeur',
                'category' => 'Cultural Festival',
                'duration' => '5:10',
                'date' => 'May 2026',
                'thumbnail' => asset('img/home/stories/kaogma.jpg'),
                'badge' => 'Festival Film',
                'embed_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1101867399040724%2F&show_text=false&width=560&t=0',
                'views' => '88.4K',
                'channel' => 'Province of Camarines Sur'
            ]
        ];

        // Vertical Short-Form Video Reels (9:16 Social Format)
        $reels = [
            [
                'id' => 101,
                'title' => 'Quick Tour: 30 Seconds in Stunning Caramoan Cove',
                'category' => 'Destination Reel',
                'duration' => '0:30',
                'date' => 'August 2026',
                'thumbnail' => asset('img/services/tourism/background/caramoan_gota.jpg'),
                'badge' => 'Trending Reel',
                'embed_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0',
                'views' => '64.5K',
                'likes' => '12.4K',
                'channel' => 'Visit CamSur'
            ],
            [
                'id' => 102,
                'title' => 'Morning Wakeboard Run at CWC Pili',
                'category' => 'Adventure Short',
                'duration' => '0:25',
                'date' => 'July 2026',
                'thumbnail' => asset('img/home/stories/cwc.jpg'),
                'badge' => 'Action Reel',
                'embed_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0',
                'views' => '41.2K',
                'likes' => '8.7K',
                'channel' => 'CWC Sports'
            ],
            [
                'id' => 103,
                'title' => 'Authentic Spicy Bicol Express Sizzle!',
                'category' => 'Food Reel',
                'duration' => '0:20',
                'date' => 'June 2026',
                'thumbnail' => asset('img/services/tourism/food/bicol_express.jpg'),
                'badge' => 'Taste CamSur',
                'embed_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1532076858025327%2F&show_text=false&width=560&t=0',
                'views' => '53.9K',
                'likes' => '9.1K',
                'channel' => 'Visit CamSur'
            ],
            [
                'id' => 104,
                'title' => 'Kaogma Festival Energy & Street Dance Celebrations',
                'category' => 'Culture Reel',
                'duration' => '0:40',
                'date' => 'May 2026',
                'thumbnail' => asset('img/home/stories/kaogma.jpg'),
                'badge' => 'Festival Short',
                'embed_url' => 'https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1101867399040724%2F&show_text=false&width=560&t=0',
                'views' => '32.1K',
                'likes' => '6.4K',
                'channel' => 'Province of CamSur'
            ]
        ];

        // Filter by tab: 'all', 'videos', 'reels'
        $mediaTab = $request->input('tab', 'all');
        if (!in_array($mediaTab, ['all', 'videos', 'reels'])) {
            $mediaTab = 'all';
        }

        // Search query
        $q = $request->input('q', '');
        if ($q) {
            $videos = array_values(array_filter($videos, function($v) use ($q) {
                return stripos($v['title'], $q) !== false || stripos($v['category'], $q) !== false;
            }));
            $reels = array_values(array_filter($reels, function($r) use ($q) {
                return stripos($r['title'], $q) !== false || stripos($r['category'], $q) !== false;
            }));
        }

        return view('pages.guest.news.videos', compact('videos', 'reels', 'mediaTab', 'q'));
    }

    /**
     * Display a specific news story or press release.
     */
    public function show($slug)
    {
        $article = PressRelease::where('slug', $slug)->firstOrFail();
        $related = PressRelease::where('id', '!=', $article->id)
            ->where('category', $article->category)
            ->latest('published_at')
            ->take(3)
            ->get();

        if ($related->isEmpty()) {
            $related = PressRelease::where('id', '!=', $article->id)
                ->latest('published_at')
                ->take(3)
                ->get();
        }

        return view('pages.guest.news.show', compact('article', 'related'));
    }
}
