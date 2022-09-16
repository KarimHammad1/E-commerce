<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Add Product</title>
</head>
<body>
    <div class="container" style="margin-top: 20px">
    <form method="POST" action="/updateProd/{{ $product->id }}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row row-cols-3">
                    <div class="col">
                      <label for="inputEmail4">Name of product</label>
                      <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="inputEmail4" placeholder="name of product">
                    </div>
                    <div class="col">
                      <label for="inputPassword4">Description</label>
                      <input type="text" name="description" value="{{ $product->description }}" class="form-control" id="inputPassword4" placeholder="description">
                    </div>
                    <div class="col">
                      <label for="inputCity">Price</label>
                      <input type="text" name="price" value="{{ $product->price }}" class="form-control" id="inputCity">
                    </div>
                    <div class="col">
                      <label for="inputState">Category</label>
                      <select id="inputState" name="category"  class="form-control">
                        @foreach ($cat as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>
                    </div>
                      <div class="col">
                        <label for="inputCity">Image</label>
                        <input type="file" name="image" class="form-control" id="inputCity">
                      </div>
                  </div>
                  <button style="margin-top: 10px" type="submit" class="btn btn-primary">Update Product</button>
                </form>
              </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</body>
</html>
