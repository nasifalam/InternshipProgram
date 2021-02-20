@extends('layouts.app')

@section('content')

<div class="admin-content info">
    <form action="/edit" method="POST">
        @csrf
        <input type="hidden"  id="id" name="id" value="{{$user['id']}}">
        <div class="page-title">
            <div class="col-md-10">
                <h2>Edit User</h2>
            </div> 
        </div>

        <!-- Edit user form, based off of register form-->
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user['name'] }}" required autocomplete="name" autofocus>

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
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user['email'] }}" required autocomplete="email">

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
            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
            <div class="col-md-2 mt-1">
                <select name="role" id="role">
                  @if ($user->role === "student")
                    <option value="student" selected="selected">Student</option>
                  @else
                    <option value="student">Student</option>
                  @endif

                  @if ($user->role === "teacher")
                    <option value="teacher" selected="selected">Teacher</option>
                  @else
                    <option value="teacher">Teacher</option>
                  @endif

                  @if ($user->role === "school")
                    <option value="school" selected="selected">School</option>
                  @else
                    <option value="school">School</option>
                  @endif

                  @if ($user->role === "admin")
                    <option value="admin" selected="selected">Admin</option>
                  @else
                    <option value="admin">Admin</option>
                  @endif
                  
                </select>
            </div>
        </div>

        <button class="btn-primary btn col-md-4" type="submit">Save</button>
    </form>
</div>

@endsection