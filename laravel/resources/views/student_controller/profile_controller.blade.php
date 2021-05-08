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
    </div>


</html>

@endsection
