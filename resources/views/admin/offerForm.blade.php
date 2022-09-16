@extends('Layout.admin')

@section('content')

<form method="POST" action="/addOffer" enctype="multipart/form-data">
        @csrf
        <div class="row"  >
        <div class="col-sm-2">
        <label for="" class="form-label">ProductName</label>
        <input class="form-control" list="datalistOptions" name="name" id="name" placeholder="ProductName">
        </div>
        <div class="col-sm-2">
        <label for=" " class="form-label">UserName</label>
        <input class="form-control" list="datalistOptions" name="userName" id="email" placeholder="UserName">
        </div>
        <div class="col-sm-2">
        <label for=" " class="form-label">% of discount</label>
        <input class="form-control" list="datalistOptions" name ="discount" id="phone_number" placeholder="% of discount">
        </div>
        <div class="col-sm-2">
        <label for=" " class="form-label">FirstPrice</label>
        <input class="form-control" list="datalistOptions" name ="Fprice" id="address" placeholder="Fprice">
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
     <input type="submit" value="Add Offer" class="btn btn-primary">
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
      @foreach($offers as $offer)
      <tr id="{{$offer->id}}">
        <th scope="row">{{$offer->id}}</th>
        <td>{{$offer->ProductName}}</td>
        <td>{{$offer->image_path}}</td>
        <td><button type="button" class="btn btn-warning"><a href="/offerUpdate/{{ $offer->id }}">Update</a></button>
            <form method="POST" action="/offerDelete/{{$offer->id}}">
                @csrf
                <button class="btn btn-primary">Delete</button>
              </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
