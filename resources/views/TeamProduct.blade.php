@extends('Layout.app')

@section('app')

<section class="products">
    @foreach ($userName as $name)
    <h1 class="heading">{{ $name->name }}'s  <span>Product</span> </h1>
    @endforeach
    <div class="box-container">
        @foreach ($team as $tea)
        <div class="box">
            <div class="image">
                <img src="{{ asset('../image/'.$tea->image_path) }}" alt="">
            </div>
            <div class="content">
                <h3>{{ $tea->name }}</h3>
                <div class="price">{{ $tea->description }}</div>
                @foreach ($userPhone as $phone)
                <a href="https://wa.me/{{ $phone->phone }}" style="font-size: 24px" class="fab fa-whatsapp"> Text for more details</a>
                @endforeach
            </div>
        </div>

        @endforeach
    </div>


</section>


@endsection
