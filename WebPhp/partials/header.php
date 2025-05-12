<?php session_start() ?>

<!DOCTYPE html>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="http://localhost/WebTeknolojiler/style.css">
    <title>My City</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
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
                <li class="nav__item active"><a href="index.php">Home</a></li>
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