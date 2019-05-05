<?php include('server1.php'); ?>
<!DOCTYPE html>
<html lang="en">

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

<body >
    <!--navbaar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="row">
          <div class="site-logo">
          <a href="index.html" class="brand">HOHO</a>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html#about">About Us</a></li>
            <li><a href="index.html#attractions">Attractions</a></li>
            <li><a href="index.html#packages">Packages</a></li>
            <li><a href="index.html#contact">Contact US</a></li>
          </ul>
        </div>
        <!-- /.Navbar-collapse -->
          
      </div>
    </div>
  </nav>
	<div class="modal-dialog" id="modal">
		<div class="modal-content">
             <a href="index.php" class=" ">« Back</a>
			<div class="modal-heading">
				<h2 class="text-center">LogIn</h2>
			</div>
			<hr />
			<div class="modal-body">
				<form method="post" action="login.php" role="form">
					<!-- displaying error msg -->
                    <center>
                    <?php include('error.php'); ?>
                    </center>
                    <form action="/action_page.php" method="post">
                    <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
                            <input type="text" class="form-control" placeholder="Username" name="email" required/>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" class="form-control" placeholder="Password" name="password" required/>

						</div>

					</div>

					<div class="form-group text-center">
						<a href="signup.php" class="btn btn-link">SignUp</a>
                        
                        <button type="submit" class="btn btn-success btn-lg" name="login">LogIn</button>
						<a href="#" class="btn btn-link">Forgot Password?</a>
						
					</div>

				</form>
			</div>
		</div>
	</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
    