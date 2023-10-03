<?php 

    if (!isset($_SESSION["validarIngreso"])){
        echo '<script>window.location = "index.php?wedding=login"; </script>';
        return;
    } else {
        if($_SESSION["validarIngreso"] != "ok"){
            echo '<script>window.location = "index.php?wedding=login"; </script>';   
            return;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NextGenerationDev">
    <title>Wedding, Wedding Planer & Event HTML Template</title>
    <!--Favicon img-->
    <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
    <!--Bootstarp min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Bootstarp map css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <!--Owl Carousel css-->
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <!--Owl Carousel Theme css-->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!--All min css-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--Swiper min css-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--main css-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>


    <!--==== Header Section End ======= -->
    <header class="header-section">
   <div class="container">
      <div class="header-wrapper">
      <div class="logo-menu">
            <a href="index.php?wedding=home" class="logo">
               <img src="assets/img/logo/logo1.png" alt="img">
            </a>
         </div>
         <div class="header-bar d-lg-none">
            <span></span>
            <span></span>
            <span></span>
         </div>
         <ul class="main-menu">
            <li class="active">
               <a href="index.php?wedding=users">Users</a>
            </li>
            <li class="active">
               <a href="index.php?wedding=home">Home</a>
            </li>
            <li>
               <a href="index.php?wedding=about">About</a>
            </li>
            <li>
               <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?wedding=service">
                        <span>Service</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?wedding=service-single">
                        <span>Service Single</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="index.php?wedding=story">Our story</a>
            </li>
            <li>
               <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?wedding=event">
                        <span>Our event</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?wedding=gallery">
                        <span>Gallery</span>
                     </a>
                  </li>
                  <!--<li class="subtwohober">
                     <a href="error.html">
                        <span>Error 404</span>
                     </a>
                  </li>-->
               </ul>
            </li>
            <li>
               <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?wedding=blog">
                        <span>Blog</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?wedding=blog-single">
                        <span>Blog Single</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="index.php?wedding=contact">Contact</a>
            </li>
            <li class="active">
               <a href="index.php?wedding=salir">Salir</a>
            </li>
        </ul>
      </div>
   </div>
</header>
    <!--==== Scroll-Up Section Here ======= -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--==== Scroll-Up Section End ======= -->

    <!--=========== Banner Section Here ========= -->
    <section class="banner__section" >
        <div class="banner-overlay">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-12">
                        <div class="banner__content center">
                            <div class="banner__shape">
                                <img src="assets/img/banner/banner-shape.png" alt="banner__shape">
                            </div>
                            <div class="banner__shape2">
                                <img src="assets/img/banner/banner-shape2.png" alt="banner__shape">
                            </div>
                            <div class="banner__shape3">
                                <img src="assets/img/banner/banner-shape3.png" alt="banner__shape">
                            </div>
                            <h5 class="wow fadeInUp" data-wow-duration="2s">The Wedding of</h5>
                            <h1 class="wow fadeInDown" data-wow-duration="4s">Shakira & Deniel</h1>
                            <h3 class="wow fadeInUp" data-wow-duration="2s">You are invited</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Banner Section End ========= -->

    <!--=========== About Section Here ========= -->
    <section class="about__section pt-120 pb-120" style="height:70%;">
        <div class="shape__right">
            <img src="assets/img/about/shape/right.png" alt="shape-image">
        </div>
        <div class="shape__one">
            <img src="assets/img/about/shape/shape1.png" alt="shape-image">
        </div>
        <div class="container">
            <div class="about__wrap">
                <div class="flower__shape wow fadeInUp" data-wow-duration="3s">
                    <img src="assets/img/about/shape/flower1.png" alt="flower__image">
                </div>
                <div class="flower__shape__two wow fadeInDown" data-wow-duration="4s">
                    <img src="assets/img/about/shape/flower2.png" alt="flower__image">
                </div>
                <div class="about__wrapper__one  owl-theme owl-carousel">
                    <div class="about__items">
                        <div class="about__thumb">
                            <img src="assets/img/about/about1.jpg" alt="about__image">
                            <div class="about__effect">
                                <h6 class="tittle">Photography</h6>
                            </div>
                        </div>
                    </div>
                    <div class="about__items">
                        <div class="about__thumb">
                            <img src="assets/img/about/about2.jpg" alt="about__image">
                            <div class="about__effect">
                                <h6 class="tittle">Fine Dining</h6>
                            </div>
                        </div>
                    </div>
                    <div class="about__items">
                        <div class="about__thumb">
                            <img src="assets/img/about/about3.jpg" alt="about__image">
                            <div class="about__effect">
                                <h6 class="tittle">Registry</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== About Section End ========= -->

    <!--=========== Celebrate Section Here ========= -->
    <section class="celebrate__section pb-120">
        <div class="flowers__shape wow fadeInUp" data-wow-duration="4s">
            <img src="assets/img/celebrate/flower.png" alt="shape__image">
        </div>
        <div class="left__shape">
            <img src="assets/img/celebrate/left.png" alt="left__shape">
        </div>
        <div class="container">
            <div class="celebrate__wrapper">
                <div class="border__shape">
                    <img src="assets/img/celebrate/shape.png" alt="shape">
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="celebrate__items">
                            <div class="celebrate__thumb">
                                <img src="assets/img/celebrate/celebrate.jpg" alt="celebrate__image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="celebrate__content center">
                            <h3>
                                Join us to celebrate
                            </h3>
                            <h3>
                                The wedding day of
                            </h3>
                            <h2 class="celebrate__tittle">
                                Shakira & Deniel
                            </h2>
                            <h3 class="sub__tittle">
                                Which is celebration on
                            </h3>
                            <ul class="d-flex">
                                <li>April</li>
                                <li>15</li>
                                <li class="mr-none">2023</li>
                            </ul>
                            <div class="last__text">
                                <h3>
                                    Starting at 2:00
                                </h3>
                                <p>
                                    In the afternoon
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Celebrate Section End ========= -->

    <!--=========== Love Section Here ========= -->
    <section class="love__section pt-120 pb-120" >
        <div class="container">
            <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
                <h2 class="section__title">
                    Our Love Story
                </h2>
                <img src="assets/img/tittle/flower.png" alt="flower__tittle" style="height: 10%;">
            </div>
            <div class="row g-0">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="love__items">
                        <div class="love__thumb wow fadeInDown" data-wow-duration="4s">
                            <img src="assets/img/love/flower.png" alt="flower__thumb">
                            <div class="love__wrapper">
                                <div class="love__content">
                                    <h3>The Proposal</h3>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 mt-4">
                    <div class="right__thumb wow fadeInUp" data-wow-duration="3s">
                        <img src="assets/img/love/right.jpg" alt="right__image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Love Section End ========= -->

    <!--=========== Gallery Section Here ========= -->
    <section class="gallery__section pt-120 pb-120">
        <div class="left__shape fadeInDown" data-wow-duration="3s">
            <img src="assets/img/testi/shape-left.png" alt="left__shape">
        </div>
        <div class="container">
            <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
                <h2 class="section__title">
                    Captured Moments
                </h2>
                <img src="assets/img/tittle/flower.png" alt="flower__tittle" style="height: 10%;">
            </div>
            <div class="row g-4">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery__thumb">
                        <a href="assets/img/gallery/g1.jpg" class="popup__image">
                            <img src="assets/img/gallery/g1.jpg" alt="gallery__image">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery__thumb">
                        <a href="assets/img/gallery/g2.jpg" class="popup__image">
                            <img src="assets/img/gallery/g2.jpg" alt="gallery__image">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery__thumb">
                        <a href="assets/img/gallery/g3.jpg" class="popup__image">
                            <img src="assets/img/gallery/g3.jpg" alt="gallery__image">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery__thumb">
                        <a href="assets/img/gallery/g4.jpg" class="popup__image">
                            <img src="assets/img/gallery/g4.jpg" alt="gallery__image">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery__thumb">
                        <a href="assets/img/gallery/g5.jpg" class="popup__image">
                            <img src="assets/img/gallery/g5.jpg" alt="gallery__image">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery__thumb">
                        <a href="assets/img/gallery/g6.jpg" class="popup__image">
                            <img src="assets/img/gallery/g6.jpg" alt="gallery__image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Gallery Section End ========= -->

    <!--=========== Testimonial Section Here ========= -->
    <section class="testimonial__section pt-120 pb-120">
        <div class="left__shape wow fadeInDown" data-wow-duration="3s">
            <img src="assets/img/testi/shape-left.png" alt="left__shape">
        </div>
        <div class="right__shape wow fadeInUp" data-wow-duration="4s">
            <img src="assets/img/testi/shape-right.png" alt="left__shape">
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInDown" data-wow-duration="3s">
                    <div class="testi__items center">
                        <div class="testi__thumb">
                            <img src="assets/img/testi/testi1.png" alt="testi-image">
                        </div>
                        <div class="testi__content">
                            <h3>
                                Danial Dennis
                            </h3>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <div class="testi__shape mt-3">
                                <img src="assets/img/testi/shape.png" alt="flower__image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="4s">
                    <div class="testi__items center">
                        <div class="testi__thumb">
                            <img src="assets/img/testi/testi2.png" alt="testi-image">
                        </div>
                        <div class="testi__content">
                            <h3>
                                Shakira Judith
                            </h3>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <div class="testi__shape mt-3">
                                <img src="assets/img/testi/shape.png" alt="flower__image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Testimonial Section End ========= -->

    <!--=========== Member Section Here ========= -->
    <section class="member__wedding__section pb-120">
        <div class="shape__one">
            <img src="assets/img/member/left-shape.png" alt="left__shape">
        </div>
        <div class="member__section pt-120 pb-120" style="height:65%">
            <div class="left__shape">
                <img src="assets/img/member/shape.png" alt="shape__image">
            </div>
            <div class="member__wrapper owl-theme owl-carousel">
                <div class="member__thumb">
                    <img src="assets/img/member/member1.png" alt="member__image">
                </div>
                <div class="member__thumb">
                    <img src="assets/img/member/member2.png" alt="member__image">
                </div>
                <div class="member__thumb">
                    <img src="assets/img/member/member3.png" alt="member__image">
                </div>
                <div class="member__thumb">
                    <img src="assets/img/member/member4.png" alt="member__image">
                </div>
                <div class="member__thumb">
                    <img src="assets/img/member/member5.png" alt="member__image">
                </div>
            </div>
        </div>
        <div class="wedding__section pt-120">
            <div class="shape__two">
                <img src="assets/img/member/rightt-shape.png" alt="left__shape">
            </div>
            <div class="container">
                <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
                    <h2 class="section__title">
                        Wedding Info
                    </h2>
                    <img src="assets/img/tittle/flower.png" alt="flower__tittle" style="height: 10%;">
                </div>
                <div class="row g-4">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInDown" data-wow-duration="7s">
                        <div class="wedding__items">
                            <div class="thumb">
                                <img src="assets/img/wedding/wedding1.jpg" alt="team-img">
                            </div>
                            <div class="content__cover">
                                <div class="wedding__content">
                                    <h3>
                                        The reception
                                    </h3>
                                    <div class="date">
                                        <h6>Saturday, 15, 2023</h6>
                                        <h6>2.00 pm - 10.00 pm</h6>
                                    </div>
                                    <div class="date__two">
                                        <h6>
                                            203 Fake St. Mountain View,
                                        </h6>
                                        <h6>
                                            San Francisco, California, USA
                                        </h6>
                                    </div>
                                    <h4>
                                        +16102458646
                                    </h4>
                                    <div class="wedding__button">
                                        <a href="#0" class="cmn--btn">
                                            see map
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="5s">
                        <div class="wedding__items active__items">
                            <div class="thumb">
                                <img src="assets/img/wedding/wedding2.jpg" alt="team-img">
                            </div>
                            <div class="content__cover">
                                <div class="wedding__content">
                                    <h3>
                                        The dining time
                                    </h3>
                                    <div class="date">
                                        <h6>Saturday, 15, 2023</h6>
                                        <h6>2.00 pm - 10.00 pm</h6>
                                    </div>
                                    <div class="date__two">
                                        <h6>
                                            203 Fake St. Mountain View,
                                        </h6>
                                        <h6>
                                            San Francisco, California, USA
                                        </h6>
                                    </div>
                                    <h4>
                                        +16102458646
                                    </h4>
                                    <div class="wedding__button">
                                        <a href="#0" class="cmn--btn">
                                            see map
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInDown" data-wow-duration="2s">
                        <div class="wedding__items">
                            <div class="thumb">
                                <img src="assets/img/wedding/wedding3.jpg" alt="team-img">
                            </div>
                            <div class="content__cover">
                                <div class="wedding__content">
                                    <h3>
                                        The wedding party
                                    </h3>
                                    <div class="date">
                                        <h6>Saturday, 15, 2023</h6>
                                        <h6>2.00 pm - 10.00 pm</h6>
                                    </div>
                                    <div class="date__two">
                                        <h6>
                                            203 Fake St. Mountain View,
                                        </h6>
                                        <h6>
                                            San Francisco, California, USA
                                        </h6>
                                    </div>
                                    <h4>
                                        +16102458646
                                    </h4>
                                    <div class="wedding__button">
                                        <a href="#0" class="cmn--btn">
                                            see map
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Member Section End ========= -->

    <!--=========== Attending Section Here ========= -->
    <section class="attending__section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="attending__items">
                        <div class="attending__content center">
                            <h2>
                                Are You Attending?
                            </h2>
                            <h6>
                                Please reserve before June 19th, 2015. Lorem ipsum dolor sit amet, consectetur adipiscing
                            </h6>
                            <a href="#0" class="cmn--btn mt-4">
                                RSVP
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Attending Section End ========= -->

    <!--=========== Blog Section Here ========= -->
    <section class="blog__section pt-120 pb-120">
        <div class="left__shape">
            <img src="assets/img/testi/shape-left.png" alt="left__shape">
        </div>
        <div class="container">
            <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
                <h2 class="section__title">
                    from our blog
                </h2>
                <img src="assets/img/tittle/flower.png" alt="flower__tittle" style="height: 10%;">
            </div>
            <div class="row g-4">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="7s">
                    <div class="blog__items">
                        <div class="blog__thumb">
                            <img src="assets/img/blog/blog1.jpg" alt="blog__image" style="height: 50%;">
                        </div>
                        <div class="blog__content">
                            <h4>
                                <a href="blog-single.html">top 10 gifts</a>
                            </h4>
                            <p>
                                The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                            </p>
                            <div class="blog-button mt-2">
                                <a href="blog-single.html" class="blog-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="5s">
                    <div class="blog__items">
                        <div class="blog__thumb">
                            <img src="assets/img/blog/blog2.jpg" alt="blog__image" style="height: 50%;" >
                        </div>
                        <div class="blog__content">
                            <h4>
                                <a href="blog-single.html">Best Photography Idea</a>
                            </h4>
                            <p>
                                The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                            </p>
                            <div class="blog-button mt-2">
                                <a href="blog-single.html" class="blog-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="2s">
                    <div class="blog__items">
                        <div class="blog__thumb">
                            <img src="assets/img/blog/blog3.jpg" alt="blog__image" style="height: 50%;">
                        </div>
                        <div class="blog__content">
                            <h4>
                                <a href="blog-single.html">Wedding Flower Collect</a>
                            </h4>
                            <p>
                                The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                            </p>
                            <div class="blog-button mt-2">
                                <a href="blog-single.html" class="blog-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Blog Section End ========= -->

    <!--=========== Footer Section Here ========= -->
    <div class="footer__section">
        <div class="container">
            <div class="border__area">
                <div class="container">
                    <div class="footer__logo center">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="footer__logo">
                        </a>
                    </div>
                    <div class="footer__bottom center">
                        <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
                        <ul class="footer__icon">
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="active">
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                            </li>
                            <li class="mr-none">
                                <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                        </ul>
                        <ul class="footer__menu">
                            <li><a href="index.html">home</a></li>
                            <li><a href="about.html">about</a></li>
                            <li><a href="service.html">service</a></li>
                            <li><a href="story.html">Story</a></li>
                            <li><a href="gallery.html">gallery</a></li>
                            <li><a href="blog.html">blog</a></li>
                            <li class="mr-none"><a href="contact.html">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== Footer Section End ========= -->




    <!--Jquery 3 6 0 Min Js-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--Bootstrap bundle Js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--Viewport Jquery Js-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--Wow min Js-->
    <script src="assets/js/wow.min.js"></script>
    <!--Owl Carousel min Js-->
    <script src="assets/js/owl.min.js"></script>
    <!--Swiper min Js-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--Magnific popup min Js-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--main Js-->
    <script src="assets/js/main.js"></script>
</body>

</html>