@extends('layouts.layout')
<!DOCTYPE html>
<html>

    @php
    @endphp

<h1>Program Management Poral</h1>
<button onclick="window.location.href='create_program'" type="button" class="btn btn-primary">Create a Program</button>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Program Name</th>
      <th scope="col">Program Area</th>
      <th scope="col">BuildingU Program Type</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>

<?php $index = 0; ?>
    @foreach($programs as $program)

    <tr>
    <td scope="row"> {{$index=$index+1}} </td>
    <td ><a href="/Programs/{{$program['id']}}" >{{$program['program_Title']}} </td>
    <td>{{$program['buildingU_Program_Type']}} </td>
    <td>{{$program['program_Area']}} </td>
    <td><a href="/edit-program/{{$program['id']}}/edit" ><button type="button" class="btn btn-primary">Edit</button></td>
    <td><a href="/delete-program/{{$program['id']}}/delete" > <button type="button" class="btn btn-danger">Delete</button>
</td>

  </tr>
    @endforeach
    </tbody>
</table>



@section('content')


<br>

@endsection

</html>
