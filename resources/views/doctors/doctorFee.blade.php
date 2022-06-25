@extends('layouts.appDoctors')
@section('contentDoctors')
<div class = "container">
    <br><br>
    <h1>Add your Fee</h1>
    <form action="{{route('doctorFee')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="doctor_fee">Doctor Fee</label>
            <input type="text" class="form-control" id="doctor_fee" name="doctor_fee" placeholder="Enter Doctor Fee">
            @error('doctor_fee')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group p-1">
            <span>
                <input type="submit" name="submit" value="Submit" class="btn btn-info">
            </span>
        </div> 
    </form>
@endsection