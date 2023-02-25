<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Compiler Hero</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.10.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Compiler Hero</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="https://compilerheroaboutus.nicepage.io/?version=025c4527-4418-4934-b61b-fea1263cd125">About</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a class="nav-link scrollto" href="course.php">Courses</a></li>
          <li><a class="nav-link scrollto" href="logout.php"><?php echo "Welcome ". $_SESSION['username']?></a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>Tech World</strong></h3>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
    <div id="Compiler">
      <iframe
      frameBorder="0"
      height="450px"  
      src="https://onecompiler.com/embed/" 
      width="100%"
      ></iframe>
    </div>
  </section><!-- End Hero -->
<hr>

  <main id="main">

   <!-- ======= Course Section ========= -->

   <section id="course">
    <div class="section-title">
      <h2>Courses</h2>
   </div>
    <div class="featured_course_container">

      
      <div class="featured_course_video">
        <iframe  height="360" src="https://www.youtube.com/embed/videoseries?list=PLu0W_9lII9aiXlHcLx-mDH1Qul38wD3aR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>

      <div class="featured_course_content">
        <div class="small-heading gray">
          <span><i class="fa fa-circle yellow"></i></span>
          Welcome to Tech Course
       </div>
       <div class="featured_course_title"><h3>Getting started with c++ programming for Beginners</h3></div>
     <div class="featured_course_desc">Full Stack Development (FSD) is a software development process that includes both the front and back end. To that end, a Full Stack Developer may design and create the front end while simultaneously designing, developing, and debugging databases and the software’s backend. There are two significant components to full-stack application development. Development of the FrontEnd and BackEnd.</div>
<div class="featured_course_icons_container">
  <div class="icons_row">
    <div class="icon-heading">
      <span><i class="fa fa-check-circle"></i></span>
      fundamentals.
    </div>
    <div class="icon-heading">
      <span><i class="fa fa-check-circle blue"></i></span>
      OOP's Conecpt.
    </div>
  </div>
  <div class="icons_row">
    <div class="icon-heading">
      <span><i class="fa fa-check-circle blue"></i></span>
      functional programming.
    </div>
    <div class="icon-heading">
      <span><i class="fa fa-check-circle blue"></i></span>
      Game Projects.
    </div>
  </div>

</div>
    
    <button class="btn btn_blue">Get full course for free</button>
    
    </div>
    </div>

 
</div>


 </section>
     <!--====== courses setion end ====== -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
     
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <h3>Learn More <span>About Us</span></h3>
         
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            <strong>What is Compiler Hero?</strong><br>

             Compiler Hero is a platform that allows users to create compilers for any programming language. The compiler will take the input file, 
             parse and execute it, output the result and error messages, and then compile all source files in a given directory.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> We want to make the code you write as easy to understand as possible, so that you can focus on the fun of making your program run.

               </li>
              <li><i class="ri-check-double-line"></i> Compiler Hero provides a suite of features that help you avoid bugs and make sure your program is ready for release. </li>
              <li><i class="ri-check-double-line"></i>  Our goal is to make it easier for coders of all skill levels to use our service, so we've made it as simple as possible for users who don't have programming experience.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Compiler Hero is a free online compiler for several programming languages. We are dedicated to making it easier for coders, students, and anyone else to write their code.

              We believe that the time spent compiling your code is time wasted. Our mission is to help you avoid this by making a free online compiler that can be used by any developer.
            </p>
            <a href="https://compilerheroaboutus.nicepage.io/?version=db25a100-1c67-47d4-83db-594bdf2d50a3" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          </div>

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.2955140232352!2d75.96875111485159!3d26.862350683149344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db8be74c25e59%3A0x675325c0c46956fc!2sAnand%20International%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1674157839100!5m2!1sen!2sin"  style="border:0; width:100%; height:270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Near Kanota, Agra Rd<br>
                  Anand College of Enginnering<br>
                  Jaipur, Rajasthan 303012 <br><br></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>vanshajagarwal4567@gmail.com</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Compiler Hero</h3>
            <img class ="logo" src="assets\img\images.png ">
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://compilerheroaboutus.nicepage.io/?version=db25a100-1c67-47d4-83db-594bdf2d50a3">About us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
           
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Compiler Hero</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">Vanshaj</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>