@extends('layouts.layout')
<!DOCTYPE html>
<html>
    <head>
        <!-- Styles -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    @php
    @endphp

<h1>Program Management Poral</h1>
<button onclick="window.location.href='create_program'" type="button" class="btn btn-primary">Create a Program</button>

<div class="col-2 p-3">
  <form action="/search_programs" method="get">
      <div class="input-group">
          <input type="search" placeholder="Search Name" name = "search" class="form-control">
          <span class="input-group-prepend">
              <button type="submit" class="btn btn-primary">Search</button>
          </span>
      </div>
  </form>
</div>

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
    <td ><a href="/Programs/{{$program->id}}" >{{$program-> buildingU_Program_Type}} </td>
    <td>{{$program-> buildingU_Program_Type}} </td>
    <td>{{ $program-> program_Area }}</td>
    <td><a href="/edit-program/{{$program->id}}/edit" ><button type="button" class="btn btn-primary">Edit</button></td>
    <td><a href="/delete-program/{{$program->id}}/delete" > <button type="button" class="btn btn-danger">Delete</button>
</td>

</tr>
@endforeach
</tbody>
</table>

@foreach($programs as $program)
    <div class="container">
        <div class="row program_homepage_item">
            <div class="col">
                <div class="program_homepage_title">
                    {{$program-> program_Title}}
                </div>
                <div class="program_homepage_where">
                    {{$program-> program_City}}, {{$program-> program_Address}}
                </div>
                <div class="program_homepage_date">
                    From {{$program-> program_Start_Date}} to {{$program-> program_End_Date}}
                </div>
                <div class="program_homepage_desc">
                    Lorem Ipsum is sim
                    ply dummy text of the print
                    ing and typesetting industry. Lorem Ips
                    um has been the industry's standard dummy text 
                    ever since the 1500s, when an unknown printer took a ga
                    lley of type and scrambled it to make a type specimen book. ... It has roo
                    ts in a piece of classical Latin literature 
                    from 45 BC, making it over 2000 years ol
                </div>
            </div>
{{--             <div class="col program_homepage_item">
                {{$program-> buildingU_Program_Type}}
            </div> --}}
        </div>
    </div>
@endforeach

@section('content')


<br>

@endsection

</html>
