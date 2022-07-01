@extends('layouts.appDoctors')
@section('contentDoctors')
<div class="container" style="width:500px;">  
    <br>
    <h1>Prescriptions</h1>
    <form action="{{route('prescriptions')}}" method="POST">
    {{csrf_field()}}
        <div class="form-group">
        <label for="patientID">Patient ID</label>
        <select name="patientID" id="patientID">
            <option value="" selected>Select Patient</option>
            @foreach($appointments as $appointment)
                <option value="{{$appointment->appID}}/{{$appointment->userID}}">{{$appointment->appID}} - {{$appointment->name}}({{$appointment->userID}})</option>
            @endforeach
            </select>
            @error('patientID')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group p-1">
            <span>
                <input type="submit" name="submit" value="Next" class="btn btn-info">
            </span>
        </div> 
    </form>
</div>
@endsection