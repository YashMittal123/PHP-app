<!DOCTYPE html>
<html lang="en">
   <head>
      <title>phpapp</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="style2.css">
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body style="background-color:rgb(255,2555,255);">
      <nav class="navbar navbar-inverse" id="header">
         <div class="container-fluid">
            <ul class="nav navbar-nav">
               <li class="active"><a href="index.php">Home</a></li>
               <li><a href="about.php">About us</a></li>
               <li><a href="contact.php">Contact</a></li>
			   <li><a href="login.php">Login</a></li>
			   <li><a href="signup.php">Signup</a></li>
            </ul>
         </div>
      </nav>
	<div class="row">
	<div class="container col-sm-5" id="csl">
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img6.jpg" alt="Los Angeles" style="width:100% ;height:330px;">
      </div>

      <div class="item">
        <img src="img7.jpg" alt="Chicago" style="width:100%;height:330px;">
      </div>
    
      <div class="item">
        <img src="img5.jpg" alt="New york" style="width:100%;height:330px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class=" col-sm-1"></div>
      <div class="container col-sm-6">
         <h1>HOME TUTOR APP</h1>
            </div>
         
         <script src="jscript.js"></script>
      </div>
	  </div>
      <div class=" footer" ">
         <div class="row jumbotron" id="xyz">
            <div class="col-sm-3 ">
               <h2>About Us</h2>
               <div class="">..........................  
                  ....................... 
                  ....................... 
                  ..................<a class="pqr" href="#">Know more</a>
               </div>
            </div>
            <div class="col-sm-3">
               <h2>Important Links</h2>
               <div class="">
                  <a href="#" class="pqr">Home</a><br>
                  <a href="#" class="pqr">About us</a><br>
                  <a href="#" class="pqr">Contact</a><br>
                  <a href="#" class="pqr">Registration</a><br>
                  <a href="#" class="pqr">Sitemap</a>
               </div>
            </div>
            <div class="col-sm-3">
               <h2>Follow us on</h2>
               <div class="">
                  <a href="#" class="pqr">Facebook</a><br>
                  <a href="#" class="pqr">Twitter</a><br>
                  <a href="#" class="pqr">Google+</a><br>
                  <form action="/action_page.php">
                     <div class="form-group">
                        <label for="email">Subscribe:</label>
                        <div class="input-group">
                           <input type="email" class="form-control" id="email" placeholder="your e-mail">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-sm-3">
               <div id="googleMap" style="width:100%;height:200px;"></div>
               <script>
                  function myMap() {
                  var mapProp= {
                      center:new google.maps.LatLng(28.614938,77.385177),
                      zoom:15,
                  };
                  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                  }
               </script>
               <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiP3vOxIV8jCNw3Ui0e8a3wNPHMIvA16Y&callback=myMap"></script>
            </div>
         </div>
      </div>
      </div> 
   </body>
</html>