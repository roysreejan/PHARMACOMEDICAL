@extends('layouts.appDoctors')
@section('contentDoctors')
<div class = "container">
    <br><br>
    <h1>Prescriptions</h1>
    <form action="{{route('prescriptions')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
        <label for="pharmaceuticalItemID">Patient ID</label>
        <select name="pharmaceuticalItemID" id="pharmaceuticalItemID">
            <option value="" selected>Select Item</option>
            @foreach($appointments as $appointment)
                <option value="{{$appointment->doctorID}}">{{$appointment->doctorID}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
        <label for="pharmaceuticalItemID">Pharmaceutical Item ID</label>
        <select name="pharmaceuticalItemID" id="pharmaceuticalItemID">
            <option value="" selected>Select Item</option>
            @foreach($pharmaceuticalItems as $pharmaceuticalItem)
                <option value="{{$pharmaceuticalItem->pharmaceuticalItemID}}">{{$pharmaceuticalItem->itemName}}({{$pharmaceuticalItem->pharmaceuticalItemID}})</option>
            @endforeach
            </select>
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