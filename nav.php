<?php 
 require('db.php');
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
<div class="container">
  <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img-responsive" src="img/logo.png"></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#portfolio">Items</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
      <?php 
           if(!isset($_SESSION["username"])) 
           {
       ?>
          <a class="nav-link js-scroll-trigger" onclick="document.getElementById('id01').style.display='block'" >Login</a>
        <?php } 
          else {
        ?>
             <a class="nav-link js-scroll-trigger" name="logout" id="logout" data-toggle="modal" href="logout.php">Logout</a>
        <?php }?>
      </li>
    </ul>
  </div>
</div>
</nav>
