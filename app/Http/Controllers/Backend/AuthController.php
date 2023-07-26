<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;





class AuthController extends Controller
{
    public function RegisterProvider(Request $request){

        // $requestData = $request->all();
        // return response()->json(['data'=>$requestData]);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'type' => 'required|string|in:provider,admin,user',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        try{

            $user =  User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('password')),
                'type' => $request->input('type'),
            ]);

             // Log in the user programmatically after registration
        Auth::login($user);

            return redirect()->route('index')->with('success','registered as provider');


        }catch (\Exception $e) {
            return response()->json(['error' => $e ]);
        }


    }

    public function RegisterUser(Request $request){

        // $requestData = $request->all();
        // return response()->json(['data'=>$requestData]);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'type' => 'required|string|in:provider,admin,user',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        try{

            $user =  User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('password')),
                'type' => $request->input('type'),
            ]);

             // Log in the user programmatically after registration
        Auth::login($user);

            return redirect()->route('index')->with('success','registered as Customer');


        }catch (\Exception $e) {
            return response()->json(['error' => $e ]);
        }


    }

    public function LogoutUser(){

        Auth::logout();
        return redirect()->route('index')->with('success','successfully log out');

    }

    public function loginUser(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Please Enter Correct Fields');

            // return response()->json(['errors' => $validator->errors()], 400);
        }
    
        // Check if the user exists in the database
        $user = User::where('email', $request->input('email'))->first();
    
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
    
        // Check if the provided password matches the stored password
        if (!Hash::check($request->input('password'), $user->password)) {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    
        // Attempt to log in the user
        Auth::login($user);
    
        return redirect()->route('index')->with('success','Login SuccessFull');
    }
}
