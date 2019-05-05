<?php include('server.php'); ?> 
<!DOCTYPE html>
<html>
    <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>HOHO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bdy">
    <!--navbaar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="row">
          <div class="site-logo">
          <a href="index.php" class="brand">HOHO</a>
              <a><p>Hop On Hop Off Sightseeing Service</p></a>
        </div>

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#about">About Us</a></li>
            <li><a href="index.php#features">Attractions</a></li>
            <li><a href="index.php#packages">Packages</a></li>
            <li><a href="index.php#contact">Contact US</a></li>
          
            <li><?php if(isset($_SESSION["email"])); ?>
            <p>Welcome <strong><?php echo $_SESSION["email"]; ?></strong></p>
                <p><a href="index.php?logout='1'">logout</a></p></li>
            </ul>
        </div>
        <!-- /.Navbar-collapse -->
          
      </div>
    </div>
        </nav>
    
    <div class="modal-dialog">
		<div class="modal-content"><br>
            <a href="index.php" class=" ">« Back</a>
			<hr />
			<div class="modal-body">   
    <center><h2 class="text-center"> You have successfully booked. Thank You!!!</h2>
    <img src="images/ok.png" width=100 height=100>
    <p> You have to pay at HOHO Centre on the day of your tour. </p>
        <?php
            if(isset($_REQUEST['logout']))
            {
                header('location:index.php');
            }
        ?>
    
        <h2> COME AND EXPLORE DELHI!!!</h2>
        </center>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>