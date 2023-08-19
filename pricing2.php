<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rock Hammer </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons.jpg">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <h4>RockHammer</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="logo">
                            <a href="#"><img src="assets/img/logo/indexlogo.png" style="width:150px; height:150px;"/></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                <li><a href="index2.php">Home</a></li>
                                    <li><a href="about2.php">About</a></li>
                                    <li><a href="courses2.php">Courses</a></li>
                                    <li><a href="pricing2.php">Pricing</a></li>
                                    <li><a href="gallery2.php">Gallery</a></li>
                                    <li><a href="#">Profile</a>
                                        <ul class="submenu">
                                        <?php 
                                                //welcome 'Full Name' code                                
                                            session_start();
                                            $user=$_SESSION['data']; 

                                        ?>
                                        <?php $_SESSION['dataset']=$user; ?>
                                            <li><a href="user_profile.php" ><?php
                                                 echo "<i>Welcome, ". $user['1']."</i>"?> </a></li>
                                            <li><a href="logout.php">Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="contact2.php" style="font-size:15px; margin:0; padding:26px;"class="btn">Contact Us</a>
                        </div>
                       <!-- Mobile Menu -->
                       <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Pricing</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- Courses area start -->
    <div style="width: 100%;height: 100%;"class="modal fade" id="pricing1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Join Our 2 Months Plan Now!</h2>
              <button type="button boxed-btn" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-contact contact_form" id="contactForm">
              <div class="modal-body">
              
                <div class="form-group">
                  <label for="name"><i style="font-size:15px;"class="fas fa-user"></i>&nbsp;Full Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter your full name">
                </div>
                
                <div class="form-group">
                  <label for="email1"><i style="font-size:15px;"class="fas fa-envelope"></i>&nbsp;Email address</label>
                  <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
               
              </div>
              <div class="modal-footer justify-content-center">
                <button type="submit" class="button button-contactForm boxed-btn">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div style="width: 100%;height: 100%;"class="modal fade" id="pricing2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Join Our 3 Months Plan Now!</h2>
              <button type="button boxed-btn" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-contact contact_form" id="contactForm">
              <div class="modal-body">
              
              <div class="form-group">
                  <label for="name"><i style="font-size:15px;"class="fas fa-user"></i>&nbsp;Full Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter your full name">
                </div>
                
                <div class="form-group">
                  <label for="email1"><i style="font-size:15px;"class="fas fa-envelope"></i>&nbsp;Email address</label>
                  <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
               
              </div>
              <div class="modal-footer justify-content-center">
                <button type="submit" class="button button-contactForm boxed-btn">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div style="width: 100%;height: 100%;"class="modal fade" id="pricing3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Join Our 6 Months Plan Now!</h2>
              <button type="button boxed-btn" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-contact contact_form" id="contactForm">
              <div class="modal-body">
              
              <div class="form-group">
                  <label for="name"><i style="font-size:15px;"class="fas fa-user"></i>&nbsp;Full Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter your full name">
                </div>
                
                <div class="form-group">
                  <label for="email1"><i style="font-size:15px;"class="fas fa-envelope"></i>&nbsp;Email address</label>
                  <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
               
              </div>
              <div class="modal-footer justify-content-center">
                <button type="submit" class="button button-contactForm boxed-btn">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <section class="pricing-area section-padding30 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55">
                        <h2>Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="assets/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">6 month</span>
                                <p class="mb-25">$30/m  <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#pricing1" data-animation="fadeInLeft" data-delay="0.8s" class="border-btn border-btn2">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="assets/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">6 month</span>
                                <p class="mb-25">$30/m  <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#pricing2" data-animation="fadeInLeft" data-delay="0.8s" class="border-btn border-btn2">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="assets/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">6 month</span>
                                <p class="mb-25">$30/m  <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="assets/img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#pricing3" data-animation="fadeInLeft" data-delay="0.8s" class="border-btn border-btn2">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses area End -->
    <!-- ? services-area -->
    <section class="services-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="features-icon">
                            <i class="fas fa-map-marker-alt" style="color: #ffffff; font-size: 30px;"></i>
                        </div>
                        <div class="features-caption">
                            <h3>Location</h3>
                            <p>Rahuri market Yard , Opposite to Dhawade Petrol Pump , Rahuri - 413705  Tal . Rahuri , Dist . Ahmednagar , India</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="features-icon">
                            <i class="fas fa-phone" style="color: #ffffff; font-size: 28px;"></i>
                        </div>
                        <div class="features-caption">
                            <h3>Phone</h3>
                            <p>(+91) 9762204444</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="features-icon">
                            <i class="fas fa-envelope" style="color: #ffffff; font-size: 30px;"></i>
                        </div>
                        <div class="features-caption">
                            <h3>Email</h3>
                            <p>contact@rockhammer.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area black-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- Footer Menu -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-footer-caption mb-50 text-center">
                            <!-- logo -->
                           
                            <!-- Menu -->
                            <!-- Header Start -->
                            <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                <div class="main-header main-header2">
                                    <div class="menu-wrapper menu-wrapper2">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2 text-center">
                                            <nav>
                                                <ul>
                                                <li><a href="index2.php">Home</a></li>
                                    <li><a href="about2.php">About</a></li>
                                    <li><a href="courses2.php">Courses</a></li>
                                    <li><a href="pricing2.php">Pricing</a></li>
                                    <li><a href="gallery2.php">Gallery</a></li>
                                                    <li><a href="contact2.php">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <!-- Header End -->
                            <!-- social -->
                            <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="http://wa.me/9762204444"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Rock Hammer
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer End-->
  </footer>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>