
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOHO</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--navbar-->
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
            <li><a href="#about">About Us</a></li>
            <li><a href="#attractions">Attractions</a></li>
            <li><a href="#features">Packages</a></li>
            <li><a href="#contact">Contact US</a></li>
            
          </ul>
        </div>
        <!-- /.Navbar-collapse -->
          
      </div>
    </div>
  </nav>
    <!--login-->
    
  
    <!--home-->
    <div id="home">
    <div class="slider">
      <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators visible-xs carousel-indicators visible-lg">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
            <li data-target="#carousel-slider" data-slide-to="3"></li>
            <li data-target="#carousel-slider" data-slide-to="4"></li>
          </ol>
         
          <div class="carousel-inner" id="mycarousel">
            <div class="item active">
              <img src="images/1.jpg" class="img-responsive" alt="" >
            </div>
            <div class="item">
              <img src="images/copy2.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="images/3.jpg" class="img-responsive" alt="">
            </div>
              <div class="item">
              <img src="images/4.jpg" class="img-responsive" alt="">
            </div>
              <div class="item">
              <img src="images/5.jpg" class="img-responsive" alt="">
            </div>
             </div>
        <a class="left carousel-control" href="#carousel-slider" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
            </a>
          <a class="right carousel-control" href="#carousel-slider" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
          </a>
        </div>
        <!--/#carousel-slider-->
          <hr>
      </div>
      <!--/#about-slider-->
    </div>
  </div>
    <!--about-->
    <section id="about">
    <div class="container">
      <div class="center">
        <div class="col-md-6 col-md-offset-3">
            <center><h2>About Us</h2></center>
          <hr>
          <p class="lead">Delhi Sightseeing at your convenience. Choose among various packages and enjoy the tour of National Capital of India. </p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6 wow fadeInRight">
            <i class="fa fa-angle-down pull-down"></i>
          <img src="images/about.jpg" class="img-responsive"  />
         </div>
        <!--/.col-sm-6-->

        <div class="col-sm-6 wow fadeInDown">
          <div class="accordion">
              <h2>Why Choose Us?</h2>
          <hr>
            <div class="panel-group" id="accordion1">
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                      Comfort
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>

                <div id="collapseOne1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      
                      <div class="media-body">
                        <h4>Air Conditioned Buses</h4>
                        <p>We provide fully air conditioned buses with on board tour guide. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                     Convenience
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseTwo1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p> Seeing National Capital at your convenience. Choosing from various pick up spots and timings. </p>
                  </div>
                    
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                     Entertainment 
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>
                <div id="collapseThree1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Live commentary, Delhi's delicious street food and shopping from flea market.</p>
                  </div>
                </div>
              </div>
                
            </div>
            <!--/#accordion1-->
          </div>
        </div>

      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
    <!--attractions-->
      <section id="attractions">
    <div class="container">
      <div class="row">
        <div class="center">
          <div class="col-lg-12 col-xs-12">
            <h2>Attractions</h2>
            <hr>
          </div>
        </div>
          
        <!--<div class="col-md-3 wow fadeInLeft">-->
          <div class="col-lg-3 col-xs-12">
            <i class="fa fa-angle-down pull-down"></i>
              <a href="attrac.php">
                      <img border="0" src="images/a1.jpg" width="200" height="200">
                  </a>
              
          
              <h3>All </h3>
        </div>

        <!--<div class="col-md-3 wow fadeInUp">-->
            <div class="col-lg-3 col-xs-12">
            <i class="fa fa-angle-down pull-down"></i>
                <a href="museum.php">
          <img src="images/a8.jpg" width=200 height=200 border="0">
                </a>
                <h3>Museums</h3>
        </div>

        <!--<div class="col-md-3 wow fadeInRight">-->
            <div class="col-lg-3 col-xs-12">
            <i class="fa fa-angle-down pull-down"></i>
                <a href="monum.php">
          <img src="images/a4.jpg" width=200 height=200  border="0">
                </a>
                <h3>Monuments</h3>
          </div>
          
            <!--<div class="col-md-3 wow fadeInDown">-->
                <div class="col-lg-3 col-xs-12">
                <i class="fa fa-angle-down pull-down"></i>
                    <a href="leisure.php">
          <img src="images/a11.jpg" width=200 height=200 border="0">
                        </a>
                    <h3>Leisure</h3>
        </div>
      </div>
    </div>
    </section>
    <!--packages-->
      <section id="features">
    <div class="container">
      <div class="row">
        <div class="center">
          <div class="col-lg-12 col-xs-12">
            <h2>Packages</h2>
            <hr>
            <p class="lead">Choose from the packages provided according to your convenience to make the best of your trip.</p>
          </div>
        </div>
          
        <!--<div class="col-md-3 wow fadeInLeft">-->
          <div class="col-lg-3 col-xs-12">
            <i class="fa fa-angle-down pull-down"></i>
          <h3>One-day Tour</h3>
          <img src="images/1dy.jpg" width=200 height=200 alt="">
          <p>Use the pass for 1 day tour. See upto 8 places of your choice from the 20 places.</p>
            <a href= "packages.php"><button type="button" value="detail1">View Details</button> </a>
        </div>

        <!--<div class="col-md-3 wow fadeInUp">-->
            <div class="col-lg-3 col-xs-12">
            <i class="fa fa-angle-down pull-down"></i>
          <h3>Two-day Tour</h3>
          <img src="images/2dy.jpg" width=200 height=200 alt="">
          <p>Want to See All? Use the pass for any 2 days of your choice. Visit upto 20 *places. Plus enjoy shopping and eating at popular places.</p>
           <a href="packages.php"> <button type="button" value="detail2">View Details</button> </a>
        </div>

        <!--<div class="col-md-3 wow fadeInRight">-->
            <div class="col-lg-3 col-xs-12">
            <i class="fa fa-angle-down pull-down"></i>
          <h3>Wednesday Tour</h3>
          <img src="images/wd.jpg" width=200 height=200 alt="">
          <p>Have Only Wednesday for Sightseeing? Visit upto 8 *places. Visit places open on Monday. It will be a single bus conducted tour. Onboard Guide Commentary.</p>
           <a href="packages.php"> <button type="button" value="detail3">View Details</button></a>
          </div>
          
            <!--<div class="col-md-3 wow fadeInDown">-->
                <div class="col-lg-3 col-xs-12">
                <i class="fa fa-angle-down pull-down"></i>
          <h3>Group Tour</h3>
          <img src="images/gtr.jpg" width=200 height=200 alt="">
          <p>Got a large group? School and Corporate groups. Customized itinerary and fun activities and lots more. </p>
            <a href="packages.php">    <button type="button" value="detail4 ">View Details</button></a>
        </div>
      </div>
    </div>
  </section>
        
<section id="contact">
    <div class="contact-page">
      <div class="container">
        <div class="center">
          <center><h2>Find Us On</h2></center>
            <hr>
        </div>
        <div class="row contact-wrap">
          <div class="col-md-8 col-md-offset-2">
              <center>
            <span class=" pull-down">
                
                
                    <span class="hide" >Contact Us</span>    
                    
                        <a  href="https://www.facebook.com/hohodelhi/" >
                            <i class="fa fa-facebook" id="ss"></i>
                        </a>
                        &nbsp; &nbsp;

                        <a href="https://twitter.com/hohobusdelhi?lang=en" >
                            <i class="fa fa-twitter" id="ss"></i>
                        </a>
                        &nbsp; &nbsp;
                        <a href="https://www.instagram.com/hohobus/" >
                            <i class="fa fa-instagram" id="ss"></i>
                        </a>
                        &nbsp; &nbsp;
                             
                    </span>
              </center>
          </div>
          </div>
      </div>
    </div>
  </section>
    <!-- footer-->
   <br><br> 
    <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
              
          </div>
        </div>
    </div>
        </div>
  </footer>
    <script src="js/jquery-3.1.1.min.js"></script>
        <script type="js/bootsrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
    