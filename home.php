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
      <?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: index.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   $ch = $_SESSION['choice'];
   ?>
</head>
<body style="background-color:rgb(255,2555,255);">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
      <li><a href="about.html">About us</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </div>
</nav>
  

   
    
      </br>
      </br>
      <h2>Home Page</h2>
      
  <?php
      Print"<h2>Hello " . $user . "</h2>";

      if($ch=="teacher")
      {
      Print"<h2 align='center'>Students List</h2>";
      
      Print"<table border='1px' width='100%'>";
      Print"<tr>";
       Print" <th>Name</th>";
        Print"<th>Contact no.</th>";
        Print"<th>Email</th>";
       Print" <th>Address</th> ";
        Print"<th>Class</th>  ";
      Print"</tr>";
    
      $link=mysqli_connect("localhost", "root", "root") or die (mysqli_error()); //Connect to server
      mysqli_select_db($link,"second_db") or die ("Cannot connect to database"); //Connect to database
      $query = mysqli_query($link,"Select * from teachers where username=$user");
      $row = mysqli_fetch_assoc($query);
      $from= $row['class_from'];
      $to= $row['class_to'];
      $subject= $row['area_expertise'];
      

      $query2 = mysqli_query($link,"Select * from students where subject='$subject' and class>='$from' and class<='$to'");
      while($row2 = mysqli_fetch_assoc($query2))
      {
        Print "<tr>";
          Print'<td align="center">'. $row2['username'] . "</td>";
          Print'<td align="center">'. $row2['contact_no'] . "</td>";
          Print'<td align="center">'. $row2['email'] . "</td>";
          Print'<td align="center">'. $row2['address'] . "</td>";
          Print'<td align="center">'. $row2['class'] . "</td>";
        Print "</tr>";
       }
     }
     else{
     Print"<h2 align='center'>Teachers List</h2>";
      
      Print"<table border='1px' width='100%'>";
      Print"<tr>";
       Print" <th>Name</th>";
        Print"<th>Contact no.</th>";
        Print"<th>Email</th>";
       Print" <th>Address</th> ";
        Print"<th>Experience</th>  ";
      Print"</tr>";
    
      $link=mysqli_connect("localhost", "root", "root") or die (mysqli_error()); //Connect to server
      mysqli_select_db($link,"second_db") or die ("Cannot connect to database"); //Connect to database
      $query = mysqli_query($link,"Select * from students where username='$user'");
      $row = mysqli_fetch_assoc($query);
      $class= $row['class'];
      $subject= $row['subject'];
      
      

      $query2 = mysqli_query($link,"Select * from teachers where area_expertise='$subject' and class_from<='$class' and class_to>='$class'");
      while($row2 = mysqli_fetch_assoc($query2))
      {
        Print "<tr>";
          Print'<td align="center">'. $row2['username'] . "</td>";
          Print'<td align="center">'. $row2['contact_no'] . "</td>";
          Print'<td align="center">'. $row2['email'] . "</td>";
          Print'<td align="center">'. $row2['address'] . "</td>";
          Print'<td align="center">'. $row2['experience'] . "</td>";
        Print "</tr>";
       }
   }
    ?>
</table>
    <br/>
    <br/>
    <a href="logout.php">Logout</a><br/><br/>
    

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