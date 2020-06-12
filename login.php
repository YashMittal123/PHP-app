<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bootstrap Example</title>
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
      <div class="row" style="padding:15px;">
         <div class="col-sm-5" "></div>
         <div class="col-sm-6" >
            <h1  id='a'>LOGIN FORM</h1>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
               <form  id="form1" class="form-horizontal" action="checklogin.php" method="POST">
                  <div class="col-sm-10"></div>
                  <button class="col-sm-2 qwe"><b>Login </b></button>
                  <div class="form-group row" id='b'>
                     <div class="col-sm-2"></div>
                     <div class="radio col-sm-2">
                        <label><input type="radio"  name="choice" required="required" value="teacher">Teacher</label>
                     </div>
                     <div class="radio col-sm-2">
                        <label><input type="radio"  name="choice" value="student" >Student</label>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-4" for="name">Username:</label>
                     <div class="col-sm-5">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                           <input type="text" class="form-control" id="name" name="username" required="required" placeholder="Enter username">
                        </div>
                     </div>
                  </div>
				  <div class="form-group">
                     <label class="control-label col-sm-4" for="pass">Password:</label>
                     <div class="col-sm-5">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                           <input type="password" class="form-control" id="pass" required="required" name="password" placeholder="Enter password">
                        </div>
                     </div>
                  </div>
				  
				  <div class="form-group row">
					<div class="col-sm-2"></div>
                    <div class="col-sm-3"><a href="#" style="color:red">Forgot Password</a></div>
                     
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </div>
				  <div class="form-group row">
					<div class="col-sm-3"></div>
                    <div class="col-sm-3"><a href="login.php">Login</a></div>
                    <div class="col-sm-3"><a href="signup.php">Signup</a></div> 
                  </div>
               </form>
            </div>
         </div>
         <script src="jscript.js"></script>
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
