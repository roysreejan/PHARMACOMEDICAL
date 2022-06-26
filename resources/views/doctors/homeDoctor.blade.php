@extends('layouts.appDoctors')
@section('contentDoctors')
    @if(Session::get('user')) {{Session::get('ID')}}
    <center>
        <h1>Welcome Doctor {{Session::get('user')}}</h1>
    </center>
 @endif
@endsection