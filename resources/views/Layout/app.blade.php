<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <!-- cusom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="/" class="logo"> <i class="fas fa-store"></i> Sawe2 W Tsawa2 </a>


    {{-- <form action="/product" class="search-form">
        <input type="search" id="search-box" name="search" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form> --}}

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>

@if(Auth::guest())
        <a href="/login" class="fas fa-user"></a>
 @endif
    </div>


</header>

<!-- header section ends -->

<!-- side-bar section starts -->

<div class="side-bar">
@if(Auth::user())
    <div id="close-side-bar" class="fas fa-times"></div>
<a href="/profile">
    <div class="user">
        <img src="{{ asset('../image/'.auth::user()->image_path) }}" alt="">
        <h3>{{ auth::user()->name }}</h3>
        <a href="/logout">log out</a>
    </div>
</a>
@endif
    <nav class="navbar">
        <a href="/"> <i class="fas fa-angle-right"></i> home </a>
        <a href="/team"> <i class="fas fa-angle-right"></i> Team </a>
        <a href="/about"> <i class="fas fa-angle-right"></i> about </a>
        @if (Auth::user())
        {{-- <a href="/addProductForm"> <i class="fas fa-angle-right"></i>My Product</a> --}}
        <a href="/MyProducts"> <i class="fas fa-angle-right"></i>My Product</a>

        @endif
        <a href="/catprod"> <i class="fas fa-angle-right"></i> products </a>
        {{-- <a href="/contact"> <i class="fas fa-angle-right"></i> contact </a> --}}

@if(Auth::guest())
        <a href="/login"> <i class="fas fa-angle-right"></i> login </a>
        @endif
    </nav>

</div>


<!-- side-bar section ends -->
@yield('app')
<!-- footer section starts  -->

<section class="quick-links">

    <a href="/" class="logo"> <i class="fas fa-store"></i> Sawe2 W Tsawa2 </a>

    <div class="links">
        <a href="/"> home </a>
        <a href="/team"> Team </a>
        <a href="/about"> about </a>
        <a href="/catprod"> products </a>
        {{-- <a href="/contact"> contact </a> --}}
        @if(Auth::user())
        <a href="/MyProducts">My Product</a>
        @endif
        <a href="/login"> login </a>

    </div>

    <div class="share">
        <a href="https://wa.me/0096176544784" class="fab fa-whatsapp"></a>
    </div>

</section>

<section class="credit">

    <p> created by <span><a href="https://www.nolimitsdevs.com/">NoLimits</a></span> | all rights reserved! </p>


</section>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>
{{-- <script src="//code.tidio.co/inu5gwjsifgailkwnwbysk9fgb1boefl.js" async></script> --}}
{{-- <script>
    importScripts('https://cdn.onesignal.com/sdks/OneSignalSDKWorker.js');
      window.OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "7ed7d65a-b2db-4ca4-80a9-9768702c6c24",
          safari_web_id: "",
          notifyButton: {
            enable: true,
          },
          allowLocalhostAsSecureOrigin: true,
        });
      });
    </script> --}}
</body>
</html>
