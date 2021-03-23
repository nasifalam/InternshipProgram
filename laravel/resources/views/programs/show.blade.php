@extends('layouts.layout')
    <head>
        <!-- Styles -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
@section('content')

<div class="flex-center position-ref full-height">
    <div>
        <div class="main">
            <div class="show_title">{{$program['program_Title']}}</div>

            <div class="show_topInfo">
                <div>{{$program['buildingU_Program_Type']}}
                    ⧫  
                    {{$program['program_Start_Date']}} to 
                    {{$program['program_Start_Date']}}
                </div> 
            </div>

            <div class="show_des">
                {{$program['program_des']}}
            </div>

        </div>
    </div>
</div>
@endsection
