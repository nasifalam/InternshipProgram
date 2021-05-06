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
        <h1 class="program_homepage_h1">Profile Page</h1>
        <input name="age" id="age" placeholder="Age">
        <input name="interests" id="interests" placeholder="Interests">

        <select name="ethnicity" id="ethnicity">
            <option value="asian">Asian</option>
            <option value="white">White</option>
            <option value="black">Black</option>
            <option value="hispanic">Hispanic</option>
        </select>

        <select name="language" id="language">
            <option value="en">English</option>
            <option value="fr">Français</option>
            <option value="es">Español</option>
        </select>

        <input name="grade" id="grade" placeholder="Grade">
        <!-- Button Variants -->
        <input name="submit" id="submit" value="Submit" type="button">
        <button name="submit" id="submit">Submit</button>
    </div>


</html>

@endsection
