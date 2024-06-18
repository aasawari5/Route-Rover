<?php
    if(!isset($_SESSION)) 
    {   
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    background-image: url("bgimage.jpg");
    height: 100%;
    min-height: 600px; 
    background-attachment: scroll;
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: cover;
}
    

    
</style>
<body>
   <?php include 'navbar_admin.php'?>
   <br><br>
   <div class="container">
       <div class="row">
           <div class="page-header">
               <h1 style="text-align: center ; font-family: 'Century Gothic', cursive; -webkit-text-stroke: 1px black;">Welcome Admin!! </h1>
           </div>
           <div class="col-md-2"></div>
           <div class="col-md-8"></div>
           <div class="col-md-2"></div>
       </div>
   </div>
</body>
</html>