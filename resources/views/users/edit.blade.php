@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit {{ $model->name }}</h1> 

    <form action="{{ route('users.update', ['user' => $model->id]) }}" method="POST">

        @method('PATCH')

        @include('users.partials.form')
</div>
@endsection
