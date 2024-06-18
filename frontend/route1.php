<?php 
 session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Route</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

 
</head> 
<style>
 body{
        background-image: url("pic_bg.jpg");
    background-color: rgb(200, 200, 200)
    height: 100%;
    min-height: 600px; 
    style="opacity: 0; 
    transition: opacity 500ms linear 0s;
    object-fit: cover;
    background-attachment: scroll;
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: cover;
    }

</style>


<body onload="myFunction()">
    <div id="loader"></div>
    
    <div id="myDiv">
      <?php include 'navbar.php';?>
      <br>
       <div class="page-header foo">
            <h1 style="text-align: center; font-family: 'Candara', cursive; font-size: 9vh;">Scania Route</h1>      
      </div> 
       <div class="col-md-3"></div>
       <div class="col-md-6" style="margin-left: 70px;">
    <div style="position: relative; overflow: hidden; padding-top: 56.25%;">
        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" loading="lazy" allowfullscreen src= "https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ5zwbSVHlDDkRsJ1N_fzZNXM&destination=place_id:ChIJLbZ-NFv9DDkRQJY4FbcFcgM&key=AIzaSyCL49eDqaxFysamuDikEhoby8BnNOUPTOc"></iframe>
    </div>
</div>

       <div class="col-md-3"></div> 
        
    </div> 

       
<script>
var myVar;

    //for fakeloader
function myFunction() {
    //myVar = setTimeout(showPage, 1500);
}

function showPage() {
  //document.getElementById("loader").style.display = "none";
  //document.getElementById("myDiv").style.display = "block";
}
</script>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>

</body>
</html>