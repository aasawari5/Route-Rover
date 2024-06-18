<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">

    <title>About Us</title>
    <style>
        body {
            font-family: 'Century Gothic', serif;
            font-weight: bold;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        /* Add animation for card images */
        .card img {
            opacity: 0; /* Initially hide the image */
            transition: opacity 0.5s ease; /* Add transition effect */
        }

        /* When the image is visible, change opacity to 1 */
        .card img.show {
            opacity: 1;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: white;
            color: #76ABAE;
        }

        .container {
            padding: 0 16px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>
<body style= "color: #5F374B; font-family: 'Candara;">
    <div class="about-section">
        <h1 style="font-family: 'Cinzel Decorative', cursive; font-weight: bold; color: #5F374B;">Route Rover Team</h1>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="aasi.jpeg" alt="A" style="width:80%">
                    <div class="container">
                        <h2 style= "color: #5F374B;">Aasawari</h2>
                        <p style= "color: #5F374B;">21104012@mail.jiit.ac.in</p>
                        <p style= "color: #5F374B;"><a href= "https://www.linkedin.com/in/aasawari-kaur-154306230" class="button">Contact</a></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="khushi.jpeg" alt="K" style="width:80%">
                    <div class="container">
                        <h2 style= "color: #5F374B;">Khushi</h2>
                        <p style= "color: #5F374B;">21103019@mail.jiit.ac.in</p>
                        <p style= "color: #5F374B;"><a href= "https://www.linkedin.com/in/khushi-goel-352909282" class="button">Contact</a></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="devang.jpeg" alt="D" style="width: 80%">
                    <div class="container">
                        <h2 style= "color: #5F374B;">Devang</h2>
                        <p style= "color: #5F374B;">21104061@mail.jiit.ac.in</p>
                        <p style= "color: #5F374B;"><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Delay the animation to give a smoother feel
        setTimeout(function() {
            // Add 'show' class to all card images
            document.querySelectorAll('.card img').forEach(function(img) {
                img.classList.add('show');
            });
        }, 500); // Adjust the delay (in milliseconds) as needed
    </script>
</body>
</html>
