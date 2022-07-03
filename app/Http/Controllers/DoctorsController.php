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
        $doctor_reviews1 = DB::table('doctor_reviews')->select('point', DB::raw('COUNT(point) as counter'))->where('doctorID' ,'=', Session::get('ID'))->where('point' ,'=', '1')->groupBy('point')->get();
        $doctor_reviews2 = DB::table('doctor_reviews')->select('point', DB::raw('COUNT(point) as counter'))->where('doctorID' ,'=', Session::get('ID'))->where('point' ,'=', '2')->groupBy('point')->get();
        $doctor_reviews3 = DB::table('doctor_reviews')->select('point', DB::raw('COUNT(point) as counter'))->where('doctorID' ,'=', Session::get('ID'))->where('point' ,'=', '3')->groupBy('point')->get();
        $doctor_reviews4 = DB::table('doctor_reviews')->select('point', DB::raw('COUNT(point) as counter'))->where('doctorID' ,'=', Session::get('ID'))->where('point' ,'=', '4')->groupBy('point')->get();
        $doctor_reviews5 = DB::table('doctor_reviews')->select('point', DB::raw('COUNT(point) as counter'))->where('doctorID' ,'=', Session::get('ID'))->where('point' ,'=', '5')->groupBy('point')->get();

        return view('doctors.homeDoctor')->with('doctorreviews1', $doctor_reviews1)->with('doctorreviews2', $doctor_reviews2)
        ->with('doctorreviews3', $doctor_reviews3)->with('doctorreviews4', $doctor_reviews4)->with('doctorreviews5', $doctor_reviews5);
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
    public function profileDoctor(Request $request){
        $doctor = Users::where('userID', '=', Session::get('ID'))->first();
        return view('doctors.doctorProfile')->with('doctor', $doctor);
    }
    public function profileDoctorSubmit(Request $request){
        $user = Users::where('userID', '=', Session::get('ID'))->first();

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
