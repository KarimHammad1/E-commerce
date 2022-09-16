@extends('Layout.admin')

@section('content')

<form method="POST" action="/addcategory" enctype="multipart/form-data">
        @csrf
        <div class="row"  >
        <div class="col-sm-2">
        <label for="" class="form-label">Name</label>
        <input class="form-control" list="datalistOptions" name="name" id="name" placeholder="Name">
        </div>
        <div class="col-sm-3">
        <label for=" " class="form-label">Image</label>
        <input type="file" class="form-control" name="Image">
        </div>
      </div>
      <div class="row"  >
      </div>
     <div class="row">
     <div class="col-sm-3">&nbsp</div>
     <div class="col-sm-2"></div>
     <div class="col-sm-3">
     <input type="submit" value="Add Catogry" class="btn btn-primary">
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
        <th scope="col">Image_Path</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $cat)
      <tr id="{{$cat->id}}">
        <th scope="row">{{$cat->id}}</th>
        <td>{{$cat->name}}</td>
        <td>{{$cat->image_path}}</td>
        <td><button type="button" class="btn btn-warning"><a href="/catUpdate/{{ $cat->id }}">Update</a></button>
            <form method="POST" action="/categoryDelete/{{$cat->id}}">
                @csrf
                <button class="btn btn-primary">Delete</button>
              </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
