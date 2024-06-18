<?php
    $connection= mysqli_connect("localhost","root","","vehicle management");

    session_start();

    $sql= "SELECT * FROM `vehicle`";
    $res=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Trucks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    
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

    .truck-details {
        text-align: center;
    }

    .truck-name {
        margin-top: 10px;
        font-weight: bold;
        font-family: 'Candara', cursive;
        font-size: 16px;
        color: #5F374B;
    }

    .truck-item {
        opacity: 1; /* Initially set opacity to 0 */
        transform: translateY(20px); /* Move the images slightly downward */
        transition: opacity 0.5s ease, transform 0.5s ease; /* Add transition effect */
    }

    .truck-item.visible {
        opacity: 0; /* Change opacity to 1 when the image is visible */
        transform: translateY(0); /* Remove the downward transformation */
    }
</style>

<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()">   
   <div id="myDiv">
   <?php include 'navbar.php'; ?>
<br><br><br>
<div class="container">
    <?php if(mysqli_num_rows($res) > 0) { ?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 foo">
            <h1 style="text-align: center; color: #8C6A5D; font-weight: bold; font-family: 'Century Gothic', cursive; margin-top: 5px; ">Trucks We Run</h1>
            <p style= "text-align: center; color: grey; font-family: 'Candara'; font-size: 20px; margin-left: 10px;"> Regularly checked, maintained, efficient Vehicles! </p>
                <div class="truck-list-container">
                    <?php while($row = mysqli_fetch_assoc($res)) { ?>
                    <div class="col-md-4 truck-item">
                    <div class="truck-details">
                    <a href="truckprofile.php?busid=<?php echo $row["veh_id"]; ?>">
                    <img style="border: 1; margin-top: 50px;" height="150px" width="150px" src="vehicle picture/<?php echo $row["veh_photo"]; ?>" alt="dp">
                     </a>
                     <div class="truck-name" style="border: 2; margin-top: 10px; color: brown;">
                         <a href="truckprofile.php?busid=<?php echo $row["veh_id"]; ?>" class="truck-name-btn"><?php echo $row["veh_reg"] ?></a>
                    </div>
                        </div>

                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <?php } ?>
</div>
</div>


<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
        sr.reveal('.truck-image', {
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