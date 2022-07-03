<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Auth;
use Exception;
use Socialite;
use Validator;
use DB;


class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    //----------------------------Login----------------------------//
    public function login(){
        return view('pages.login');
    }
    public function loginSubmit(Request $request){
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],
        [
            'email.required' => 'Please enter your email',
            'password.required' => 'Please enter your password',
        ]);

        $userName = $request->input('email');
        $password = $request->input('password');

        $user = Users::where('email', $request->email)
            ->where('password', md5($request->password))
            ->first();
        if($user){
            if($user->verified == "true"){
                if($user && $user->role == "admin"){
                    $request->session()->put('user', $user->name);
                    return redirect()->route('homeAdmin');
                }
                else if($user && $user->role == "doctor"){
                    $request->session()->put('user', $user->name);
                    $request->session()->put('ID', $user->userID);
                    return redirect()->route('homeDoctor');
                }
                else if($user && $user->role == "patient"){
                    $request->session()->put('user', $user->name);
                    return redirect()->route('homePatient');
                }
                else if($user && $user->role == "pharmacist"){
                    $request->session()->put('user', $user->name);
                    return redirect()->route('homePharmacist');
                }
            }
            else{
                return redirect()->route('login')->with('error', 'Your account is not verified.');
            }
        }
        else{
            return redirect()->route('login')->with('error1', 'Invalid email or password');
        }
    }
    //Facebook Login
    public function facebookRedirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook(){
        try {
            $user = Socialite::driver('facebook')->user();
            $isUser = Users::where('fb_id', $user->id)->first();
            if($isUser){
                Auth::login($isUser);
                $request->session()->put('user', $isUser->name);
                $request->session()->put('ID', $isUser->userID);
                return redirect()->route('homeDoctor');
            }
            else{
                $newUser = new Users();
                $newUser->name = $user->name;
                $newUser->email = $user->email;
                $newUser->fb_id = $user->id;
                $newUser->password = md5(12345678);
                $newUser->role = "doctor";
                $newUser->save();
                $request->session()->put('user', $newUser->name);
                $request->session()->put('ID', $newUser->userID);

                Auth::login($newUser);
                return redirect()->route('homeDoctor');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    //google Login
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }
    public function loginWithGoogle(){
        try {
            $user = Socialite::driver('google')->user();
            $isUser = Users::where('google_id', $user->id)->first();
            if($isUser){
                Auth::login($isUser);
                $request->session()->put('user', $isUser->name);
                $request->session()->put('ID', $isUser->userID);
                return redirect()->route('homeDoctor');
            }
            else{
                $newUser = new Users();
                $newUser->name = $user->name;
                $newUser->email = $user->email;
                $newUser->google_id = $user->id;
                $newUser->password = md5(12345678);
                $newUser->role = "doctor";
                $newUser->save();
                $request->session()->put('user', $newUser->name);
                $request->session()->put('ID', $newUser->userID);

                Auth::login($newUser);
                return redirect()->route('homeDoctor');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    //.........................Registration.........................//
    public function registration(){
        return view('pages.registration');
    }

    public function registrationSubmit(Request $request){
        $validate = $request->validate([
            'name' => 'required| min:3',
            'email' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6|same:password',
            'dob' => 'required',
            'gender' => 'required',
            'role' => 'required'
        ],
        ['name.required'=>"Please put you name here",
        'name.min'=>"Name must be at least 3 characters long"],
    );
        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phoneNumber = $request->phone;
        $user->password = md5($request->password);
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->role = $request->role;
        $user->save();
        
        return view('pages.login');
    }

    public function logout(){
        session()->forget('user');
        return view('pages.login');
    }
}
