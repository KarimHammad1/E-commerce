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

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="/" class="logo"> <i class="fas fa-store"></i> Sawe2 w Tsawa2 </a>


    <form action="/product" class="search-form">
        <input type="search" id="search-box" name="search" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="/login" class="fas fa-user"></a>
    </div>


</header>

<!-- header section ends -->

<!-- side-bar section starts -->

<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>
<a href="/profile">
    <div class="user">
        <img src="images/user-img.png" alt="">
        <h3>shaikh anas</h3>
        <a href="/logout">log out</a>
    </div>
</a>
    <nav class="navbar">
        <a href="/"> <i class="fas fa-angle-right"></i> home </a>
        <a href="/about"> <i class="fas fa-angle-right"></i> about </a>
        <a href="/product"> <i class="fas fa-angle-right"></i> products </a>
        {{-- <a href="/contact"> <i class="fas fa-angle-right"></i> contact </a> --}}
        <a href="/login"> <i class="fas fa-angle-right"></i> login </a>
    </nav>

</div>


<!-- side-bar section ends -->
<!-- products section starts  -->


<section class="products">
    <h1 class="heading"> featured <span>products</span> </h1>
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="{{ asset('../image/'.$product->image_path) }}" alt="">
            </div>
            <div class="content">
                <h3>{{ $product->name }}</h3>
                <h4 class="">{{ $product->description }}</h4>
                <div class="price">{{ $product->price }}</div>
                <a href="https://wa.me/{{ $userPhone[0]->phone }}?text=Hello {{ $userName[0]->name }} (' www.sawe2wtsawa2/product/{{ $product->id }}.com ') I saw {{ $product->name }}
                    at Sawe2 w Tsawa2 please give me more Details"
                    style="font-size: 24px" class="fab fa-whatsapp"> Text for more details</a>
            </div>
        </div>


    </div>

</section>


<!-- footer section starts  -->

<section class="quick-links">

    <a href="/" class="logo"> <i class="fas fa-store"></i> shopie </a>

    <div class="links">
        <a href="/"> home </a>
        <a href="/about"> about </a>
        <a href="/product"> products </a>
        {{-- <a href="/contact"> contact </a> --}}
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
<script src="js/script.js"></script>
<script src="//code.tidio.co/inu5gwjsifgailkwnwbysk9fgb1boefl.js" async></script>

</body>
</html>
