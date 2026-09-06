<?php

namespace App\Http\Controllers;

use App\Models\PublicInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PublicInquiryController extends Controller
{
    /**
     * Store a public submission from the citizen inquiry modal.
     */
    public function store(Request $request)
    {
        // 1. Honeypot check: If the hidden honeypot field is filled, silently reject bot
        if ($request->filled('website_hp')) {
            return response()->json([
                'success' => true,
                'message' => 'Your inquiry has been received.',
                'reference_id' => rand(1000, 9999),
            ]);
        }

        // 2. Submission speed check: Forms submitted under 2 seconds are automated bots
        $formLoadedTime = $request->input('form_load_timestamp');
        if ($formLoadedTime && (time() - (int)$formLoadedTime) < 2) {
            return response()->json([
                'success' => false,
                'message' => 'Please take a moment to review your message before submitting.',
            ], 429);
        }

        $validator = Validator::make($request->all(), [
            'page_context' => 'required|string|max:100',
            'subject_title' => 'required|string|max:255',
            'feedback_type' => 'required|in:comment,suggestion,complaint,inquiry',
            'category' => 'required|string|max:100',
            'sender_name' => 'nullable|string|max:150',
            'location_sector' => 'required|string|max:150',
            'message' => 'required|string|min:10|max:5000',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:10240', // 10MB max
        ], [
            'message.min' => 'Please provide a more detailed message (minimum 10 characters).',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();

        // 3. Duplicate Flood Protection: check if identical message was submitted in the last 5 minutes
        $recentDuplicate = PublicInquiry::where('subject_title', $data['subject_title'])
            ->where('message', $data['message'])
            ->where('created_at', '>=', now()->subMinutes(5))
            ->exists();

        if ($recentDuplicate) {
            return response()->json([
                'success' => false,
                'message' => 'A submission with the exact same subject and content was recently received. Please wait a few minutes before submitting again.',
            ], 429);
        }

        $attachmentPath = null;
        $attachmentName = null;

        if ($request->hasFile('attachment') && $request->file('attachment')->isValid()) {
            $file = $request->file('attachment');
            $attachmentName = $file->getClientOriginalName();
            $attachmentPath = $file->store('public_inquiries', 'public');
        }

        $inquiry = PublicInquiry::create([
            'page_context' => $data['page_context'],
            'subject_title' => $data['subject_title'],
            'feedback_type' => $data['feedback_type'],
            'category' => $data['category'],
            'sender_name' => $data['sender_name'] ?? null,
            'location_sector' => $data['location_sector'],
            'message' => $data['message'],
            'attachment_path' => $attachmentPath,
            'attachment_name' => $attachmentName,
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Your inquiry/feedback has been received and logged successfully.',
            'reference_id' => $inquiry->id,
        ]);
    }
}
