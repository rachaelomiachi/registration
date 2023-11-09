<?php
session_start();
require_once './../connection/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
    <link rel="stylesheet" href="../food/style.css">

    <style>
        .navbar {
            background-color: #333;
           
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-toggler-icon {
            background-color: #fff;
            
        }

        /* Custom CSS to align items on the right */
        .navbar-nav {
            margin-left: auto; /* Align items to the right */
        }

        .navbar-nav .nav-item {
            margin-left: 20px; /*  spacing between nav items */
        }

        .carousel-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
 
  background: linear-gradient(to top, rgba(25, 255, 258, 0.5), rgba(255, 255, 255, 1));
  pointer-events: none; /* This ensures that the overlay doesn't interfere with the click events on the image */
}

/*  this  for the animation */
.welcome-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      white-space: nowrap;
      overflow: hidden;
      font-size:40px;
      color:blue;
      margin-bottom:100px
    }

    .welcome-text span {
      display: inline-block;
      opacity: 0;
      animation: slide-in 5s forwards;
    }

    @keyframes slide-in {
      0% {
        transform: translateX(-100%);
        opacity: 0;
      }
      100% {
        transform: translateX(0);
        opacity: 1;
      }
    }

    .kili-images img {
      filter: brightness(80%) saturate(150%) hue-rotate(200deg);
      max-width: 35%;
      justify-content:center;
     height: auto;
     margin-top: 20%;
     transition: transform 0.3s ease-in-out;
     
    }

    .kili-bg {
        background-color: #add8e6;
    padding: 20px; 
    }

    .kili-images img:hover {
      transform: scale(1.1);
    }

    @keyframes shine {
            0% {
                color: #3498db;
                transform: scale(1);
            }
            50% {
                color: #2980b9;
                transform: scale(1.1);
            }
            100% {
                color: #3498db;
                transform: scale(1);
            }
        }

        h1 span {
            display: inline-block;
            animation: shine 2s infinite;
        }

  






    </style>
       
</head>


<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./../food/photo/my-logo2.jpg" style="width:30%;" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./../ui/index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./../ui/login.php">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./../ui/create-user.php">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./../ui/product.php">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./../ui/product.php">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./../ui/show-food.php">Order Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+uaexr5+fmh0e5bptf+3/5erbsL8+5M1M5I5t5h5o4sF5sr5dp2w5s5j5q" crossorigin="anonymous"></script>
</body>
</html> 

