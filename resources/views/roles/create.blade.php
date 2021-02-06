@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Role</h1> 

    <form action="{{ route('roles.store') }}" method="POST">

        @include('roles.partials.form')

    </form>
</div>
@endsection
