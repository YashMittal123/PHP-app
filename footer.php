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
   </head>
   <body>
    <div class=" footer" ">
      <div class="row jumbotron">
         <div class="col-sm-3">
            <h2>About Us</h2>
            <div class="">..........................  
               ....................... 
               ....................... 
               ..................<a href="#">Know more</a>
            </div>
         </div>
        
         <div class="col-sm-3">
            <h2>Important Links</h2>
            <div class="">
               <a href="#">Home</a><br>
               <a href="#">About us</a><br>
               <a href="#">Contact</a><br>
               <a href="#">Registration</a><br>
               <a href="#">Sitemap</a>
            </div>
         </div>
         
         <div class="col-sm-3">
            <h2>Follow us on</h2>
            <div class="">
               <a href="#">Facebook</a><br>
               <a href="#">Twitter</a><br>
               <a href="#">Google+</a><br>
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