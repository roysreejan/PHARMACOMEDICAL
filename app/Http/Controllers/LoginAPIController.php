<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;
use App\Models\Otps;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;


class LoginAPIController extends Controller
{
    //
    public function login(Request $req)
    {
        $user = Users::where('email',$req->email)->where('password', md5($req->password))->first();
        if($user){
            $api_token = Str::random(64);
            $token = new Token();
            $token->email = $user->email;
            $token->userID = $user->userID;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            // if($user->role == "admin"){
            //     $token->role = "admin";
            // }
            // else if($user->role == "doctor"){
            //     $token->role = "doctor";
            // }
            // else if($user->role == "patient"){
            //     $token->role = "patient";
            // }
            // else if($user->role == "pharmacist"){
            //     $token->role = "pharmacist";
            // }
            $token->save();
            return $token;
        }
        return "No user found";
    }
    public function  logout(Request $req){
        $token = Token::where('token',$req->token)->first();
        if($token){
            $token->expired_at = new DateTime();
            $token->save();
            return "Logout";
        }
    }
    //registration with email otp send
    
    public function registration(Request $request){

        $otp = random_int(1000, 9000);
        $data = new Otps();
        $data->otp = $otp;
        $data->email = $request->email;
        $data->created_at = new DateTime();
        $data->save();

        $emailAddress = $request->email;
        $details = [
            'tittle' => 'Email Verification',
            'OTP' => $otp,
        ];

        Mail::to($emailAddress)->send(new MyMail($details));
        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phoneNumber = $request->phoneNumber;
        $user->password = md5($request->password);
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->role = $request->role;
        $user->save();


        $api_token = Str::random(64);
        $token = new Token();
        $token->userID = $user->userID;
        $token->email = $user->email;
        $token->token = $api_token;
        $token->role = $user->role;
        $token->created_at = new DateTime();
        $token->save();
        return $token;

    }
    public function otp(Request $request){
        $otp = $request->otp;
        $data = Otps::where('otp', $otp)->where('expired_at', NULL)->first();
        if($data){
            Users::where('email', $data->email)->update(['verified' => 'true']);
            Otps::where('otp', $data->otp)->update(['expired_at' => true]);
            return $data;
        }
        return "Otp Invalid";
    }
}
