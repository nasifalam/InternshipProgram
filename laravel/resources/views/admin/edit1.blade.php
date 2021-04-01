@extends('layouts.app')

@section('content')

<div class="admin-content info">
    <div class="page-title">
        <div class="col-md-10">
            <h2>Edit User Info</h2>
        </div>
    </div>
<form method="POST" action="/edit">
      @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user['name']}}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user['email']}}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('User Role') }}</label>

        <div class="col-md-6">
            <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{$user['role']}}" required autocomplete="role" autofocus>

            <select class="form-control" id="role" name="role" value="{{$user['role']}}">
              <option value="admin">admin</option>
              <option value="student">student</option>
              <option value-"teacher">teacher</option>
              <option value="school">school</option>
            </select>
            <!-- @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror -->
        </div>
    </div>



        <button class="update btn" type="submit">Update</button>
    </form>
</div>

@endsection
