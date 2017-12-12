<?php
session_start();
if(!isset($_SESSION['uid']) ){
   header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wei's Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://file.myfontastic.com/GrB9xuxQmbqKaaajF4NftS/icons.css" rel="stylesheet">
     <link href="http://ec2-54-193-13-150.us-west-1.compute.amazonaws.com/4320-project/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
      h1 {
    text-align: center;
          font-family: 'Oswald', sans-serif;
}

      p.Desc{
          text-align: center;
          font-family: 'Comfortaa', cursive;
      }

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
        text-align: center;
        bottom: 0;
        font-family: 'Comfortaa', cursive;
      padding: 25px;
    }
      #footer {
   position:absolute;
   bottom:0;
   width:100%;

   background:#6cf;
}


  </style>
</head>
<body>
<!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo">
          <a href="index.html"><img alt="logo" class="logo-nav" src="images/ow.jpg"></a>
        </div>
        <!--/.LOGO END-->

      </div>

      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a  href="index.html" >
              <span>Home</span>
            </a>
            <a  href="http://ec2-54-193-13-150.us-west-1.compute.amazonaws.com/4320-project/about.php" >
              <span>About</span>
            </a>
           <a  href="store.php" >
              <span>Online Store</span>
              </a>
            <a  href="contact.php" >
              <span>Contact</span>
            </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
      </div>
      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->
    <br><br><br><br>
    <div class="container">
  <h1 >My Orders</h1>
  <br>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Order #</th>
        <th>User name</th>
        <th>Order Date</th>
        <th>Order Total</th>
        <th>Order Status</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

    <br><br>
    <div id="footer">
    <footer class="container-fluid text-center">
  <p>Han Song & Wei Luo</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
    </div>

     <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>

    </body>
</html>
