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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                        <!-- Logo -->
                        <div class="logo">
                            <a href="#"><img src="../assets/img/logo/indexlogo.png" style="width:150px; height:150px;"/></a>
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
                                            <li><a href="../logout.php">Log Out</a></li>
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
                            <h2>Courses</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Team -->
    <section class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2 >What We Offer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="../assets/img/gallery/team1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="courses2.php">Body Building</a></h5>
                            <p>Our expert trainers will guide you through intensive workouts. Join Our Bodybuilding Course Today! </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="../assets/img/gallery/team2.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="courses2.php">Muscle Gain</a></h5>
                            <p>Join our cutting-edge muscle gain course and sculpt the physique you've always dreamed of.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="../assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="courses2.php">Weight Loss</a></h5>
                            <p>Join Our Weight Loss Course Today! Unleash the Best Version of Yourself with Expert Guidance. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!-- Traning categories Start -->
    <section class="traning-categories black-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="../assets/img/gallery/cat1.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>Personal training</h3>
                                    <p>"Unlock Your Potential with Personalized Training! <br>Our expert trainers will tailor a fitness plan just for you, 
                                        helping you reach your goals faster and safer.<br>
                                    </p>
                                    <a href="courses.html" class="border-btn">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="../assets/img/gallery/cat2.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>Group training</h3>
                                    <p> Experience a supportive community while our expert trainers guide you <br>through exhilarating workouts designed to ignite your passion for fitness. <br>Together, we thrive, and together, we achieve greatness.</p>
                                    <a href="../courses.html" class="btn">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Traning categories End-->
    <!--? video_start -->
    <div class="video-area section-bg2 d-flex align-items-center"  data-background="../assets/img/gallery/video-bg.png">
        <div class="container">
            <div class="video-wrap position-relative">
                <div class="video-icon" >
                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- video_end -->
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
                            <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s">
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

<script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="../assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/animated.headline.js"></script>
<script src="../assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="../assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/jquery.countdown.min.js"></script>
<script src="../assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="../assets/js/contact.js"></script>
<script src="../assets/js/jquery.form.js"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/mail-script.js"></script>
<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html>