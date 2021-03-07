@extends('layouts.layout')
<!DOCTYPE html>
<html>
    <head>
        <!-- Styles -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    @php
    @endphp

<div>
    <a href="/programs_homepage"><h1 class="program_homepage_h1">Programs Available</h1></a>
    <div class="col-2 p-3">
        <form action="/search_programs_v1" method="get">
            <div class="program_input-group">
                <select name="searchType" id="searchType">
                    <option value="program_Title">Name</option>
                    <option value="program_City">City</option>
                </select>
                <input type="search" placeholder="Search " name = "search" class="form-control" id="program_serach_bar">
                <span class="input-group-prepend">
                  <button type="submit" class="btn btn-primary">Search</button>
              </span>
            </div>

        </form>
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
