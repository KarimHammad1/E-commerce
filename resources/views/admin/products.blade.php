@extends('Layout.admin')

@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">User_id</th>
      <th scope="col">Category_id</th>
      <th scope="col">Price</th>
      <th scope="col" style="width:300px;">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $prod)
    <tr id="{{$prod->id}}">
      <th scope="row">{{$prod->id}}</th>
      <td>{{$prod->name}}</td>
      <td>{{$prod->user_id}}</td>
      <td>{{$prod->catg_id}}</td>
      <td>{{$prod->price}}</td>
      <td>{{$prod->description}}</td>
      <td>{{$prod->image_path}}</td>
      <td>
        <a href="/update_product/{{ $prod->id }}"><button type="button" class="btn btn-warning">Update</button></a>
        <a href="/delete_prod/{{ $prod->id }}"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection
