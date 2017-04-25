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
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HoosierBazaar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="eCommerceAssets/styles/eCommerceStyle.css">
      <link rel="stylesheet" href="css/bootstrap.css">

    <script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <style type="text/css">
        a{
          color: #EEEDEB;
        }
        .nav-right{
            margin-right: 20px;
        }

        body, #headerLinks, #logo{
            color: #EEEDEB;
            background-color: #990000;
        }
    </style>
  </head>
  <body>
    <div id="mainWrapper">
      <header>
        <div id="logo" onclick="location.href('home.php','_blank')">
          HoosierBazaar </div>
          <div id="headerLinks">
              <a href="about.php">About Us</a>
              <a href="contact.php">Contact Us</a>
      <?php
      if(isset($name))
      {
          ?>
          <a href="#">My Bookmarks</a>
          <a href="login_page/logout.php?redirect_url=<?php echo $_SERVER['PHP_SELF']; ?>">Logout</a>
          <a class="nav-right" href="#">Welcome <?php echo $name; ?>!</a>
          <?php
      }
      else
      {
          ?>
          <a class="nav-right" href="login_page/login.html" title="Login/Register">Login/Register</a>
          <?php
      } ?>
          </div>
      </header>
      <div id="content">
        <section class="sidebar">
          <div id="menubar">
            <nav class="menu size-menu">
              <h2>Size</h2>
              <hr>
              <ul>
                  <li><a href="#" class="size-filter" data-custom-value="S">Small</a></li>
                  <li><a href="#" class="size-filter" data-custom-value="M">Medium</a></li>
                  <li><a href="#" class="size-filter" data-custom-value="L">Large</a></li>
              </ul>
            </nav>
            <nav class="menu brand-menu">
              <h2>Brand</h2>
              <hr>
              <ul>
                <li><a href="#" class="brand-filter" data-custom-value="Columbia">Columbia</a></li>
                <li><a href="#" class="brand-filter" data-custom-value="Adidas">Adidas</a></li>
                <li><a href="#" class="brand-filter" data-custom-value="Antigua">Antigua</a></li>
              </ul>
            </nav>
            <nav class="menu store-menu">
              <h2>Store</h2>
              <hr>
              <ul>
                  <li><a href="#" class="store-filter" data-custom-value="TIS Bookstore">TIS Bookstore</a></li>
                  <li><a href="#" class="store-filter" data-custom-value="College Mall">College Mall</a></li>
                  <li><a href="#" class="store-filter" data-custom-value="iuvshop">iuvshop</a></li>
              </ul>
            </nav>
          </div>
            <button type="button" id="searchBtn" class="btn btn-primary col-lg-12">Search</button>
        </section>
        <section id="mainCntnt" class="mainContent">
        </section>
      </div>
    </div>
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Copyright © HoosierBazaar.com All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
  </body>
</html>
