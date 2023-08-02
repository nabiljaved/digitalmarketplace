<?php

namespace App\Http\Controllers;
use App\Mail\NewsletterSubscriptionConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Models\NewsletterEmail;



use Illuminate\Http\Request;


class MailController extends Controller
{
    public function EmailSubscription(Request $request){

        $email = $request->email;

    // Check if the email exists in the database
    $newsletterEmail = NewsletterEmail::where('email', $email)->first();

    try {
        // If the email exists in the database, just send the email and redirect
        if ($newsletterEmail) {
            Mail::to($email)->send(new NewsletterSubscriptionConfirmation($email));
            return redirect()->back()->with('success', 'Thank you for Subscribing to Our Newsletter');
        }

        // If the email does not exist in the database, save it and then send the email
        $newsletterEmail = new NewsletterEmail();
        $newsletterEmail->email = $email;
        $newsletterEmail->subscribed = true;
        $newsletterEmail->save();

        Mail::to($email)->send(new NewsletterSubscriptionConfirmation($email));
        
        return redirect()->back()->with('success', 'Thank you for Subscribing to Our Newsletter');

    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Server Error, please try again later');
    }

    }

    public function deleteNewsletter(Request $request)
    {
        $letterId = $request->input('letter_id');
    
        // Find the newsletter by ID and delete it
        $newsletter = NewsletterEmail::find($letterId);
        if ($newsletter) {
            $newsletter->delete();
            return redirect()->route('show-newsletters')->with('success', 'Newsletter deleted successfully.');
        } else {
            return redirect()->route('show-newsletters')->with('error', 'Newsletter not found.');
        }
    }
}
