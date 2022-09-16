@extends('Layout.app')

@section('app')

<!-- home section starts  -->
<section class="home">

    <div class="swiper home-slider">



        <div class="swiper-wrapper">
        @foreach ( $banner as $ban)
        <div class="swiper-slide slide">

            <div class="image">
                <img src="{{ asset('../image/'.$ban->image_path) }}" alt="">
            </div>
            <div class="content">
                <span>Last Price : {{ $ban->Lastprice }}</span>
                <h3>{{ $ban->ProductName }}</h3>
                <h4>{{ $ban->description }}</h4>
                <a href="https://wa.me/{{ $ban->userPhone }}?text=Hello I saw {{ $ban->ProductName }}
                    at Sawe2 w Tsawa2 with last price : {{ $ban->Lastprice }} please give me more Details" class="btn">shop now</a>
            </div>


        </div>
        @endforeach
    </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>


</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box-container">

        @foreach ($offers as $offer)
        <a href="#" class="box">
            <img src="{{ asset('../image/'.$offer->image_path) }}" alt="">
            <div class="content">
                <span>{{ $offer->ProductName }}</span>
                <h3>{{ $offer->description }}</h3>
                <h3>Last Price: {{ $offer->Lastprice }}</h3>
            </div>

        </a>
        @endforeach
    </div>

</section>

<!-- banner section ends -->

<!-- arrivals section starts  -->
{{--
<section class="arrivals">

    <h1 class="heading"> new <span>arrivals</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/arrival-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>HD television</h3>
                <div class="price"> $249.99</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arrival-2.jpg"  alt="">
            </div>
            <div class="content">
                <h3>lenovo laptop</h3>
                <div class="price"> $249.99</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arrival-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>new smartphone</h3>
                <div class="price"> $249.99</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arrival-4.jpg"  alt="">
            </div>
            <div class="content">
                <h3>new printer</h3>
                <div class="price"> $249.99</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arrival-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>new headphones</h3>
                <div class="price"> $249.99 </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arrival-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>new speakers</h3>
                <div class="price"> $249.99</div>
            </div>
        </div>

    </div>

</section> --}}
@endsection
<!-- arrivals section ends -->
