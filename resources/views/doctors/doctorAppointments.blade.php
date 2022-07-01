@extends('layouts.appDoctors')
@section('contentDoctors')
<div class="container" style="width:500px;">  
    <br>
    <div class="container" style="width:500px;">  
    <br>
    <h1>Appointments</h1>
    <form action="{{route('doctorAppointments')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
        <label for="patientID">Patient ID</label>
        <select name="patientID" id="patientID">
            <option value="" selected>Select Patient</option>
            @foreach($appointments as $appointment)
                <option value="{{$appointment->userID}}">{{$appointment->name}}({{$appointment->userID}})</option>
            @endforeach
            </select>
            @error('patientID')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="appointmentStatus">Appointment Status</label>
            <select name="appointmentStatus" id="appointmentStatus">
                <option value="" selected>Select Patient</option>
                <option value="accepted">Accepted</option>
                <option value="rejected">Rejected</option>
            </select>
            @error('appointmentStatus')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group p-1">
            <span>
                <input type="submit" name="submit" value="Submit" class="btn btn-info">
            </span>
        </div> 
    </form>
</div>
</div>
@endsection