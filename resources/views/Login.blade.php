@extends('Layout.app')

@section('app')

<!-- login form section starts  -->

<section class="login">

    <form action="/signIn" method="POST" >
        @csrf
        <h3>login now</h3>
        <input type="email" name="email" placeholder="enter your email" id="" class="box">
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        <input type="password" name="password" placeholder="enter your password" id="" class="box">
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        <input type="submit" value="login now" class="btn">

    </form>

</section>
@endsection
<!-- login form section ends  -->

