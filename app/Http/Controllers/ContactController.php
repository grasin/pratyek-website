<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $to       = config('mail.contact_to', env('MAIL_TO', 'hello@pratyek.com'));
        $fromName = $validated['name'];
        $fromAddr = $validated['email'];

        try {
            Mail::raw($validated['message'], function ($mail) use ($to, $fromName, $fromAddr) {
                $mail->to($to)
                    ->subject('Pratyek contact form — ' . $fromName)
                    ->replyTo($fromAddr, $fromName);
            });
        } catch (\Throwable $e) {
            // Don't expose mailer errors to the user — log and degrade gracefully.
            Log::error('Contact form mail failed', [
                'error' => $e->getMessage(),
                'name'  => $fromName,
                'email' => $fromAddr,
            ]);
            // Still record the submission so it's not lost.
            Log::info('Contact form (mail failed, message preserved)', $validated);
        }

        return back()->with('success', "Thanks, {$fromName}. We've got your message and will reply soon.");
    }
}
