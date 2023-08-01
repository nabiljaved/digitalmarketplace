<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\CreditPayment;



class PaymentController extends Controller
{
    public function bookingPage($slug){

        if (Auth::check() && Auth::user()->type === 'user') {
            $serviceSlug = $slug;
            $service = Service::where('service_slug', $slug)->first();
            return view('booking-payment', compact('serviceSlug', 'service'));
        } else {
            // User is either not authenticated or not of type 'user'
            return redirect()->route('user-signup')->with('warning', 'please register first');
        }
  

    }

    public function CheckPayment(Request $request){

    // $requestData = $request->all();
    // return response()->json($requestData);

       // Retrieve user details from the form input
       $name = $request->input('name');
       $address = $request->input('address');
       $phone = $request->input('phone');
       $date = $request->input('date');
       $totalPrice = $request->input('totalPrice');
       $servicetitle = $request->input('servicetitle');


       // Access authenticated user's information (assuming you have set up authentication correctly)
       $user = Auth::user();
       $userId = $user->id;

       $creditPayment = new CreditPayment([
        'name' => $name,
        'address' => $address,
        'phone' => $phone,
        'date' => $date,
        'totalPrice' => $totalPrice,
        'servicetitle' => $servicetitle,
        'user_id' => $userId,
    ]);

    $saved = $creditPayment->save();


    if ($saved) {
        // The form data has been successfully saved in the database
        // You can perform additional actions or display a success message here
        return redirect()->route('index')->with('success', 'Thank you! we will contact soon for check collection !');
    } else {
        // There was an error saving the form data
        // You can perform error handling or display an error message here
        return redirect()->back()->with('error', 'Failed to submit the form. Please try again.');
    }


    }
}
