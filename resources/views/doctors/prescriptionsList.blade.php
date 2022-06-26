@extends('layouts.appDoctors')
@section('contentDoctors')
    <table class = "table table-border">
        <tr>
            <th>Patient ID</th>
            <th>Pharmaceutical Item ID</th>
            <th>Advice</th>
        </tr>
        @foreach($prescriptions as $prescription)
            <tr>
                <td>{{$prescription->userID}}</td>
                <td>{{$prescription->pharmaceuticalItemID}}</td>
                <td>{{$prescription->advice}}</td>
                <!-- <td><a href="/details/{{$prescription->userID}}">Details</a></td> -->
            </tr>
        @endforeach
    </table>                                                            
@endsection