


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

<!--==== Header Section Here ======= -->
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
               <a href="index.php?wedding=login">Login</a>
            </li>
            <li class="active">
               <a href="index.php?wedding=register">Register</a>
            </li>
            <li class="active">
               <a href="index.php?wedding=home">Home</a>
            </li>
            
        </ul>
      </div>
   </div>
</header>
<!--==== Header Section End ======= -->

<!--==== Scroll-Up Section Here ======= -->
<div class="scroll-up">
   <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
   </svg>
</div>
<!--==== Scroll-Up Section End ======= -->   

<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
   <div class="container">
      <div class="breadcumd__wrapper center">
         <h1 class="left__content">
            Register
         </h1>
         <ul class="right__content">
            <li>
               <a href="index.php?wedding=home">
                  Home
               </a>
            </li>
            <li>
               <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
               Login
            </li>
         </ul>
      </div>
   </div>
</section>
<!--=========== Breadcumd Section End ========= -->

<!--=========== Contact Info Section Here ========= -->

<!--=========== Contact Info Section End ========= -->

<!--=========== Contact Info Section ========= -->

<!--=========== Contact Info End ========= -->

<!--=========== Footer Section Here ========= -->
<div class="footer__section">
   <div class="container">
      <div class="border__area">
         <div class="container">
         <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter name" id="nombre" name="registroNombre" />
            </div>
        </div>
        <div class="form-group">
            <label for="email">Correo electronico</label>
            <div class="input-group">
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="registroEmail" />
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="registroPassword" />
            </div>
        </div>
        <?php
        $registro = ControladorFormularios::ctrRegistro();
        if ($registro == "ok"){
            echo '<script>
            if (window.history.replaceState){
              window.history.replaceState(null, null, window.location.href);
            }
            </script>';
            echo '<div class="alert alert-success"> El usuario ha sido registrado </div>';
        }
        ?>
        <br>
        <br>
<div class="footer__logo center">
<button type="submit" class="btn btn-primary" style="background-color: #F2C0D2; border:none" >Register</button>
            </div>
            </form>
        <br>
        <br>
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
               <li class="active">
               <a href="index.php?wedding=login">Login</a>
            </li>
            <li class="active">
               <a href="index.php?wedding=register">Register</a>
            </li>
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