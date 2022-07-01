@extends('layouts.appDoctors')
@section('contentDoctors')
<form action="{{route('prescriptionsList')}}" method="POST">   
    {{csrf_field()}}
    <div class="form-group" style="width:250px">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search..." ">
            <div class="input-group-prepend">
            <button type="submit" value="Submit" style="border-style:none"><span class="input-group-text" id="basic-addon1"><i class="fas fa-search" style="height:23px"></i></span></button>
            </div>
        </div>
    </div>        
    {{Session::get('search')}}
    <table class = "table table-border">
        <tr>
            <th>Prescription ID</th>
            <th>Patient ID</th>
            <th>Appointment ID</th>
            <th>Pharmaceutical Item Name</th>
            <th>Advice</th>
        </tr>
        @foreach($prescriptions as $prescription)
            <tr>
                <td>{{$prescription->prescriptionID}}</td>
                <td>{{$prescription->userID}}</td>
                <td>{{$prescription->appID}}</td>
                <td>{{$prescription->pharmaceuticalItemsName}}</td>
                <td>{{$prescription->advice}}</td>
                <!-- <td><a href="/details/{{$prescription->userID}}">Details</a></td> -->
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {!! $prescriptions->links() !!}
    </div>
</form>
@endsection