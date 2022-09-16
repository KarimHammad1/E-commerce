@extends('Layout.app')

@section('app')

<section class="products">
    <h1 class="heading"> Our <span>Team</span> </h1>
    <div class="box-container">
        @foreach ($team as $tea)
        <a href="/teamProduct/{{ $tea->id }}">
        <div class="box">
            <div class="image">
                <img src="{{ asset('../image/'.$tea->image_path) }}" alt="">
            </div>
            <div class="content">
                <h3>{{ $tea->name }}</h3>
                <div class="price">{{ $tea->phone }}</div>
            </div>
        </div>
        </a>
        @endforeach
    </div>

</section>



@endsection
