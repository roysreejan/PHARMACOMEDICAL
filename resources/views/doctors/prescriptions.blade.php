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
                <option value="{{$appointment->userID}}">{{$appointment->name}}({{$appointment->userID}})</option>
            @endforeach
            </select>
            @error('patientID')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
        <label for="pharmaceuticalItemID">Pharmaceutical Item ID</label>
        <select name="pharmaceuticalItemID" id="pharmaceuticalItemID">
            <option value="" selected>Select Item</option>
            @foreach($pharmaceuticalItems as $pharmaceuticalItem)
                <option value="{{$pharmaceuticalItem->pharmaceuticalItemID}}">{{$pharmaceuticalItem->itemName}}({{$pharmaceuticalItem->pharmaceuticalItemID}})</option>
            @endforeach
            </select>
                <button type="submit" class="btn btn-primary">Add</button>
                <input type="text" name="addeditem" id="addeditem" placeholder="Added Item"></input>
            @error('pharmaceuticalItemID')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="advice">Advice</label>
            <input type="text" class="form-control" id="advice" name="advice" placeholder="Enter Advice">
            @error('advice')
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
@endsection