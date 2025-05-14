<?php session_start() ?>

<!DOCTYPE html>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstraps.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/WebTeknolojiler/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>My City</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    crossorigin=""
  />
  <style>
    .Sakarya__Map {
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    #map {
      width: 100%;
      height: 80vh;
      z-index: 1;
    }
  </style>
</head>

<body>
    <!--====================== Navbar ===========================-->
    <nav>
        <div class="nav__container">
            <div class="nav__logo">
                <div class="logo__image">
                    <div class="back__side">
                        <div class="face__background">
                            <div class="face ">
                                <div class="face__up ">
                                    <div class="eye"></div>
                                    <div class="eye"></div>
                                </div>
                                <div class="face__down"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="index.php">
                    <h1>Sakarya</h1>
                </a>
            </div>
            <ul class="nav__items" id="nav__items">
                <li class="nav__item"><a href="index.php">Home</a></li>
                <li class="nav__item"><a href="about.php">About</a></li>
                <li class="nav__item"><a href="contact.php">Contact</a></li>
                <?php if(isset($_SESSION['isİnside'])) : ?>       
                <li class="nav__item"><a href="Logout.php">Exit</a></li> 
                <?php else : ?>
                <li class="nav__item"><a href="Login.php">Login</a></li> 
                <?php endif ?>  
            </ul>

            <div class="nav__toggle-buttons">
                <button class="close-btn btn" id="close_btn"><i class="uil uil-times"></i></button>
                <button class="open-btn btn" id="open_btn"><i class="uil uil-bars"></i></button>
            </div>
        </div>
    </nav>