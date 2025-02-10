<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function submitContactForm(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Prepare the email data
        $emailData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message_text' => $request->input('message'),
        ];

        // Send email (you need to configure your email settings)
        Mail::send('emails.contact', $emailData, function ($message) use ($emailData) {
            $message->to(env('ADMIN_EMAIL'))
                    ->subject('New Contact Form Submission - '.$emailData['subject'])
                    ->from($emailData['email'], $emailData['name']);
        });

        // Redirect back with success message
        return redirect()->back()->with('success', __('app.messages.success_message_contact'));
    }
}
