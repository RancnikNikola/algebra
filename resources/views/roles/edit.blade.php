@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit {{ $model->name }}</h1> 

    <form action="{{ route('roles.update', ['role' => $model->id]) }}" method="POST">

        @method('PATCH')

        @include('roles.partials.form')

    </form>
</div>
@endsection
