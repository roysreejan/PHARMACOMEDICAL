@extends('layouts.appDoctors')
@section('contentDoctors')
<div class="container" style="width:500px;">  
    <br>
    <h1>Prescription</h1>
    <form action="{{route('prescription')}}" method="POST">
    {{csrf_field()}}
    @foreach($prescription as $pre)
               <p>{{$pre->pharmaceuticalItemsName}}</p>
            @endforeach
        <div class="form-group">
        <label for="pharmaceuticalItemsName">Pharmaceutical Item Name</label>
        <select name="pharmaceuticalItemsName" id="pharmaceuticalItemsName">
            <option value="" selected>Select Item</option>
            @foreach($pharmaceuticalItems as $pharmaceuticalItem)
                <option value="{{$pharmaceuticalItem->itemName}}">{{$pharmaceuticalItem->itemName}}({{$pharmaceuticalItem->pharmaceuticalItemID}})</option>
            @endforeach
            </select>
            @error('pharmaceuticalItemsName')
                <span class="text-danger">{{$message}}</span>
            @enderror
            @if(Session::has('error'))
                <p class="text-danger">{{ Session::get('error') }}</p>
            @endif
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
        <div class="form-group p-1">
            <span>
                <a href="{{route('downloadPrescription')}}" class="btn btn-info">Download</a>
            </span>
        </div>
        </form>
</div>
@endsection