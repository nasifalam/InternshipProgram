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

<div>
    <a href="/search_programs_v2"><h1 class="program_homepage_h1">Programs Available</h1></a>
    <div class="container">
        <div class="row col-2 p-3">
            <form action="/search_programs_v2" method="get" id="filter-form">
                <div class="program_input-group">
                    <select name="searchType" id="searchType">
                        <option value="program_Title">Name</option>
                        <option value="program_City">City</option>
                    </select>
                    <input type="search" placeholder="Search " name = "search" class="form-control" id="program_serach_bar">
                    <span class="input-group-prepend">
                    <button type="submit" form="filter-form" class="btn btn-primary">Search</button>
                </span>
                </div>
                <!-- drop down filters -->
                <div class="row">
                    <select name="program_Type" class="col form-control">
                        <option value="" disabled selected>Program Type</option>
                        @foreach($types as $type)
                            <option value="{{$type-> buildingU_Program_Type}}">{{$type-> buildingU_Program_Type}}</option>
                        @endforeach
                    </select>

                    <select name="program_Area" class="col form-control">
                        <option value="" disabled selected>Program Area</option>
                        @foreach($areas as $area)
                            <option value="{{$area-> program_Area}}">{{$area-> program_Area}}</option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </div>


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
                <div class="form-inline">
                    <form action="/apply" method="POST" id="apply">
                        <input type="hidden"  id="id" name="id" value="{{$program -> id}}">
                        <button type="submit" class="m-5 px-4 btn btn-primary">Apply</button>
                    </form>
                    <form action="/save" method="POST">
                        <input type="hidden"  id="id" name="id" value="{{$program -> id}}">
                        <button type="submit" class="m-5 px-4 btn btn-secondary">Save</button>
                    </form>
                </div>
            </div>
{{--             <div class="col program_homepage_item">
                {{$program-> buildingU_Program_Type}}
            </div> --}}
        </div>
    </div>
@endforeach

<div class="program_pagination_links">{{ $programs->links('pagination::bootstrap-4') }}</div>


<br>

</div>


</html>

@endsection
