@extends('layouts.layout')

@section('content')


<h1>Edit Program</h1>


<form action="/programeditted" method="POST">
@csrf
<input type="hidden"  id="id" name="id" value="{{$program['id']}}">
<div class="form-group">
  <label for="BuildingU Program Type">BuildingU Program Type</label>
  <input type="text" class="form-control" id="BuildingU Program Type" name="BuildingU Program Type" value="{{$program['buildingU_Program_Type']}}">
</div>
  <div class="form-group">
    <label for="Program Title">Program Title</label>
    <input type="text" class="form-control" id="Program Title" name="Program Title" value="{{$program['program_Title']}}">
  </div>
  <div class="form-group">
    <label for="Program Area">Program Area</label>
    <input type="text" class="form-control" id="Program Area" name="Program Area" value="{{$program['program_Area']}}">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>




@endsection
