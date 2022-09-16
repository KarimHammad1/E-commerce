@extends('Layout.admin')

@section('content')

<form method="POST" action="/admin/updateOffer/{{ $offer->id }}" enctype="multipart/form-data">
        @csrf
        <div class="row"  >
        <div class="col-sm-2">
        <label for="" class="form-label">ProductName</label>
        <input class="form-control" list="datalistOptions" name="name" value="{{ $offer->ProductName }}" id="name" placeholder="ProductName">
        </div>
        <div class="col-sm-2">
        <label for=" " class="form-label">UserName</label>
        <input class="form-control" list="datalistOptions" name="userName" value="{{ $offer->userName }}" id="email" placeholder="UserName">
        </div>
        <div class="col-sm-2">
        <label for=" " class="form-label">% of discount</label>
        <input class="form-control" list="datalistOptions" name ="discount"  id="" placeholder="% of discount">
        </div>
        <div class="col-sm-2">
        <label for=" " class="form-label">FirstPrice</label>
        <input class="form-control" list="datalistOptions" name ="Fprice" value="{{ $offer->FirstPrice }}" id="address" placeholder="Fprice">
        </div>
        <div class="col-sm-2">
            <label for=" " class="form-label">LastPrice</label>
            <input class="form-control" list="datalistOptions" name ="LastPrice" value="{{ $offer->Lastprice }}" id="address" placeholder="Lprice">
            </div>
        <div class="col-sm-3">
        <label for=" " class="form-label">Image</label>
        <input type="file" class="form-control" value="{{ $offer->image_path }}" name="Image">
        </div>
      </div>
      <div class="row"  >
        <div class="col-sm-2">
        <label for="" class="form-label">Description</label>
        <input type="text" class="form-control" list="datalistOptions" value="{{ $offer->description }}" name="description" id="password" placeholder="Description">
        </div>
      </div>
     <div class="row">
     <div class="col-sm-3">&nbsp</div>
     <div class="col-sm-2"></div>
     <div class="col-sm-3">
     <input type="submit" value="Update Offer" class="btn btn-primary">
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
@endsection
