<?php
session_start();

$cookie_name = 'name';
if(isset($_COOKIE[$cookie_name])) {
    $name = $_COOKIE[$cookie_name];
}

if(isset($_COOKIE['role'])) {
    $role = $_COOKIE['role'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- Customized CSS -->
<link rel="stylesheet" href="css/contact.css">

<style type="text/css">
a{
	color: #EEEDEB;
}
</style>
</head>


<body style="background-color: #990000; color: #EEEDEB">

<nav>
  <div class="container"> 
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="home.php">HoosierBazaar</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="about.php">About Us</a> </li>
        <li><a href="contact.php">Contact Us<span class="sr-only">(current)</span></a> </li>
          <?php
          if(isset($name))
          {
              ?>
              <li><a href="#">My Bookmarks</a></li>
              <?php
          }
          ?>
      </ul>
      <ul class="nav navbar-nav navbar-right hidden-sm">
          <?php
          if(isset($name))
          {
              ?>
              <li><a href="login_page/logout.php?redirect_url=<?php echo $_SERVER['PHP_SELF']; ?>">Logout</a></li>
              <li><a href="#">Welcome <?php echo $name; ?>!</a></li>
              <?php
          }
          else {
              ?>
              <li><a href="login_page/login.html">Login / Register</a></li>
              <?php
          }
          ?>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>



<div class="container-fluid contact-body">
  <h1>
    Stop by and say Hi!  We love feedback!
  </h1>
  <div class="row">    
    <form class="form-horizontal" role="form" method="post" action="contact_page/contact.php">
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
      </div>
      <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          <! Will be used to display an alert to the user>
        </div>
      </div>
    </form>
    
  </div> 
</div>

 <br>



<footer class="text-center my-footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © HoosierBazaar.com All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>