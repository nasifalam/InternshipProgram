@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Admin Privileges:</h5>
                    <li><a href="/admin">Manage Users</a></li>
                    <li><a href="/manage_programs">Manage Programs</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
