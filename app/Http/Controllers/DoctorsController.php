<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Users;
use App\Http\Requests\StoreDoctorsRequest;
use App\Http\Requests\UpdateDoctorsRequest;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function show(Doctors $doctors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctors $doctors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorsRequest  $request
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorsRequest $request, Doctors $doctors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctors $doctors)
    {
        //
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
        $user->role = "doctor";
        $user->save();
        
        return view('pages.login');
    }
    public function homeDoctor(){
        return view('doctors.homeDoctor');
    }
    public function docotrdash(){
        return view('doctors.homeDoctor');
    }
    public function profileAdminSubmit(Request $request){
        $user = Users::where('name', $request->name)->where('role', 'doctor')->first();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phoneNumber = $request->phone;
        $user->password = md5($request->password);
        $user->dob = $request->dob;
        $user->role = 'doctor';
        $user->save();
        return redirect()->route('homeDoctor');
    }
    public function logout(){
        session()->forget('user');
        return view('pages.login');
    }
}
