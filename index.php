<?php
  include("auth.php"); 
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Linomtha</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/creative.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login-modal.css" />

  </head>

  <body id="page-top">
    <?php include 'nav.php' ?>
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>GREAT MOBILE HIRE DEALS</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Register to become an affiliate partner and profit from strong, flexible lean supply chain</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Reserve rental item Now!</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">INCREASE YOUR SUPPLIER VISIBILITY TODAY!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Join the leading hiring services marketplace,and realize an average increase in rental sales.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#contact">Book Now</a>
            <?php if(!isset($_SESSION["username"])) {  ?>
		        <a class="btn btn-light btn-xl js-scroll-trigger" onclick="document.getElementById('id01').style.display='block'">Login</a>
            <a class="btn btn-light btn-xl js-scroll-trigger" onclick="document.getElementById('id02').style.display='block'">Register</a>
            <?php } else {?>
              <a class="btn btn-light btn-xl js-scroll-trigger" href="view.php">Profile</a>
              <a class="btn btn-light btn-xl js-scroll-trigger" href="logout.php">Logout</a>
            <?php } ?>
          </div>
        </div>
      </div>
	  
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Special Low Rates</h3>
              <p class="text-muted mb-0">We have a wide range of top quality and modern mobile equipments for all kinds of occasions. e.g. weddings,out-door events, funerals and many more at best prices.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Online Bookings</h3>
              <p class="text-muted mb-0">We afford you with the convenience of browsing and organizing your entire event hire needs anywhere,anytime.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Customer Support</h3>
              <p class="text-muted mb-0">Our dedicated customer services team are always on standby to attend to all your needs.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Delivery</h3>
              <p class="text-muted mb-0">We deliver on time</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Mobile Chiller
                  </div>
                  <div class="project-name">
                    R1,800.00 A Day
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Mobile Toilet
                  </div>
                  <div class="project-name">
                    R2,500.00 A Day
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Stop waiting and start making your booking.</h2>
        <a class="btn btn-light btn-xl sr-button" href="#contact">Get Started</a>
      </div>
    </section>


    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Please fill in the contact form below to make you booking and we will get back to you</p>
          </div>
        </div>
    </section>
    <!-- Contac form -->
    <?php include('form_process.php'); ?>
	 <header class="jumbotron hero-spacer" id="contact-section">
            <h1> <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contact" novalidate="" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input aria-invalid="false" class="form-control" value="<?= $name ?>" placeholder="Your Name *" id="name" name="name" required="" data-validation-required-message="Please enter your name." type="text">
                                    <p class="help-block text-danger error"><?= $name_error ?></p>
                                </div>
                                <div class="form-group">
                                    <input aria-invalid="false" class="form-control" value="<?= $email ?>"  placeholder="Your Email *" id="email" name="email" required="" data-validation-required-message="Please enter your email address." type="email">
                                    <p class="help-block text-danger error"><?= $email_error ?></p>
                                </div>
                                <div class="form-group">
                                    <input aria-invalid="false" class="form-control" value="<?= $phone ?>" placeholder="Your Phone *" id="phone" name="phone" required="" data-validation-required-message="Please enter your phone number." type="tel">
                                    <p class="help-block text-danger error"><?= $phone_error ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea aria-invalid="false" class="form-control" value="<?= $message ?>" placeholder="Leave comment *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger error"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-left">
                                <div id="success"><?= $success ?></div>
                                <button class="btn btn-xl" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send Message</button>
                            </div>
                        </div>
                    </form>
            </p>
        </header>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

<!-- Login Modal -->

<div id="id01" class="modal">
  <form class="modal-content animate" id="loginModal" action="" method="post" name="login" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input class="form-control" type="text" name="username"  id="username" placeholder="Username"  required />
      <label for="psw"><b>Password</b></label>
      <input class="form-control" type="password" name="password"  id="password" placeholder="Password" required />  
      <button class="btn" type="button" name="login_button" id="login_button" >Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div> 

<!-- Resgister Modal -->

<div id="id02" class="modal">
  
  <form class="modal-content animate" id="registerModal" action="" method="post" name="register" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
    <div class="form-group">
      <input class="form-control" type="text" name="username" id="reg-username" placeholder="Username"  required />
      </div>
      <div class="form-group">
          <input class="form-control" type="email" id="reg-email" name="email" placeholder="Email" required />
      </div>
    <div class="form-group">
        <input class="form-control" type="text" id="reg-age" name="age" placeholder="Age" required />
    </div>
    <div class="form-group">
        <input class="form-control" type="password"  id="reg-password"  name="password" placeholder="Password" required />
    </div>
      <button class="btn" type="button" name="register_button" id="register_button" >Register</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div> 
 
 <script src=js/login.js></script>  
 <script src=js/register.js></script>  
</body>

</html>
