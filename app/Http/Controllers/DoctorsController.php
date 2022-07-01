<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Users;
use App\Http\Requests\StoreDoctorsRequest;
use App\Http\Requests\UpdateDoctorsRequest;
use Illuminate\Http\Request;
use Session;
use DB;

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
    public function homeDoctor(){
        return view('doctors.homeDoctor');
    }
    public function doctorFee()
    {
        return view('doctors.doctorFee');
    }
    public function doctorFeeSubmit(Request $request)
    {
        $validate = $request->validate([
            'doctor_fee' => 'required|numeric',
        ]);
        //insert fee in doctor table
        $doctor = new Doctors();
        $doctor->userID = Session::get('ID');
        $doctor->fee = $request->doctor_fee;
        $doctor->save();
        return redirect()->route('doctorFee');
    }
    public function doctorAppointments()
    {
        $appointments = DB::table('appointments')->leftJoin('users', 'appointments.userID', '=', 'users.userID')->where('appointments.doctorID', '=', Session::get('ID'))->where('appointments.hasPaid', '=', 'true');
        $app = $appointments->select([
            'users.name',
            'users.userID',
        ])->get();
        return view('doctors.doctorAppointments')->with('appointments', $app);
    }
    public function doctorAppointmentsSubmit(Request $request)
    {
        $validate = $request->validate([
            'patientID' => 'required',
            'appointmentStatus' => 'required',
        ]);

        //insert appointment in appointment tables
        $appointments1 = DB::table('appointments')->where('appointments.doctorID', '=', Session::get('ID'))->where('appointments.userID', '=', $request->patientID);
        $app1 = $appointments1->update([
            'appointmentStatus' => $request->appointmentStatus,
        ]);
        return redirect()->route('doctorAppointments');
    }
    /*public function profileDoctorSubmit(Request $request){
        $user = Users::where('name', $request->name)->where('role', 'doctor')->first();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phoneNumber = $request->phone;
        $user->password = md5($request->password);
        $user->dob = $request->dob;
        $user->role = 'doctor';
        $user->save();
        return redirect()->route('homeDoctor');
    }*/
    public function logout(){
        session()->forget('user');
        return view('pages.login');
    }
}
