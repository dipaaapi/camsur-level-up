<?php

// app/Http/Controllers/Admin/HistoryContentController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{HistoryEra, HistoryCitation, HistoryTimelineItem, HistoryCarouselSlide, HistoryGovernanceCard, HistoryCapitolLevel};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HistoryContentController extends Controller
{
    protected $models = [
        'eras'            => HistoryEra::class,
        'citations'       => HistoryCitation::class,
        'timeline'        => HistoryTimelineItem::class,
        'carousel'        => HistoryCarouselSlide::class,
        'governance'      => HistoryGovernanceCard::class,
        'levels'          => HistoryCapitolLevel::class,
    ];

    public function index()
    {
        $data = [];
        foreach ($this->models as $key => $model) {
            $data[$key] = $model::orderBy('sort_order')->get();
        }
        $data['eras_list'] = HistoryEra::pluck('label', 'id');
        return view('admin.history-content.index', $data);
    }

    public function store(Request $request, string $section)
    {
        $model = $this->models[$section] ?? abort(404);
        $data = $request->except('_token');

        // Handle image uploads if present
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('history-content', 'public');
        }

        // JSON fields
        if (in_array($section, ['timeline'])) {
            $data['body'] = array_filter(explode("\n", $request->body_text ?? ''));
            $data['facts'] = json_decode($request->facts_json ?? '[]', true);
            $data['sources'] = json_decode($request->sources_json ?? '[]', true);
        }

        $model::create($data);
        return back()->with('status', ucfirst($section) . ' item created.');
    }

    public function update(Request $request, string $section, int $id)
    {
        $model = $this->models[$section] ?? abort(404);
        $item = $model::findOrFail($id);
        $data = $request->except('_token', '_method');

        if ($request->hasFile('image')) {
            if ($item->image) Storage::disk('public')->delete($item->image);
            $data['image'] = $request->file('image')->store('history-content', 'public');
        }

        if ($section === 'timeline') {
            $data['body'] = array_filter(explode("\n", $request->body_text ?? ''));
            $data['facts'] = json_decode($request->facts_json ?? '[]', true);
            $data['sources'] = json_decode($request->sources_json ?? '[]', true);
        }

        $item->update($data);
        return back()->with('status', ucfirst($section) . ' item updated.');
    }

    public function destroy(string $section, int $id)
    {
        $model = $this->models[$section] ?? abort(404);
        $item = $model::findOrFail($id);
        if ($item->image) Storage::disk('public')->delete($item->image);
        $item->delete();
        return back()->with('status', ucfirst($section) . ' item deleted.');
    }
}
