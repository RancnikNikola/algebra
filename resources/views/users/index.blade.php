@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users</h1>

    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Create New User</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Role</th>
                <th>Last Login</th>
                <th>Actions</th>
            </tr>
        </thead>

        @foreach ($users as $user)
            <tr>
                <td></td>
                <td>{{ $user->name }}</td>
                <td></td>
                <td>{{ $user->email }}</td>
                <td>
                    {{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}
                </td>
                <td></td>
                <td>
                    <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('users.destroy', ['user' => $user->id]) }}" 
                        class="btn btn-danger delete-link"
                        data-message="Are you sure you want to delete this user?"
                        data-form="delete-form">Delete
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

    <form id="delete-form" action="" method="POST">
        @method('DELETE')

        @csrf
    </form>
</div>
@endsection
