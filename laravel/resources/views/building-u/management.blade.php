@extends('layouts.app')

@section('content')

<div class="admin-content">
    <div class="page-title">
        <h2>Manage Accounts</h2>
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
                    <td><button class="btn edit">Edit</button></td>
                    <td><button class="btn delete">Delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection