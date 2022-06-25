<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;
use App\Models\Users;
use Illuminate\Support\Facades\Cookie;

class PagesController extends Controller
{
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
        elseif($user && $user->role == "pharmacist"){
            $request->session()->put('user', $user->name);
            return redirect()->route('homePharmacist');
        }
        else{
            return "User name and Password do not match";
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



    public function doctorFee()
    {
        $user_name = session()->get('user');
        $user = Users::where('name', $user_name)->first();
        return view('doctors.doctorfee')->with('user', $user);
    }
}
