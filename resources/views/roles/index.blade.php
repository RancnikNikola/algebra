@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Roles</h1>

    <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Create New Role</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>

        @foreach ($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td></td>
                <td>
                    <a href="{{ route('roles.edit', ['role' => $role->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('roles.destroy', ['role' => $role->id]) }}" 
                        class="btn btn-danger delete-link"
                        data-message="Are you sure you want to delete this role?"
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
