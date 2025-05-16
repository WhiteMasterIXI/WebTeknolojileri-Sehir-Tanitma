<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="style.css">
    <title>About Page</title>
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
                <li class="nav__item"><a href="login.php">Login</a></li>
              </ul>
              
              <div class="nav__toggle-buttons">
                <button class="close-btn btn" id="close_btn"><i class="uil uil-times"></i></button>
                <button class="open-btn btn" id="open_btn"><i class="uil uil-bars"></i></button>
              </div>
        </div>
    </nav>
    <!--====================== Menü ===========================-->
    <menu class="float__menu">
        <a href="#Home" class="active"><i class="uil uil-estate"></i></a>
        <a href="#About"><i class="uil uil-books"></i></a>
        <a href="#Services"><i class="uil uil-bag-alt"></i></a>
        <a href="#Contact"><i class="uil uil-phone"></i></a>
    </menu>
    
    <!--====================== sections ===========================-->

    <section class="info-section">
        <div class="section__container">
            <div class="container">
            <h1>Enes Erkan</h1>
            <p>Enes Erkan is a World and European champion Turkish karateka competing in the kumite +84 kg division. He transferred from the İstanbul Büyükşehir Belediyesi S.K. to the Sakarya Büyükşehir Belediyesi S.K. He studies physical education and sports at Sakarya University.</p>
        </div>
    </div>
    </section>
    <footer>
    <div class="footer__container">
        <article>
            <a href="index.php" class="footer__logo"><h3>WhiteMaster</h3></a>
            <P>You can use below links for contact me</P>
            <div>
                <i class='bx bxs-phone-call'></i>
                <small>+54123309055</small>
            </div>
            <div>
                <i class='bx bx-envelope'></i>
                <small>Emrekoca005@gmail.com</small>
            </div>
        </article>

        <article>
            <h3>Permalinks</h3>
            <div class="Pages">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </div>
        </article>

        <article>
            <h3>Contact Us</h3>
            <p>Press</p>
            <p>FAQs</p>
            <div class="footer__socials">
            <a href="#"><i class='bx bxl-linkedin' ></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
            <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
        </div>
        </article>
    </div>
    <div class="copyright">
        <small>&copy; Copyright Sakarya Website. All Rights Reserved.</small>
    </div>
</footer>

    <script src="main.js"></script>
</body>

</php>