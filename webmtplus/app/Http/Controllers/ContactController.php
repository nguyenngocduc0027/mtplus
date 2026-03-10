<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
            'terms_accepted' => 'accepted',
        ], [
            'name.required' => __('common.validation.name_required'),
            'email.required' => __('common.validation.email_required'),
            'email.email' => __('common.validation.email_invalid'),
            'subject.required' => __('common.validation.subject_required'),
            'message.required' => __('common.validation.message_required'),
            'terms_accepted.accepted' => __('common.validation.terms_required'),
        ]);

        // Save contact with IP address
        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'terms_accepted' => true,
            'ip_address' => $request->ip(),
            'status' => 'new',
        ]);

        // Return success response for AJAX
        return response()->json([
            'success' => true,
            'message' => __('common.contact_success'),
        ]);
    }
}
