@extends('layouts.layout')
<!DOCTYPE html>
<html>
    <h1> Hello World </h1>


    @php

  


    @endphp

@section('content')
<br>
    @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }} </br>
@endfor
@endsection

</html>
