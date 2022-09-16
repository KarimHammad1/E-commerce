@extends('Layout.admin')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Email</th>
      <th scope="col">Phone number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr id="{{$user->id}}">
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->user_role}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td><button type="button" class="btn btn-warning"><a href="/updateForm/{{ $user->id }}">Update</a></button>
        <form method="POST" action="/userDelete/{{$user->id}}">
            @csrf
            <button class="btn btn-primary">Delete</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
