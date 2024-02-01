@extends('layout')
@section('title')
    <h1>Usersg</h1>
@endsection
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Emal</th>
        <th scope="col">created</th>
        <th scope="col">updated</th>
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
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
