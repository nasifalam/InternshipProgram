@extends('layouts.app')

@section('content')

<div class="admin-content">
    <div class="page-title">
        <div class="row">
            <div class="col-md-10">
                <h2>Manage Users</h2>
            </div>
            <form class="col-md-2" method="get" action="/create/user">
                <button class="btn btn-primary" type="submit">New User</button>
            </form>
        </div>
    </div>

    <table>
        <thead>
            <th>Name</th>
            <th>Email Address</th>
            <th>Password</th>
            <th>User Role</th>
            <th colspan="2">Actions</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user-> name }}</td>
                    <td>{{ $user-> email }}</td>
                    <td>{{ $user-> password }}</td>
                    <td>{{ $user-> role }}</td>
                    
                      <td><a href="/edit-user/{{$user['id']}}/edit" ><button type="button" class="btn btn-primary">Edit</button></td>


                    <td><a href="/delete-user/{{$user['id']}}/delete" > <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
