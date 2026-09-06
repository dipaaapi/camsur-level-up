<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PublicInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPublicInquiryController extends Controller
{
    /**
     * Display a listing of public inquiries with filtering.
     */
    public function index(Request $request)
    {
        $query = PublicInquiry::query()->latest();

        // Filter by page context
        if ($request->filled('page_context') && $request->page_context !== 'all') {
            $query->where('page_context', $request->page_context);
        }

        // Filter by feedback type (comment, suggestion, complaint, inquiry)
        if ($request->filled('feedback_type') && $request->feedback_type !== 'all') {
            $query->where('feedback_type', $request->feedback_type);
        }

        // Filter by status
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Search in title, sender, location, message
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('subject_title', 'like', "%{$search}%")
                  ->orWhere('sender_name', 'like', "%{$search}%")
                  ->orWhere('location_sector', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $inquiries = $query->paginate(15)->withQueryString();

        // Statistics counts
        $stats = [
            'total' => PublicInquiry::count(),
            'pending' => PublicInquiry::where('status', 'pending')->count(),
            'under_review' => PublicInquiry::where('status', 'under_review')->count(),
            'resolved' => PublicInquiry::where('status', 'resolved')->count(),
            'complaints' => PublicInquiry::where('feedback_type', 'complaint')->count(),
            'suggestions' => PublicInquiry::where('feedback_type', 'suggestion')->count(),
        ];

        // Available distinct page contexts for dropdown
        $pageContexts = PublicInquiry::select('page_context')->distinct()->pluck('page_context');

        return view('admin.public-inquiries.index', compact('inquiries', 'stats', 'pageContexts'));
    }

    /**
     * Update the status and admin notes for a public inquiry.
     */
    public function update(Request $request, $id)
    {
        $inquiry = PublicInquiry::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,under_review,resolved,archived',
            'admin_notes' => 'nullable|string|max:3000',
        ]);

        $inquiry->update($validated);

        return redirect()->back()->with('status', 'Inquiry #' . $inquiry->id . ' has been successfully updated.');
    }

    /**
     * Delete an inquiry and its attachment.
     */
    public function destroy($id)
    {
        $inquiry = PublicInquiry::findOrFail($id);

        if ($inquiry->attachment_path && Storage::disk('public')->exists($inquiry->attachment_path)) {
            Storage::disk('public')->delete($inquiry->attachment_path);
        }

        $inquiry->delete();

        return redirect()->back()->with('status', 'Inquiry #' . $id . ' has been deleted.');
    }
}
