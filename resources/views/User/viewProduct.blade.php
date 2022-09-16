@extends('Layout.app')

@section('app')
<h1 class="heading"><span>products</span> </h1>


<section class="products">
    <a href="/addProductForm" class="btn">Add Product</a>
    <div class="box-container">
        @foreach ($products as $product)
        <div class="box">
            <div class="image">

                <img src="{{ asset('../image/'.$product->image_path) }}" alt="">
            </div>
            <div class="content">
                <h3>{{ $product->name }}</h3>
                <h4>{{ $product->description }}</h4>
                <div class="price">{{ $product->price }}</div>
                <a href="/userUpdateproduct/{{ $product->id }}" class="btn">Update</a>
                <a style="margin-left: 20px" href="/deleteProduct/{{ $product->id }}" class="btn">Delete</a>
            </div>
        </div>
        @endforeach
    </div>

</section>

@endsection
