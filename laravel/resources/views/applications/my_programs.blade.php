@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <!-- Styles -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    @php
    @endphp
<div class="container ml-4 mt-2">
   <h1>{{$user-> name}}'s Programs</h1>
</div>
<div class="mt-4">
@foreach($myapplications as $application)

    <div class="container">
        <div class="row program_homepage_item">
            <div class="col">
                <div class="program_homepage_title">
                    <a href="/Programs/{{$application->program_id}} ">{{$application-> program_Title}}</a>
                </div>
                <div class="program_homepage_where">
                    {{$application-> program_City}}, {{$application-> program_Address}}
                </div>
                <div class="program_homepage_date">
                    From {{$application-> program_Start_Date}} to {{$application-> program_End_Date}}
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
                <div class="form-inline">
                    <form action="/Programs/{{$application->id}}" method="GET">
                        <button type="submit" class="m-5 px-4 btn btn-primary">Apply</button>
                    </form>

                </div>
            </div>
            {{--             <div class="col program_homepage_item">
                            {{$program-> buildingU_Program_Type}}
                        </div> --}}
        </div>
    </div>

@endforeach
</div>



<br>




</html>

@endsection
