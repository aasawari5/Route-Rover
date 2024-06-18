<?php 
    $connection=mysqli_connect("localhost","root","","vehicle management");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>vehicle management system</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Permanent+Marker&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head> 
<style>

body {
  background-color: rgb(180, 234, 234);
}
    
.parallax {
    /* The image used */
    background-image: url("index_bg.jpg");
    height: 100%;
    min-height: 600px; 
    /* background scrolling effects */
    background-attachment: scroll;
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
    .navbar-fixed-top.scrolled {
       background-color: white;
      transition: background-color 200ms linear;
    }

  .arrar{
    display: flex;
    align-items: center;
  }

  #bus_route{
    display: inline-flex;
    align-items:flex-end;
  }
  
  .texts{
    font-size: 10vh;
    font-family: 'Abril Fatface', monospace;
    text-align: center;
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #5F374B; 
  }
  
  .textinns{
    font-size: 3vh;
    font-family: 'Courier New', monospace;
    font-weight: bold;
    text-align: center;
    position: absolute;
    top: 32%;
    left: 60%;
    transform: translate(-50%, -50%);
    color: #5F374B; 
  }

  .cont1{
    display: flex;
    justify-content: center;
  }

  
</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()">     
    <div class="parallax foo">
       <?php include 'navbar.php';?>
       <div id="home-section">
           <div class="texts">
            Route Rover </div><br>
            <div class = "textinns"> <p> NAVIGATE.ACCELARATE.DOMINATE. </p> </div> <br>
          </div>
    </div>                 
    
    <div class="cont1">
      <div class="map1">
      <div class="page-header">
            <h1 style="text-align: center; font-family: 'Candara', cursive;color: #8C6A5D; font-weigth: bold;">Our Major Routes</h1>      
        </div>
       <br><br>
       <iframe width="400" height="300" style="border:2" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ5zwbSVHlDDkRsJ1N_fzZNXM&destination=place_id:ChIJLbZ-NFv9DDkRQJY4FbcFcgM&key=AIzaSyCL49eDqaxFysamuDikEhoby8BnNOUPTOc"></iframe>
       <iframe width="400" height="300" style="border:2" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ5zwbSVHlDDkRsJ1N_fzZNXM&destination=place_id:ChIJ3w_FQbvxDDkRuph3atJv8OY&key=AIzaSyCL49eDqaxFysamuDikEhoby8BnNOUPTOc"></iframe>
       <iframe width="400" height="300" style="border:2" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ5zwbSVHlDDkRsJ1N_fzZNXM&destination=place_id:ChIJWYjjgtUZDTkRHkvG5ehfzwI&key=AIzaSyCL49eDqaxFysamuDikEhoby8BnNOUPTOc"></iframe></div>
                          
        </div>
        
        <br>
        <div id= "driver-section">
        <div class="page-header">
         <h1 style="text-align: center; font-family: 'Candara', cursive; color: #8C6A5D; font-weigth: bold;">Our Drivers</h1>      
        </div>
        <div id="driver" class="container">
        <div class="row">
        <div class="col-md-12">
            <p style="font-size: 20px; font-family: 'Candara', cursive;">The drivers are very punctual and provide great service. Every one of them is professional and great at their jobs and has cleared certain tests. All have significant prior experience and are professional at work. Their safety is our major concern.</p>
        </div>
        </div>
       </div>

    <div class="row">
        <div class="col-md-4 text-center">
            <img src="nsf.jpg" alt="Driver 1" class="driver-image" style= "height:200px; width: 200px;">
        </div>
        <div class="col-md-4 text-center">
            <img src="rkb.jpg" alt="Driver 2" class="driver-image" style= "height:200px; width: 300px;">
        </div>
        <div class="col-md-4 text-center">
            <img src="tye.jpg" alt="Driver 3" class="driver-image" style= "height:200px; width: 300px;">
        </div>
        
    </div>
</div>
<div id="vehicle-section">
        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center; font-family: 'Candara', cursive; color: #8C6A5D; font-weigth: bold;">Our Trucks </h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                <img src="index2.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:25px; font-family: 'Candara', cursive; color: #A8A196; "><b>As of now we have 3 trucks and each one of it is well maintained. These trucks goes in different directions of the city. </b></p>
              </div>
              
          </div>       
        </div> 
          <p></p>            
        </div>  
        
        <footer style="background-image: url('foo.jpeg'); 
          color: #fff; padding-top: 70px;
          padding-bottom: 70px;" class="container-fluid text-center font-family: 'Cinzel Decorative', cursive;"  >
                <p>All rights reserved</p><br>
                <p>Copyright &#169; A.K.D Alliance LTD.
        </footer>
        
           
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
        sr.reveal('.driver-image', {
        duration: 1000,    // Animation duration in milliseconds
        origin: 'bottom',  // Animation origin (can be 'bottom', 'left', 'right', 'top', or 'center')
        distance: '50px',  // Distance the element moves in pixels
        scale: 0.9,        // Starting scale of the element (0.0 to 1.0, where 1.0 is full size)
        easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',  // Easing function for animation
        delay: 200    
    });        
   
    </script>
    

    
</body>
</html>