@extends('layouts.appDoctors')
@section('contentDoctors')
    @if(Session::get('user')) {{Session::get('ID')}}
    <h1>Welcome {{Session::get('user')}}  Doctor</h1>
 @endif
@endsection