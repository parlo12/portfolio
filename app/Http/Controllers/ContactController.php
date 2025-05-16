<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits_between:10,15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::send([], [], function ($message) use ($validated) {
            $message->to('rolflouisdor@gmail.com')
                    ->subject($validated['subject'])
                    ->from($validated['email'], $validated['name'])
                    ->setBody('<p><strong>Name:</strong> ' . $validated['name'] . '</p>'
                            . '<p><strong>Email:</strong> ' . $validated['email'] . '</p>'
                            . '<p><strong>Phone:</strong> ' . $validated['phone'] . '</p>'
                            . '<p><strong>Message:</strong><br>' . nl2br($validated['message']) . '</p>', 'text/html');
        });

        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
