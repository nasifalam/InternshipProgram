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
        <form action="/update_profile" class="mx-5" method="POST">
            @csrf
            <input type="hidden"  id="id" name="id" value="{{$user['id']}}">

            <label for="age">Age</label>
            <div class="form-group">
                <input class="form-control col-3" name="age" id="age" placeholder="Age" required value="{{ $user['age'] }}">
            </div>

            <label for="interests">Interests</label>
            <div class="form-group">
                <input class="form-control col-3" name="interests" id="interests" placeholder="Interests" value="{{ $interests }}">
                <p style="font-size: small; color: grey">You can enter multiple interests, if you separate them with commas.</p>
            </div>

            <label for="ethnicity">Ethnicity</label>
            <div class="form-group">
                <select class="form-control col-3" name="ethnicity" id="ethnicity" required>
                    <option value="" disabled selected>Ethnicity</option>
                    @if ($user->ethnicity === "asian")
                        <option value="asian" selected>Asian</option>
                    @else
                        <option value="asian">Asian</option>
                    @endif
                    
                    @if ($user->ethnicity === "white")
                        <option value="white" selected>White</option>
                    @else
                        <option value="white">White</option>
                    @endif

                    @if ($user->ethnicity === "black")
                        <option value="black" selected>Black</option>
                    @else
                        <option value="black">Black</option>
                    @endif
                    
                    @if ($user->ethnicity === "hispanic")
                        <option value="hispanic" selected>Hispanic</option>
                    @else
                        <option value="hispanic">Hispanic</option>
                    @endif
                </select>
            </div>

            <label for="language">Language</label>
            <div class="form-group">
                <select class="form-control col-3" name="language" id="language" required>
                    <option value="" disabled selected>Language</option>
                    @if ($user->language === "en")
                        <option value="en" selected>English</option>
                    @else
                        <option value="en">English</option>
                    @endif

                    @if ($user->language === "fr")
                        <option value="fr" selected>Français</option>
                    @else
                        <option value="fr">Français</option>
                    @endif

                    @if ($user->language === "es")
                        <option value="es" selected>Español</option>
                    @else
                        <option value="es">Español</option>
                    @endif  
                </select>
            </div>

            <!-- <div class="form-group">
                <input class="form-control col-3" name="grade" id="grade" placeholder="Grade">
            </div> -->
            
            <button class="btn col-3" name="submit" id="submit" type="submit">Submit</button>
        </form>

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
        @foreach($recommended as $recommend)
        <div class="container">
            <div class="row program_homepage_item">
                <div class="col">
                    <div class="program_homepage_title">
                        <a href="/Programs/{{$recommend->id}} ">{{$recommend-> program_Title}}</a>
                    </div>
                    <div class="program_homepage_where">
                        {{$recommend-> program_City}}, {{$recommend-> program_Address}}
                    </div>
                    <div class="program_homepage_date">
                        From {{$recommend-> program_Start_Date}} to {{$recommend-> program_End_Date}}
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
                    <form action="/Programs/{{$recommend->id}}" method="GET">
                        <button type="submit" class="m-5 px-4 btn btn-primary">Apply</button>
                    </form>
                    <form action="/save_program" method="POST">
                        @csrf
                        <input type="hidden" name="program_id" value="{{$recommend -> id}}">
                        <button type="submit" class="m-5 px-4 btn btn-secondary">Save</button>
                    </form>
                </div>
                {{--             <div class="col program_homepage_item">
                                {{$recommend-> buildingU_Program_Type}}
                            </div> --}}
            </div>
        </div>
        @endforeach

    </div>
</html>

@endsection
