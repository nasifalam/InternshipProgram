@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$program['program_Title']}} </h1> <br>

            <p>BuildingU Program Type: {{$program['buildingU_Program_Type']}} </p> <br>
            <p>Project Starts On: {{$program['program_Start_Date']}} </p> <br>
            <p>BuildingU Program End On: {{$program['program_End_Date']}} </p> <br>

        </div>
    </div>
</div>
@endsection
