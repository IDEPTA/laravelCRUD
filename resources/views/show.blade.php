@extends('layout')
@section('title')
    <h1>User {{$user->name}}</h1>
@endsection
@section('content')
<ol class="list-group list-group-numbered">
    <li class="list-group-item">ID: {{$user->id}}</li>
    <li class="list-group-item">Name: {{$user->name}}</li>
    <li class="list-group-item">Email: {{$user->email}}</li>
    <li class="list-group-item">Created: {{$user->created_at->format('d.m.Y h:m')}}</li>
    <li class="list-group-item">Updated: {{$user->updated_at->format('d.m.Y h:m')}}</li>
    <form action={{route("users.destroy",$user->id)}} method="POST">
        <td><a class="btn btn-warning" href={{route("users.edit",$user->id)}}>Обновить</a></td>
        @csrf
        @method("DELETE")
        <td><button class="btn btn-danger" type="submit">Удалить</button></td>
    </form>
  </ol>

@endsection
