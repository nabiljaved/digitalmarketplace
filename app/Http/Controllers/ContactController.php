<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactConfirmEmail;

class ContactController extends Controller
{
    public function store(Request $request){

        //  $requestData = $request->all();
        // return response()->json(['data'=>$requestData]);

       // Validate the form data
       $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phoneno' => 'required|string|max:20',
        'message' => 'required|string|max:1000',
    ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // If validation passes, proceed to save the data
        $contact = new Contact([
            'name' => $request->name,
            'email' => $request->email,
            'phoneno' => $request->phoneno,
            'message' => $request->message,
        ]);

        // Save the data
        if ($contact->save()) {
            Mail::to($request->email)->send(new ContactConfirmEmail($request->name, $request->email, $request->phoneno, $request->message));
            return redirect()->back()->with('success', 'Success: Your message has been sent successfully!');
        } else {
            return redirect()->back()->with('error', 'Error: Failed to save the contact. Please try again.');
        }

    }
}
