<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\CreditPayment;
use App\Mail\CheckConfirmEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;



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

        //  $requestData = $request->all();
        // return response()->json(['data'=>$requestData]);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string',
            'date' => 'required|date',
            'totalPrice' => 'required|numeric',
            'servicetitle' => 'required|string',
            'servicecharge' => 'required|numeric',
            'serviceid' => 'required|numeric',
            'couponcharge' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }



       $name = $request->input('name');
       $address = $request->input('address');
       $phone = $request->input('phone');
       $date = $request->input('date');
       $totalPrice = $request->input('totalPrice');
       $servicetitle = $request->input('servicetitle');

       $servicecharge = $request->input('servicecharge');
       $serviceid = $request->input('serviceid');
       $couponcharge = $request->input('couponcharge');


       // Access authenticated user's information (assuming you have set up authentication correctly)
       $user = Auth::user();
       $userId = $user->id;
       $email = $user->email;

    //    return response()->json(['mail' => $email]);


       $creditPayment = new CreditPayment([
        'name' => $name,
        'address' => $address,
        'phone' => $phone,
        'date' => $date,
        'totalPrice' => $totalPrice,
        'servicetitle' => $servicetitle,
        'user_id' => $userId,
        'service_id' => $serviceid,
        'service_charge' =>  $servicecharge,
        'coupon_charge' => $couponcharge
    ]);

    $saved = $creditPayment->save();


    if ($saved) {
        try {
            Mail::to($email)->send(new CheckConfirmEmail($servicetitle, $totalPrice, $servicecharge, $couponcharge, $email));
            return redirect()->route('index')->with('success', 'Thank you! We will contact you soon for check collection!');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Error sending email: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to submit the form. Please try again.');
        }
    } else {
        // There was an error saving the form data
        // You can perform error handling or display an error message here
        return redirect()->back()->with('error', 'Failed to submit the form. Please try again.');
    }


    }

    public function deletePayment(Request $request){

        $payment_id = $request->input('payment_id');

        // Find the payment with the given ID
        $payment = creditPayment::find($payment_id);
    
        // Check if the payment exists
        if (!$payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }
    
        // Delete the payment
        $payment->delete();

        return redirect()->route('credit-payments')->with('success', 'Credit Record Deleted !');



    }


   
}
