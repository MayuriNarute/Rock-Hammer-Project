<?php
include('connection.php');
?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register | Rock Hammer </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons.jpg">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <h6>RockHammer</h6>
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
                            <a href="#"><img src="assets/img/logo/indexlogo.png" style="width:150px; height:150px;"/></a>
                        </div>
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="pricing.php">Pricing</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="#">Get Started</a>
                                    <ul class="submenu">
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="register.php">Register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>          
                    <!-- Header-btn -->
                    <div class="header-btns d-none d-lg-block f-right">
                    <a href="contact.php" style="font-size:15px; margin:0; padding:26px;"class="btn">Contact Us</a>
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

<?php


	// Account details
	
?>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Register</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
     <?php
    if (isset($_REQUEST['register'])) {
       
        //escapes special characters in a string
        $name    = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($db, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($db, $email);
        $password = stripslashes($_REQUEST['pass']);
        $password = mysqli_real_escape_string($db, $password);
        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($db, $phone);
        $age = stripslashes($_REQUEST['age']);
        $age = mysqli_real_escape_string($db, $age);
        $otp = rand(10000, 99999);   //Generate OTP
    
        //  require __DIR__ . 'twilio-php-main/src/Twilio/autoload.php';

        
        
        // // Your Twilio account credentials
        // $accountSid = 'AC5ef8f4ee6121891814af23d2f989d001';
        // $authToken = 'f61277ae66d24647513029296b4daddd';
        // $twilioPhoneNumber = '+14705179387';
        
        // // Recipient's phone number and the message you want to send
        // $recipientPhoneNumber ='+917558232254'; // Replace with the recipient's phone number
        // $message = 'Hello, this is a test message from Rock Hammer!';
        
        // try {
        //     $client = new Twilio\Rest\Client($accountSid, $authToken);
        
        //     $client->messages->create(
        //         // The number you'd like to send the message to
        //         $recipientPhoneNumber,
        //         [
        //             // A Twilio phone number you purchased at https://console.twilio.com
        //             'from' => $twilioPhoneNumber,
        //             // The body of the text message you'd like to send
        //             'body' => $message
        //         ]
        //     );
        
            // 
            // <script type="text/javascript">
            //     alert('success');
            //   window.location = "login.php";
            // </script>
         
        // } catch (Exception $e) {
        //     echo "Error sending SMS: " . $e->getMessage();
        // }
        $checkpass="SELECT * from users where Password='$password'";
        $result2=mysqli_query($db,$checkpass);
        $count2=mysqli_num_rows($result2);

        $checkuser="SELECT * from users where Email='$email' or Phone='$phone'";
        $result1=mysqli_query($db,$checkuser);
        $count=mysqli_num_rows($result1);
        if($count>0){
            ?>
            <script type="text/javascript">
               window.location = "register.php?error=User Already Exists!";
             </script><?php
        }

        else if($count2>0){
            ?>
            <script type="text/javascript">
               window.location = "register.php?error=This password is already taken. Please choose a different one.";
             </script><?php
        }
        else{
            $query    = "INSERT INTO users(Name, Age, Email,Password, Phone) VALUES ('" . $name . "', '" . $age . "', '" . $email . "', '" . $password . "', '" . $phone . "')";
            $result   = mysqli_query($db, $query);
            if ($result) {
            
            ?>
                <script type="text/javascript">
                window.location = "register.php?success=Your account has been created successfully! Login Now";
                </script><?php
            } else {
                ?>
            <script type="text/javascript">
                window.location = "register.php?error=Something went wrong!";
                </script><?php
            }
        } 
    } else {
 ?> 
    <section class="contact-section">
        <div class="container">
                
                    <h2 class="contact-title">Create Your Account</h2>
                
                    <form class="form-contact contact_form" method="post" name="form1"  >
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <?php if(isset($_GET['success'])){ ?>
                                        <div class="alert alert-success" role="alert">
                                        <?php echo $_GET['success']; ?>
                                        </div>
                                        <?php } ?>
                                        <?php if(isset($_GET['error'])){ ?>
                                        <div class="alert alert-danger" role="alert">
                                        <?php echo $_GET['error']; ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                            </div>
                        <div>
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" pattern="[A-Za-z '-]+" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name"  
                                    oninvalid="this.setCustomValidity('Please enter your name')" oninput="this.setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control valid" name="age" id="age" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your age'" placeholder="Enter your age" min="14" max="45" required 
                                    oninvalid="this.setCustomValidity('Age must be in between 14 and 45')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required 
                                    oninvalid="this.setCustomValidity('Please enter valid email address')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-md-8    ">
                                <div class="form-group">
                                    <input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your mobile number'" placeholder="Enter your mobile number" pattern="[0-9]{10}" maxlength="10" 
                                    oninvalid="this.setCustomValidity('Please enter a valid 10-digit mobile number.')"
                                    oninput="this.setCustomValidity('')" required>
                                </div>
                            </div> 
                            <div class="col-md-8    ">
                                <div class="form-group">
                                    <input class="form-control valid" name="pass" id="pass" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" placeholder="Enter password" 
                                    oninvalid="this.setCustomValidity('Your password should contain at least one Upperacase letter,one lowercase letter, one digit & one special character & it should be minimum 8 characters long')" 
                                    oninput="this.setCustomValidity('')" required>
                                    <span style="cursor:pointer; position: absolute;
                                        top: 30%;
                                        right: 40px;
                                        transform: translateY(-50%);" >
                                        <i id="toggler" class="fas fa-eye" id="password-icon"></i>
                                    </span>
                                </div>
                            </div>      
                            
                        </div>
                        <div class="form-group mt-3">
                        <p class="mt-3">Already have an account? <a style="color: #10285d;"href="login.php"><b>Login Now</b></a></p>

                            <button type="submit" data-toggle="modal" data-target="#exampleModal" name="register"  class="button button-contactForm boxed-btn">Create Account</button><br>
                        </div>
                    </form>             
        </div>
        <?php
        }
?>
    </section>


<script>
  var password = document.getElementById('pass');
    var toggler = document.getElementById('toggler');
    showHidePassword = () => {
    if (password.type == 'password') {
    password.setAttribute('type', 'text');
    toggler.classList.add('fa-eye-slash');
    } else {
    toggler.classList.remove('fa-eye-slash');
    password.setAttribute('type', 'password');
    }
    };
    toggler.addEventListener('click', showHidePassword);
</script>
    <!-- Contact Area End -->
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
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="courses.html">Courses</a></li>
                                                    <li><a href="pricing.php">Pricing</a></li>
                                                    <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="contact.php">Contact</a></li>
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

<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

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