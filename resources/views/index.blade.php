@extends('layout')
@section('title')
    <h1>Users</h1>
@endsection
@section('content')
<a class="btn btn-success" href={{route("users.create")}}>Добавить запись</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Emal</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Просмотр</th>
        <th scope="col">Обновить</th>
        <th scope="col">Удалить</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <form action={{route("users.destroy",$item->id)}} method="POST">
                    <td><a class="btn btn-info" href={{route("users.show",$item->id)}}>Просмотр</a></td>
                    <td><a class="btn btn-warning" href={{route("users.edit",$item->id)}}>Обновить</a></td>
                    @csrf
                    @method("DELETE")
                    <td><button class="btn btn-danger" type="submit">Удалить</button></td>
                </form>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
