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


    <div class="profile_controller_div">
        <!-- profile info -->
        <h1 class="program_homepage_h1">Profile Page</h1>
        <input class="form-control" name="age" id="age" placeholder="Age">
        <input class="form-control" name="interests" id="interests" placeholder="Interests">

        <select class="form-control" name="ethnicity" id="ethnicity">
            <option value="asian">Asian</option>
            <option value="white">White</option>
            <option value="black">Black</option>
            <option value="hispanic">Hispanic</option>
        </select>

        <select class="form-control" name="language" id="language">
            <option value="en">English</option>
            <option value="fr">Français</option>
            <option value="es">Español</option>
        </select>

        <input class="form-control" name="grade" id="grade" placeholder="Grade">
        <button class="btn" name="submit" id="submit">Submit</button>

        <br>
        <!-- Saved Programs -->
        <h1 class="program_homepage_h1">Saved Programs</h1>

        <table style="width:95%; margin-left:auto; margin-right:auto; table-layout:fixed;">
            <thead>
                <th>Program</th>
                <th style="width: 50%;">Description</th>
                <th>Location</th>
                <th>Start Date</th>
                <th>End Date</th>
            </thead>
            <tbody>
            @foreach($myapplications as $application)
                <tr>
                    <td><a href="/Programs/{{$application->program_id}} ">{{$application-> program_Title}}</a></td>
                    <td>Lorem Ipsum is sim
                            ply dummy text of the print
                            ing and typesetting industry. Lorem Ips
                            um has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a ga
                            lley of type and scrambled it to make a type specimen book. ... It has roo
                            ts in a piece of classical Latin literature
                            from 45 BC, making it over 2000 years ol</td>
                    <td>{{$application-> program_City}}, {{$application-> program_Address}}</td>
                    <td>{{$application-> program_Start_Date}}</td> 
                    <td>{{$application-> program_End_Date}}</td> 
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>

        <!-- Recommended Programs -->
        <h1 class="program_homepage_h1">Recommended</h1>

    </div>


</html>

@endsection
