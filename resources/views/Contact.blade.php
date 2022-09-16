@extends('Layout.app')

@section('app')

<!-- side-bar section ends -->

<!-- contact info section starts  -->

<section class="info-container">

    <div class="box-container">



        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>anasbhai@gmail.com</p>
        </div>

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>number</h3>
            <p><a href="https://wa.me/+96170853896">+96170853896</a></p>
        </div>

    </div>

</section>

<!-- contact info section ends -->

<!-- contact section starts  -->

<section class="contact">

    <form action="">
        <h3>get in touch</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe provident nihil non unde, quia magnam quibusdam ad obcaecati nam animi?</p>
        <div class="inputBox">
            <input type="text" placeholder="your name">
            <input type="email" placeholder="your email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="your number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>



@endsection
