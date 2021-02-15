@extends('layouts.layout')

@section('content')


<h1>Edit Program</h1>


<form action="/edit" method="POST">
@csrf
<input type="hidden"  id="Program ID" name="Program ID" value="{{$program['Program ID']}}">
<div class="form-group">
  <label for="BuildingU Program Type">BuildingU Program Type</label>
  <input type="text" class="form-control" id="BuildingU Program Type" name="BuildingU Program Type" value="{{$program['BuildingU Program Type']}}">
</div>
  <div class="form-group">
    <label for="Program Title">Program Title</label>
    <input type="text" class="form-control" id="Program Title" name="Program Title" value="{{$program['Program Title']}}">
  </div>
  <div class="form-group">
    <label for="Program Area">Program Area</label>
    <input type="text" class="form-control" id="Program Area" name="Program Area" value="{{$program['Program Area']}}">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>




@endsection
