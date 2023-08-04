<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\CreditPayment;
use App\Mail\CheckConfirmEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use App\Models\CardPayment;





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
            return response()->json(['message' => $e->getMessage()], 404);
        }
    } else {
        // There was an error saving the form data
        // You can perform error handling or display an error message here
        return response()->json(['message' => $e->getMessage()], 404);
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

    //Dirham Conversion 

 


    public function processPayment(Request $request)
    {

                function convertToCents($amount, $currency)
        {
            // Check if the currency is AED
            if (strtolower($currency) === 'aed') {
                // Convert the amount to cents and return it
                return (int) round($amount * 100);
            } else {
                // If the currency is not AED, return the original amount
                return (int) round($amount);
            }
        }

        // Retrieve user information
        $user = Auth::user();
        $userid = $user->id;
        $username = $user->name;
        $useremail = $user->email;
        $userphone = $user->phone;
    
        // Retrieve payment data from the request
        $requestData = $request->all();
        $paymentMethodId = $requestData['payment_method_id'];
        $serviceTitle = $requestData['servicetitle'];
        $totalPrice = $requestData['totalPrice'];
        $couponcharge =  $requestData['couponcharge'];
        $servicecharge =  $requestData['servicecharge'];
        $serviceId = $requestData['serviceid'];

        // return response()->json($requestData);

    
        // Convert total price to cents if the currency is AED
        $currency = 'aed';
        $amountInCents = convertToCents((float)$totalPrice, $currency);
        $amountInCents += convertToCents((float)$servicecharge, $currency);

          // Add coupon charge if not null or 0
        if ($couponcharge !== null && (float)$couponcharge !== 0) {
            $amountInCents += convertToCents((float)$couponcharge, $currency);
        }

    
        Stripe::setApiKey(config('services.stripe.secret'));
    
        try {
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $amountInCents,
                'currency' => $currency,
                'payment_method' => $paymentMethodId,
                'confirm' => true,
                'metadata' => [
                    'userid' => $userid,
                    'user_namne' => $user->name,
                    'user_email' => $user->email,
                    'phone_no' => $user->phone,
                   'service_title' => $serviceTitle,
                ],
            ]);

                    // Save the payment data to the database
            $cardPayment = CardPayment::create([
                'status' => 'success', // You can get this from the payment response
                'message' => 'Payment successful', // You can get this from the payment response
                'payment_id' => $paymentIntent->id,
                'userid' => $userid,
                'service_id' => $serviceId, // Replace this with the actual service ID if available
                'amount_captured' => $paymentIntent->amount,
                'service_charge' => $servicecharge,
                'coupon_charge' => $couponcharge,
                'payment_method' => $paymentIntent->charges->data[0]->payment_method_details->card->network,
                'card_brand' => $paymentIntent->charges->data[0]->payment_method_details->card->brand,
                'card_country' => $paymentIntent->charges->data[0]->payment_method_details->card->country,
                'currency' => $paymentIntent->currency,
            ]);
    
            return redirect()->route('index')->with('success', 'Thank you for making Digital Transaction');


        } catch (\Stripe\Exception\CardException $e) {
            // Handle card-related errors
            return redirect()->route('index')->with('error',  $e->getMessage());
        } catch (\Exception $e) {
            // Handle other errors
            return redirect()->route('index')->with('error',  $e->getMessage());
        }
    }
    
    function convertToCents($amount, $currency)
    {
        // Check if the currency is AED
        if (strtolower($currency) === 'aed') {
            // Convert the amount to cents and return it
            return (int) round($amount * 100);
        } else {
            // If the currency is not AED, return the original amount
            return (int) round($amount);
        }
    }
    
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }



   
}
