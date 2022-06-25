@extends('layouts.appDoctors')
@section('contentDoctors')
<div class = "container">
    <br><br>
    <h1>Pharmaceutical Items</h1>
    <form action="{{route('pharmaceuticalItems')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="itemName">Item Name</label>
            <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Enter Item Name">
            @error('itemName')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
            @error('price')
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