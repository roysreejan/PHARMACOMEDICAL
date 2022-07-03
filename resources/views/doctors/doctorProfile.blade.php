@extends('layouts.appDoctors')
@section('contentDoctors')
<html>
    <head>
    </head>
    <body>
    <div class="container"; style="width:500px">  
        <h2>Profile</h2> 
            <form action="{{route('profileDoctorSubmit')}}" method="POST">  
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$doctor->name}}">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$doctor->email}}">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone No.</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$doctor->phoneNumber}}">
                    @error('phone')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{$doctor->password}}">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{$doctor->password}}">
                    @error('password_confirmation')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="{{$doctor->dob}}">
                    @error('dob')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group p-1">
                    <label for="gender">Gender</label>
                    @if($doctor->gender=="male")
                        <input type="radio" name="gender" checked>Male
                    @else
                    <input type="radio" name="gender">Male
                    @endif
                    @if($doctor->gender=="female")
                        <input type="radio" name="gender" checked>Female
                    @else
                    <input type="radio" name="gender">Female
                    @endif
                    @if($doctor->gender=="other")
                        <input type="radio" name="gender" checked>Other
                    @else
                    <input type="radio" name="gender">Other
                    @endif
                    @error('gender')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group p-1">
                    <span>
                        <input type="submit" name="submit" value="Update" class="btn btn-info">
                    </span>
                </div>
            </form> 
        </div>
    </body>
</html>
@endsection    