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
            <h1  id='a'>SIGNUP FORM</h1>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
               <form  id="form1" class="form-horizontal" action="signup.php" method="post">
                  <div class="col-sm-10"></div>
                  <button class="col-sm-2 qwe"><b>Sign Up </b></button>
                  <div class="form-group row" id='b'>
                     <div class="col-sm-2"></div>
                     <div class="radio col-sm-2">
                        <label><input type="radio" onclick="f1(),f4()" name="choice" value="teacher">Teacher</label>
                     </div>
                     <div class="radio col-sm-2">
                        <label><input type="radio" onclick="f2(),f3()" name="choice" value="student">Student</label>
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
                           <input type="password" class="form-control" id="pass"  name="password1" required="required" placeholder="Enter password">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-4" for="pass">Confirm Password:</label>
                     <div class="col-sm-5">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                           <input type="password" class="form-control" id="pass"  name="password2" required="required" placeholder="Re-enter password">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-4" for="contactno">Contact no:</label>
                     <div class="col-sm-5">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                           <input type="text" class="form-control" id="contactno"  name="contact_no" required="required" placeholder="Enter contact no">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-4" for="email">Email:</label>
                     <div class="col-sm-5">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                           <input type="text" class="form-control" id="email"  name="email" required="required" placeholder="Enter email">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-4" for="address">Address:</label>
                     <div class="col-sm-5">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                           <input type="text" class="form-control" id="address"  name="address" required="required" placeholder="Enter Address">
                        </div>
                     </div>
                  </div>
                  <div class="form-group row" style="display:none" id="div3">
                     <label class="control-label col-sm-4" for="class">Class:</label>
                     <div class="col-sm-5">
                        <select id="class"  name="class" required="required" placeholder="Enter class" class="abc">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                           <option>11</option>
                           <option>12</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row" style="display:none" id="div5">
                     <label class="control-label col-sm-4" for="subject">Subject:</label>
                     <div class="col-sm-5">
                        <select  id="subject"  name="subject" required="required" placeholder="Enter subject" class="abc">
                           <option>maths</option>
                           <option>computer science</option>
                           <option>physics</option>
                           <option>chemistry</option>
                           <option>english</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row" style="display:none" id="div1">
                     <label class="control-label col-sm-4" for="area">Area of Expertise:</label>
                     <div class="col-sm-5">
                        <select  id="area" class="abc"  name="area_expertise" required="required" >
                           <option>maths</option>
                           <option>computer science</option>
                           <option>physics</option>
                           <option>chemistry</option>
                           <option>english</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row" style="display:none" id="div4">
                     <label class="control-label col-sm-4" for="exp">Experience<small>(if any)</small>:</label>
                     <div class="col-sm-5"> 
                        <input type="text" class="form-control" id="exp"  name="experience" placeholder="years">
                     </div>
                  </div>
                  <div class="form-group row" style="display:none" id="div2">
                     <label class="control-label col-sm-4" >Class to teach:</label>
                     <label class="control-label col-sm-1" for="classt">From:</label>
                     <div class="col-sm-2">
                        <select id="classt" class="abc"  name="class_from" required="required" >
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                           <option>11</option>
                           <option>12</option>
                        </select>
                     </div>
                     <label class="control-label col-sm-1" for="to">To:</label>
                     <div class="col-sm-2">
                        <select id="to" class="abc"  name="class_to" required="required">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                           <option>11</option>
                           <option>12</option>
                        </select>
                     </div>
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
<?php
$link = mysqli_connect("localhost", "root", "root", "second_db") or die($link);
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $choice=mysqli_real_escape_string($link,$_POST['choice']);
   if($choice == "teacher")
   {
      $username=mysqli_real_escape_string($link,$_POST['username']);
      $password1=mysqli_real_escape_string($link,$_POST['password1']);
      $password2=mysqli_real_escape_string($link,$_POST['password2']);
      $contact=mysqli_real_escape_string($link,$_POST['contact_no']);
      $email=mysqli_real_escape_string($link,$_POST['email']);
      $address=mysqli_real_escape_string($link,$_POST['address']);
      $area_expertise=mysqli_real_escape_string($link,$_POST['area_expertise']);
      $experience=mysqli_real_escape_string($link,$_POST['experience']);
      $class_from=mysqli_real_escape_string($link,$_POST['class_from']);
      $class_to=mysqli_real_escape_string($link,$_POST['class_to']); 
      $bool=true;  

      $query = mysqli_query($link,"Select * from teachers");
      while($row = mysqli_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("signup.php");</script>'; // redirects to register.php
    }
  }
  if($password1!=$password2)
  {
   $bool=false;
   Print '<script>alert("Error in password confirmation!");</script>'; //Prompts the user
      Print '<script>window.location.assign("signup.php");</script>'; // redirects to register.php
  }
   if($bool) // checks if bool is true
  {
    mysqli_query($link,"INSERT INTO teachers(username,password,contact_no,email,address,area_expertise,experience,class_from,class_to) VALUES ('$username','$password1','$contact','$email','$address','$area_expertise','$experience','$class_from','$class_to')"); //Inserts the value to table users
    Print '<script>alert("Successfully Registered as teacher");</script>'; // Prompts the user
    Print '<script>window.location.assign("signup.php");</script>'; // redirects to register.php
  }

   }
   else{
      $username=mysqli_real_escape_string($link,$_POST['username']);
      $password1=mysqli_real_escape_string($link,$_POST['password1']);
      $password2=mysqli_real_escape_string($link,$_POST['password2']);
      $contact=mysqli_real_escape_string($link,$_POST['contact_no']);
      $email=mysqli_real_escape_string($link,$_POST['email']);
      $address=mysqli_real_escape_string($link,$_POST['address']);
      $class=mysqli_real_escape_string($link,$_POST['class']);
      $subject=mysqli_real_escape_string($link,$_POST['subject']); 
      $bool=true;  

      $query = mysqli_query($link,"Select * from students");
      while($row = mysqli_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("signup.php");</script>'; // redirects to register.php
    }
  }
  if($password1!=$password2)
  {
   $bool=false;
   Print '<script>alert("Error in password confirmation!");</script>'; //Prompts the user
      Print '<script>window.location.assign("signup.php");</script>'; // redirects to register.php
  }
   if($bool) // checks if bool is true
  {
    mysqli_query($link,"INSERT INTO students(username,password,contact_no,email,address,class,subject) VALUES ('$username','$password1','$contact','$email','$address','$class','$subject')"); //Inserts the value to table users
    Print '<script>alert("Successfully Registered as student");</script>'; // Prompts the user
    Print '<script>window.location.assign("signup.php");</script>'; // redirects to register.php
  }
   }
}
?>