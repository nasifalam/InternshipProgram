@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are a teacher! <br>
                    List of students:
                    @foreach ($students as $student)
                        <p>{{ $student->name }} - {{ $student->email }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection