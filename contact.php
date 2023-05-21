<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
  <?php
        
         include 'include/dbconn.php';

         $sql="select * from `user`";
         $result=mysqli_query($con,$sql);
         if($result){
            while($row=mysqli_fetch_assoc($result)){
            $User_Id=$row['User_Id'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $phoneNo=$row['phoneNo'];
            $email=$row['email'];
            $message=$row['message'];
           
           }
         }
  ?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Sapid a Restaurant Category Bootstrap Responsive web Template|Contact :: w3layouts</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Sapid Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
      addEventListener("load", function () {
      	setTimeout(hideURLbar, 0);
      }, false);
      
      function hideURLbar() {
      	window.scrollTo(0, 1);
      }
    </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  </head>
  <body>
    <!--headder-->
    <div class="header-outs inner_page-banner " id="home">
      <div class="headder-top">
        <!-- nav -->
        <nav >
          <div id="logo">
            <h1><a href="index.php">Sapid</a></h1>
          </div>
          <label for="drop" class="toggle">Menu</label>
          <input type="checkbox" id="drop">
          <ul class="menu mt-2">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="about.php">About</a></li>
            <li><a href="service.php">Services</a></li>
            <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
              <!-- First Tier Drop Down -->
              <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
              </label>
              <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
              <input type="checkbox" id="drop-2">
              <ul>
                <li><a href="gallery.php" class="drop-text">Gallery</a></li>
                <li><a href="menu.php" class="drop-text">Menu</a></li>
                <li><a href="recipe.php" class="drop-text">Recipes</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </nav>
        <!-- //nav -->
      </div>
    </div>
    <!-- //Navigation -->
    <!--//headder-->
    <!-- short -->
    <div class="using-border py-3">
      <div class="inner_breadcrumb  ml-4">
        <ul class="short_ls">
          <li>
            <a href="index.php">Home</a>
            <span>/ /</span>
          </li>
          <li>Contact</li>
        </ul>
      </div>
    </div>
    <!-- //short-->
    <!--contact -->
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h6 class="text-center top-title mb-2">Get in Touch </h6>
        <h3 class="text-center title mb-3">Contact Us</h3>
        <div class="title-wls-text text-center pt-lg-3 pt-2 mb-lg-5 mb-md-4 mb-sm-4 mb-3">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum </p>
        </div>
        <div class="row">
          <!--//contact-map -->
          <div class="col-lg-6">
            <div class="address_mail_footer_grids ">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
            </div>
          </div>
          <!--contact-map -->
          <div class="col-lg-6 contact-form-txt">
            <form action="userInfo.php" method="post">
              <div class="w3pvt-wls-contact-mid">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
                    <input type="text" class="form-control" name='fname'  placeholder="First Name" required="">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
                    <input type="text" class="form-control"  name='lname' placeholder="Last Name" required="">
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
                    <input type="email" class="form-control"  name="email" placeholder="Email" required="">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
                    <input type="text" class="form-control"  name='phone' placeholder="Phone" required=""> 
                  </div>
                </div>
                <div class="form-group contact-forms">
                  <textarea class="form-control" placeholder="Message" name='message' rows="3" required=""></textarea>
                </div>
                <button type="submit" name="submit" class="btn sent-butnn">Send</button>
                
                <button class="btn btn-info " name="update" ><a href="login/index.php"class="text-light">UPDATE</a></button>

              </div>
            </form>
          </div>
        </div>
        <div class="row mt-lg-4 mt-3">
          <div class="contact-list-grid col-lg-3 col-md-6 col-sm-6">
            <h4>Branch 1</h4>
            <p class="pt-2">Melbourne St,South </p>
            <p>Birbane 4101 Austraila</p>
          </div>
          <div class="contact-list-grid col-lg-3 col-md-6 col-sm-6">
            <h4>Branch 2</h4>
            <p class="pt-2">Melbourne St,South </p>
            <p>Birbane 4101 Austraila</p>
          </div>
          <div class="contact-list-grid col-lg-3 col-md-6 col-sm-6">
            <h4>Phone</h4>
            <p class="pt-2">(000)1122333</p>
            <p>+(000) 123 4565 32</p>
          </div>
          <div class="contact-list-grid col-lg-3 col-md-6 col-sm-6">
            <h4>Email</h4>
            <p class="pt-2"><a href="mailto:info@example.com">info@example1.com</a> 
            </p>
            <p class="pt-2"><a href="mailto:info@example.com">info@example.com</a> 
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--//contact  -->
    <!-- footer -->
    <footer class="py-lg-3 py-md-2 py-sm-3 py-2">
      <div class="container py-lg-4 py-md-4 py-sm-3 py-3">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 footer-bottom-txt">
            <h2><a href="index.php">Sapid</a></h2>
            <p class="pt-lg-4 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            </p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 footer-bottom-txt">
            <h4>Our Timings</h4>
            <div class="mt-3 footer-hours-list">
              <ul>
                <li class="d-flex">Monday-Friday<span class="time-footer ml-auto"> 9:30-18:30</span></li>
                <li class="d-flex">Saturday <span class="time-footer ml-auto">10:30-14:30</span></li>
                <li class="d-flex">Sunday   <span class="time-footer ml-auto">     closed</span></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 footer-bottom-txt">
            <h4>Our Address</h4>
            <div class="mt-3 footer-top">
              <p><span>Address</span> :Melbourne St,South <br>Birbane 4101 Austraila.</p>
              <p class="pt-2"> <span> Phone</span> :+(000) 123 4565 32</p>
              <p class="pt-2"><span>Email</span>   :<a href="mailto:info@example.com">info@example1.com</a> 
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 footer-bottom-txt">
            <h4>Social Icons</h4>
            <div class="social-icons mt-3">
              <ul>
                <li><a href="#"><span class="fa fa-facebook mr-lg-3 mr-2"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter mr-lg-3 mr-2"></span></a></li>
                <li><a href="#"><span class="fa fa-rss mr-lg-3 mr-2"></span></a></li>
                <li><a href="#"><span class="fa fa-envelope mr-lg-3 mr-2"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram mr-lg-3 mr-2"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--//footer -->
    <!-- footer-copy-write -->
    <div class="footer-copy-write py-lg-3 py-md-2 py-sm-3 py-2">
      <div class="container pb-lg-3 pb-2">
        <div class="bottem-txt-footer text-center pt-md-4 pt-3">
          <p> 
            © 2019 Sapid. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
          </p>
        </div>
        <!-- move icon -->
        <div class="text-center">
          <a href="#home" class="move-top text-center mt-3"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
        </div>
        <!--//move icon -->
      </div>
    </div>
    <!--//footer-copy-write -->
  </body>
</html>