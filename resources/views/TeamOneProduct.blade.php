@extends('Layout.app')

@section('app')

<section class="products">

    <h1 class="heading"><span>Product</span> </h1>
    <div class="box-container">
        @foreach ($product as $prod)
        <div class="box">
            <div class="image">
                <img src="{{ asset('../image/'.$tea->image_path) }}" alt="">
            </div>
            <div class="content">
                <h3>{{ $prod->name }}</h3>
                <div class="price">{{ $prod->description }}</div>
            </div>
        </div>
        @endforeach
    </div>

</section>



@endsection
