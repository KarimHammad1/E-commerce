@extends('Layout.admin')

@section('content')

<form method="POST" action="/addBanner" enctype="multipart/form-data">
        @csrf
        <div class="row"  >
        <div class="col-sm-2">
        <label for="" class="form-label">ProductName</label>
        <input class="form-control" list="datalistOptions" name="name" id="name" placeholder="ProductName">
        </div>
        <div class="col-sm-2">
        <label for=" " class="form-label">UserPhone</label>
        <input class="form-control" list="datalistOptions" name="userPhone" id="email" placeholder="UserPhone">
        </div>
        <div class="col-sm-2">
            <label for=" " class="form-label">LastPrice</label>
            <input class="form-control" list="datalistOptions" name ="LastPrice" id="address" placeholder="Lprice">
            </div>
        <div class="col-sm-3">
        <label for=" " class="form-label">Image</label>
        <input type="file" class="form-control" name="Image">
        </div>
      </div>
      <div class="row"  >
        <div class="col-sm-2">
        <label for="" class="form-label">Description</label>
        <input type="text" class="form-control" list="datalistOptions" name="description" id="password" placeholder="Description">
        </div>
      </div>
     <div class="row">
     <div class="col-sm-3">&nbsp</div>
     <div class="col-sm-2"></div>
     <div class="col-sm-3">
     <input type="submit" value="Add Banner" class="btn btn-primary">
     </div>
     </div>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<table class="table">

    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">userPhone</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($banner as $ban)
      <tr id="{{$ban->id}}">
        <th scope="row">{{$ban->id}}</th>
        <td>{{$ban->ProductName}}</td>
        <td>{{$ban->userPhone}}</td>
        <td>
            <form method="POST" action="/bannerDelete/{{$ban->id}}">
                @csrf
                <button class="btn btn-primary">Delete</button>
              </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
