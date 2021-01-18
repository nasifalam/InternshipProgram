@extends('layouts.app')

@section('content')

@foreach ($admins as $admin)
    <p>{{ $admin->name }} - {{ $admin->email }}</p>
@endforeach

@endsection