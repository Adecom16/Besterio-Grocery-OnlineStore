<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;

class AuthOtpController extends Controller

{
    // mail



    private function sendOtpEmail($user, $otp)
    {
        Mail::to($user->email)->send(new OtpMail($otp));
    }



    // Display the OTP login page view
    public function login()
    {
        return view('auth.otp-login');
    }

    // Generate OTP
    public function generate(Request $request)
    {
        // Validate user input
        $request->validate([
            'email' => 'required|exists:users,email'
        ]);

        // Generate an OTP and get the user's ID
        $user = User::where('email', $request->email)->first();
        $verificationCode = $this->generateOtp($user);

        // Send OTP via email
        $this->sendOtpEmail($user, $verificationCode->otp);


        // Redirect to the OTP verification page with a success message
        return redirect()->route('otp.verification', ['user_id' => $verificationCode->user_id, 'email' => $user->email])
        ->with('success', 'An OTP has been sent to your email.');

    }

    // Generate a unique OTP for the user
    // private function generateOtp($user)
    // {
    //     // Check if the user already has an existing OTP that hasn't expired
    //     $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();

    //     $now = Carbon::now();

    //     if ($verificationCode && $now->isBefore($verificationCode->expire_at)) {
    //         return $verificationCode;
    //     }

    //     // Create a new OTP
    //     return VerificationCode::create([
    //         'user_id' => $user->id,
    //         'otp' => rand(123456, 999999),
    //         'expire_at' => Carbon::now()->addMinutes(10)
    //     ]);
    // }

    // Display the OTP verification page view
    // public function verification($user_id)
    // {
    //     return view('auth.otp-verification')->with([
    //         'user_id' => $user_id
    //     ]);
    // }

    // Handle OTP verification and user login
    // public function loginWithOtp(Request $request)
    // {
    //     // Validate user input
    //     $request->validate([
    //         'user_id' => 'required|exists:users,id',
    //         'otp' => 'required'
    //     ]);

    //     // Attempt to find the verification code
    //     $verificationCode = VerificationCode::where('user_id', $request->user_id)->where('otp', $request->otp)->first();

    //     $now = Carbon::now();

    //     if (!$verificationCode) {
    //         return redirect()->back()->with('error', 'Your OTP is not correct');
    //     } elseif ($now->isAfter($verificationCode->expire_at)) {
    //         return redirect()->route('otp.login')->with('error', 'Your OTP has expired');
    //     }

    //     // Successfully verified OTP, log in the user
    //     $user = User::find($request->user_id);

    //     if ($user) {
    //         // Expire the OTP
    //         $verificationCode->update([
    //             'expire_at' => Carbon::now()
    //         ]);

    //         Auth::login($user);

    //         return view('auth.login');
    //     }

    //     return redirect()->route('otp.login')->with('error', 'Your OTP is not correct');
    // }
}
