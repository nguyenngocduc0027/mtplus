<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search by name, email, or subject
        if ($request->filled('search')) {
            $search = $request->input('search');
            $search = str_replace(['%', '_'], ['\\%', '\\_'], $search);
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        $contacts = $query->latest()->paginate(20)->withQueryString();

        // Get counts for badges
        $newCount = Contact::new()->count();
        $readCount = Contact::read()->count();

        $pageTitle = __('admin.contacts.all_contacts');

        return view('backend.pages.contacts.index', compact('contacts', 'newCount', 'readCount', 'pageTitle'));
    }

    public function show(Contact $contact)
    {
        // Mark as read if not already
        if ($contact->status === 'new') {
            $contact->markAsRead();
        }

        $pageTitle = __('admin.contacts.contact_details');

        return view('backend.pages.contacts.show', compact('contact', 'pageTitle'));
    }

    public function updateStatus(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'status' => 'required|in:new,read,replied,archived',
        ]);

        $contact->update($validated);

        if ($validated['status'] === 'read' && !$contact->read_at) {
            $contact->update(['read_at' => now()]);
        }

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('admin.contacts.status_updated'),
            ]);
        }

        return redirect()->route('admin.contacts.index')
            ->with('success', __('admin.contacts.status_updated'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', __('admin.contacts.delete_success'));
    }

    public function bulkDelete(Request $request)
    {
        $validated = $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:contacts,id',
        ]);

        Contact::whereIn('id', $validated['ids'])->delete();

        return response()->json([
            'success' => true,
            'message' => __('admin.contacts.bulk_delete_success'),
        ]);
    }
}
