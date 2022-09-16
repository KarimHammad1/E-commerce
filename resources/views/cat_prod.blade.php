@extends('Layout.app')

@section('app')

<!-- category section starts  -->

<section class="category">

    <h1 class="heading"> All <span>categories</span> </h1>

    <div class="box-container">
        @foreach ($catg as $cat)
        <a href="/cat/{{ $cat->id }}" class="box">
            <img src="{{ asset('../image/'.$cat->image_path) }}" alt="">
            <h3>{{ $cat->name }}</h3>
        </a>
        @endforeach
    </div>

</section>

<!-- category section ends -->

<!-- products section starts  -->


<section class="products">
    <h1 class="heading"> All <span>products</span> </h1>
    <div class="box-container">
        @foreach ($products as $product)
        <a href="/product/{{ $product->id }}">
        <div class="box">
            <div class="image">
                <img src="{{ asset('../image/'.$product->image_path) }}" alt="">
            </div>
            <div class="content">
                <h3>{{ $product->name }}</h3>
                <div class="price">{{ $product->price }}</div>
            </div>
        </div>
        </a>
        @endforeach
    </div>

</section>

<!-- products section ends -->
@endsection

<!-- product banner section ends -->


