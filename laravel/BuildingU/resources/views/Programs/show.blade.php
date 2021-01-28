@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$program['Program Title']}} </h1> <br>

            <p>BuildingU Program Type: {{$program['BuildingU Program Type']}} </p> <br>
            <p>Project Starts On: {{$program['Program Start Date']}} </p> <br>
            <p>BuildingU Program End On: {{$program['Program End Date']}} </p> <br>

        </div>
    </div>
</div>
@endsection
