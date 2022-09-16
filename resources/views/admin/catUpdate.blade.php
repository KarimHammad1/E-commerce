@extends('Layout.admin')

@section('content')

<form method="POST" action="/admin/catUpdate/{{ $cat->id }}" enctype="multipart/form-data">
        @csrf
        <div class="row"  >
        <div class="col-sm-2">
        <label for="" class="form-label">Name</label>
        <input class="form-control" list="datalistOptions" value="{{ $cat->name }}" name="name" id="name" placeholder="Name">
        </div>
        <div class="col-sm-3">
        <label for=" " class="form-label">Image</label>
        <input type="file" class="form-control" {{ $cat->image_path }} name="Image">
        </div>
      </div>
      <div class="row"  >
      </div>
     <div class="row">
     <div class="col-sm-3">&nbsp</div>
     <div class="col-sm-2"></div>
     <div class="col-sm-3">
     <input type="submit" value="Update Catogry" class="btn btn-primary">
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
