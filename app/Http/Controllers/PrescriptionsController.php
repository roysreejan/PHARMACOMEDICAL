<?php

namespace App\Http\Controllers;

use App\Models\Prescriptions;
use App\Models\PharmaceuticalItems;
use App\Models\Users;
use App\Http\Requests\StorePrescriptionsRequest;
use App\Http\Requests\UpdatePrescriptionsRequest;
use Illuminate\Http\Request;
use Session;
use DB;
use PDF;


class PrescriptionsController extends Controller
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
     * @param  \App\Http\Requests\StorePrescriptionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrescriptionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function show(Prescriptions $prescriptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescriptions $prescriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrescriptionsRequest  $request
     * @param  \App\Models\Prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrescriptionsRequest $request, Prescriptions $prescriptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescriptions $prescriptions)
    {
        //
    }
    public function prescriptions()
    {
        $pharmaceuticalItems = DB::table('pharmaceutical_items')->get();
        $appointments = DB::table('appointments')->leftJoin('users', 'appointments.userID', '=', 'users.userID')->where('appointments.doctorID', '=', Session::get('ID'))->where('hasPaid', '=', 'true');
        $app = $appointments->select([
            'users.name',
            'users.userID',
        ])->get();
        return view('doctors.prescriptions')->with('pharmaceuticalItems', $pharmaceuticalItems)->with('appointments', $app);
    }
    public function prescriptionsSubmit(Request $request)
    {
        $validate = $request->validate([
            'patientID' => 'required',
            'pharmaceuticalItemID' => 'required',
            'advice' => 'required',
        ],
        [
            'patientID.required' => 'Please select a patient',
            'pharmaceuticalItemID.required' => 'Please select a pharmaceutical item',
            'advice.required' => 'Please enter advice',
        ]);

        $prescriptions = new Prescriptions();
        $prescriptions->userID = Session::get('ID');
        $prescriptions->doctorID = Session::get('ID');
        $prescriptions->pharmaceuticalItemID = Session::get('ID');
        $prescriptions->advice = $request->advice;
        $prescriptions->save();
        return redirect()->route('homeDoctor');
    }

    //prescritions list
    public function prescriptionsList()
    {
        $prescriptions = Prescriptions::where('doctorID', Session::get('ID'))->get();
        return view('doctors.prescriptionsList')->with('prescriptions', $prescriptions);
    }
}
