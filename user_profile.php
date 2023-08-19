<?php
include('connection.php');
session_start();
?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rock Hammer </title>
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
                        <li><a href="index2.php">Home</a></li>
                                    <li><a href="about2.php">About</a></li>
                                    <li><a href="courses2.php">Courses</a></li>
                                    <li><a href="pricing2.php">Pricing</a></li>
                                    <li><a href="gallery2.php">Gallery</a></li>
                                    <li><a href="#">Profile</a>
                                        <ul class="submenu">
                                        <?php 
                                            $users=$_SESSION['dataset']; 

                                        ?>
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
                            <h2>Your Account</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
     <?php
    if (isset($_REQUEST['edit_profile'])) {
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($db, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($db, $email);
        $password = stripslashes($_REQUEST['pass']);
        $password = mysqli_real_escape_string($db, $password);
        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($db, $phone);
        $age = stripslashes($_REQUEST['age']);
        $age = mysqli_real_escape_string($db, $age);
        $sql = "UPDATE users SET Name='$name',  Age='$age',Email='$email',Phone='$phone' WHERE ID=".$users['0'];        
        $result   = mysqli_query($db, $sql);
        if ($result) {

            ?>
            <script type="text/javascript">
              window.location = "user_profile.php?success=Profile has been updated successfully!";
            </script><?php
        } else {
            ?>
            <script type="text/javascript">
              window.location = "user_profile.php?error=Something went wrong!";
            </script><?php
        }
    } else {
 ?> 
 <?php 
$sql2 = "SELECT * from users WHERE ID=".$users['0']; 
$result2=mysqli_query($db,$sql2);
$res=mysqli_fetch_assoc($result2);

$user_data=array($res['ID'],$res['Name'],$res['Age'],$res['Email'],$res['Password'],$res['Phone']);
$_SESSION['data']=$user_data;
$_SESSION['dataset']=$user_data;
?>
<?php
 if(isset($_REQUEST['change_password'])){

        $op = $_POST['oldpass'];
    	$np = $_POST['newpass'];
        $c_np=$_POST['confpass'];
        
        $sql3 = "SELECT Password from users WHERE ID=".$users['0']; 
        $result3 = mysqli_query($db, $sql3);
        $res3=mysqli_fetch_assoc($result3);
        if(mysqli_num_rows($result3) === 1 && $op===$res3['Password'] ){

        	$sql_2 = "UPDATE users
        	          SET Password='$np'
        	          WHERE ID=".$users['0'];
        	mysqli_query($db, $sql_2);
        	?>
            <script type="text/javascript">
              window.location = "user_profile.php?change=Your Password has been changed successfully!";
            </script><?php

        }else {
        	?>
            <script type="text/javascript">
              window.location = "user_profile.php?errors=Something went wrong!";
            </script><?php
        }
 }
?>
    <section class="contact-section">
        <div class="container">
                
                    <h2 class="contact-title">Your Account</h2>
                
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
                                        <?php if(isset($_GET['change'])){ ?>
                                        <div class="alert alert-success" role="alert">
                                        <?php echo $_GET['change']; ?>
                                        </div>
                                        <?php } ?>
                                        <?php if(isset($_GET['errors'])){ ?>
                                        <div class="alert alert-danger" role="alert">
                                        <?php echo $_GET['errors']; ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                            </div>
                        <div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" pattern="[A-Za-z '-]+" value="<?php echo $user_data['1']; ?>"  
                                    oninvalid="this.setCustomValidity('Please enter your name')" oninput="this.setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control valid" name="age" id="age" type="number"  value="<?php echo $user_data['2']; ?>"  min="14" max="45" required 
                                    oninvalid="this.setCustomValidity('Age must be in between 14 and 45')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"  value="<?php echo $user_data['3']; ?>"  required 
                                    oninvalid="this.setCustomValidity('Please enter valid email address')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-md-8    ">
                                <div class="form-group">
                                    <input class="form-control valid" name="phone" id="phone" type="text"  value="<?php echo $user_data['5']; ?>"  pattern="[0-9]{10}" maxlength="10" 
                                    oninvalid="this.setCustomValidity('Please enter a valid 10-digit mobile number.')"
                                    oninput="this.setCustomValidity('')" required>
                                </div>
                            </div> 
                            <div class="col-md-8    ">
                                <div class="form-group">
                                    <input class="form-control valid" name="pass" id="pass" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$"
                                    value="<?php echo $user_data['4']; ?>"  
                                    oninvalid="this.setCustomValidity('Your password should contain at least one Upperacase letter,one lowercase letter, one digit & one special character & it should be minimum 8 characters long')" oninput="this.setCustomValidity('')" readonly>
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
                        <p  class="mt-3">Click here to update Password<a style="color: #10285d; font-size:18px;"href="#" data-toggle="modal" data-target="#form" data-animation="fadeInLeft" data-delay="0.5s">&nbsp;<b>Change Password</b></a></p>

                            <button type="submit" name="edit_profile"  class="button button-contactForm boxed-btn">Update Profile</button><br>
                        </div>
                    </form>             
        </div>
   
    </section>
    <?php
        }
?>

    
    <div style="width: 100%;height: 100%;"class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 style="font-size:20px;"class="contact-title"><center>Change Password</center></h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="form-contact contact_form" method="post" id="passwordform">
        <div class="modal-body">
                         
        <div class="form-group">
            <label for="new_pass">Old Password</label>
            <input class="form-control valid" name="oldpass" id="oldpass" type="text" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$"
            onkeyup="validate_oldpassword()"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" placeholder="Enter your Old Password" 
                                    oninvalid="this.setCustomValidity('Your password should contain at least one Upperacase letter,one lowercase letter, one digit & one special character & it should be minimum 8 characters long')" oninput="this.setCustomValidity('')" required>
          </div>
          <div class="form-group">
            <label for="new_pass">New Password</label>
            <input class="form-control valid" name="newpass" id="newpass" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" placeholder="Enter your New Password" 
                                    oninvalid="this.setCustomValidity('Your password should contain at least one Upperacase letter,one lowercase letter, one digit & one special character & it should be minimum 8 characters long')" oninput="this.setCustomValidity('')" required>
          </div>
          <div class="form-group">
            <label for="confirm_pass">Confirm Password</label>
            <input class="form-control valid" name="confpass" id="confpass" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$"
                                    onkeyup="validate_password()" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" placeholder="Confirm your New Password" 
                                    oninvalid="this.setCustomValidity('Your password should contain at least one Upperacase letter,one lowercase letter, one digit & one special character & it should be minimum 8 characters long')" oninput="this.setCustomValidity('')" required>
          </div>
          
          <span style="margin-left:12px;font-size:18px;" id="errorText"></span>
          
        </div>

        <div class="modal-footer justify-content-center">
        <button type="button" class="button button-contactForm boxed-btn" data-dismiss="modal">Cancel</button>

          <button type="submit" name="change_password" id="create" class="button button-contactForm boxed-btn">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>



<script>

      
  //show & hide password code
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
<script>

function validate_oldpassword() {
    var pass1=document.getElementById('pass').value;
    var oldpass=document.getElementById('oldpass').value;
    if(pass1 != oldpass){
    document.getElementById('errorText').style.color = 'red';
     document.getElementById('errorText').innerHTML
         = '☒ Incorrect Old Password';
     document.getElementById('create').disabled = true;
     document.getElementById('create').style.opacity = (0.4);
    }else{
        document.getElementById('errorText').innerHTML = '';
         document.getElementById('create').disabled = false;
        document.getElementById('create').style.opacity = (1);
    }
}
       //error message at the time of change password
function validate_password() {
       
        var pass = document.getElementById('newpass').value;
        var confirm_pass = document.getElementById('confpass').value;

        if (pass != confirm_pass) {
            document.getElementById('errorText').style.color = 'red';
            document.getElementById('errorText').innerHTML
                = '☒ Passwords do not match';
            document.getElementById('create').disabled = true;
            document.getElementById('create').style.opacity = (0.4);
        
        }else {
            document.getElementById('errorText').style.color = 'green';
            document.getElementById('errorText').innerHTML =
                '🗹 Password Matched';
            document.getElementById('create').disabled = false;
            document.getElementById('create').style.opacity = (1);
        }
}
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
                                                <li><a href="index2.php">Home</a></li>
                                                    <li><a href="about2.html">About</a></li>
                                                    <li><a href="courses2.html">Courses</a></li>
                                                    <li><a href="pricing2.php">Pricing</a></li>
                                                    <li><a href="gallery2.html">Gallery</a></li>
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