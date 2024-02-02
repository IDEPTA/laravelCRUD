@extends('layout')
@section('title')
    <h1>Form</h1>
@endsection
@section('content')
<form
    method="POST"
    @if (isset($user))
        action="{{ route("users.update", $user) }}"
    @else
        action="{{ route("users.store") }}"
    @endif
>
    @csrf
    @if (isset($user))
        @method('PUT')
    @endif

    <div class="row m-3">
        <div class="col">
            <input
                value="{{ isset($user) ? $user->name : null }}"
                name="name" type="text" class="form-control" placeholder="Name" aria-label="Name">
        </div>
        @error('name')
            <div class="m-3 row alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="row m-3">
        <div class="col">
            <input
                value="{{ isset($user) ? $user->email : null }}"
                name="email" type="text" class="form-control" placeholder="Email" aria-label="Email">
        </div>
        @error('email') {{-- Fix the error field name --}}
            <div class="m-3 row alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="row m-3">
        <button type="submit" class="btn btn-success">Добавить</button>
    </div>
</form>

@endsection
