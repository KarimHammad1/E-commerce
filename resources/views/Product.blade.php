@extends('Layout.app')

@section('app')

<!-- category section starts  -->

<section class="category">

    <h1 class="heading"> shop by <span>category</span> </h1>

    <div class="box-container">
        <a href="#" class="box">
            <img src="{{ asset('../image/'.$category->image_path) }}" alt="">
            <h3>{{ $category->name }}</h3>
        </a>
    </div>

</section>

<!-- category section ends -->

<!-- products section starts  -->


<section class="products">
    <h1 class="heading"> featured <span>products</span> </h1>
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

<!-- product banner section starts  -->
{{-- @if (count($offer)>0)
<section class="product-banner">

    <h1 class="heading"> <span>deal</span> of the day </h1>
    <div class="box-container">

        @foreach ($offer as $offr)
        <div class="box">
            <img src="images/product-banner-1.jpg" alt="">
            <div class="content">
                <span>{{ $offr->description }}</span>
                <h3>{{ $offr->ProductName }}</h3>
                <h3> Last Price : {{ $offr->Lastprice }}</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
        @endforeach
    </div>

</section>
@endif --}}
@endsection

<!-- product banner section ends -->


