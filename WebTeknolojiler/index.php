    <?php
    include 'partials/header.php'

    ?>
    <!--====================== Menü ===========================-->
    <menu class="float__menu">
        <a href="#Home" class="active"><i class="uil uil-estate"></i></a>
        <a href="#CV-Part"><i class="uil uil-books"></i></a>
        <a href="#Swiper"><i class="uil uil-bag-alt"></i></a>
        <a href="#Weather"><i class="uil uil-phone"></i></a>
    </menu>
    <!--====================== Home ===========================-->
    <section class="Home" id="Home">
        <div class="section__container">
            <div class="container">
                <?php if (isset($_SESSION['success-message'])) : ?>
                    <div class="Message__Container Success">
                        <?= $_SESSION['success-message'];
                        unset($_SESSION['success-message']) ?>
                    </div>
                <?php endif ?>
                <h2>Hello It's Me</h2>
                <h1>Emre Koca</h1>
                <h2>And I'am <span>Student</span></h2>
                <p>This is My Portfolio Website</p>
                <div class="social__links">
                    <a href="https://www.facebook.com/" target="_blank"><i class="uil uil-facebook-f"></i></a>
                    <a href="https://www.twitter.com/" target="_blank"><i class="uil uil-twitter"></i></a>
                    <a href="https://www.gmail.com/" target="_blank"><i class="uil uil-envelope"></i></a>
                    <a href="" target="_blank"><i class="uil uil-whatsapp"></i></a>
                </div>
            </div>
            <div class="right__container">
                <div class="image__container">
                    <img src="images/profil.jpg" alt="">
                    <ul>
                        <li>
                            <div class="overlay-slide">Welcome My Website</div>
                        </li>
                        <li><a class="overlay-slide" href="https://www.youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--About me information-->
    <section class="AboutMe" id="CV-Part">
        <div class="section__container">
            <div class="personal__informations-left">
                <div class="contact__informations">
                    <div class="mini__title">Contact</div>
                    <ul>
                        <li><a href="mailto:Emrekoca005@gmail.com">EmreKoca005@gmail.com</a></li>
                        <li><a href="https://www.facebook.com/">EmreKoca005@hotmail.com</a></li>
                        <li><a href="https://github.com/WhiteMasterIXI/WebTeknolojileri-Sehir-Tanitma">GitHub
                                WhiteMaster</a></li>
                    </ul>
                </div>
                <div class="Programing_Languages">
                    <div class="mini__title">Programing and Markup Languages</div>
                    <ul>
                        <li>
                            <p>C++</p>
                            <div class="progress__bar">
                                <div class="progress__percentages">60%</div>
                            </div>
                        </li>
                        <li>
                            <p>C#</p>
                            <div class="progress__bar">
                                <div class="progress__percentages">70%</div>
                            </div>
                        </li>
                        <li>
                            <p>php</p>
                            <div class="progress__bar">
                                <div class="progress__percentages">80%</div>
                            </div>
                        </li>
                        <li>
                            <p>Css</p>
                            <div class="progress__bar">
                                <div class="progress__percentages">60%</div>
                            </div>
                        </li>
                        <li>
                            <p>JS</p>
                            <div class="progress__bar">
                                <div class="progress__percentages">40%</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="Languages">
                    <div class="mini__title">Languages</div>
                    <ul>
                        <li>
                            <p>English</p>
                            <div class="circle">
                                <div class="inner">B2</div>
                            </div>
                        </li>
                        <li>
                            <p>Germany</p>
                            <div class="circle">
                                <div class="inner">A2</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="personal__informations-right">
                <div class="Myintroduce">
                    <h4>Who I am ?</h4>
                    <p>I am a Student Nowadays I intrested in Coding Application with winforms, 
                        in the beggining I have started learning Html Css (markuplanguage) and Js (scriptlanguage) 
                    </p>
                </div>
                <div class="Education">
                    <h4>My Education Progress</h4>
                    <p>I started highschool when I was 13 years old and I liked all subjects about lessons and 3th grade Our School took us to Math Olymp
                        this olymp have 2 part first part elemination and fifteen people pass this part after that 2nd Stage real Competition , normally all team have 4 members
                        but one our friend didn't come with us and all of us pass 2nd stage then the youngest among us was just solve math problem
                        because of that he pass us but we didn't take any prize in there although our school give us prize.
                    </p>
                </div>
                <div class="Hobbys">
                    <h4>My Hobbys</h4>
                    <p>I like Playing Chess ,Drawing Pictures,Playing Football but I took a break all these activities</p>
                </div>
            </div>
        </div>
    </section>
    <!--Slider-->


    <section class="Swiper-İmage" id="Swiper">
        <swiper-container class="mySwiper swiper-h" pagination="true" pagination-clickable="true" space-between="50">
            <swiper-slide><img src="images/Lise.jpg" alt=""></swiper-slide>
            <swiper-slide><img src="images/Creative Art Photos - Download Free High-Quality Pictures _ Freepik.jpeg"
                    alt=""></swiper-slide>
            <swiper-slide><img
                    src="images/1_ GOGlobal is a tried-and-true online educational platform that has been around for a while.jpg"
                    alt=""></swiper-slide>
            <swiper-slide><img src="images/Real Estate Gambit.jpeg" alt=""></swiper-slide>
        </swiper-container>
    </section>

    <section id="Weather" class="Weather-Api">
        <div class="section__container">

            <div class="card">
                <div class="search">
                    <input type="text" placeholder="Search Film" spellcheck="false">
                    <button><img src="images/search.png" alt=""></button>
                </div>
                <div class="information__side">
                    <div class="information__container">
                        <div class="writer__side">
                            <h4>Writer</h4>
                            <p class="Writer"></p>
                        </div>
                        <div class="year__Side">
                            <h4>Year</h4>
                            <p class="Year"></p>
                        </div>
                        <div class="Plot__Side">
                            <h4>Plot</h4>
                            <p class="Plot"></p>
                        </div>
                        <div class="Imdb__Side">
                            <h4>İmdb Point</h4>
                            <p class="İmdbPoint"></p>
                        </div>
                    </div>
                    <div class="film__image"><img src="" alt=""></div>
                </div>
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

    <script>
        const filmApi = "https://www.omdbapi.com/?apikey=569505d"
        const filmApiKey = "569505d"
        // sona bunu ekleyip film aratılıyor t=film_adi

        const apiKey = "485d86be4fc80a56d9a3585850d07a08"

        const apiUrl = "https://api.openweathermap.org/data/2.5/weather?=&units=metric&q=";

        const searchBox = document.querySelector(".search input");
        const searchBtn = document.querySelector(".search button");

        async function TakeApiInformation(FilmName) {
            FilmName = FilmName.trim();
            const response = await fetch(filmApi + `&t=${FilmName}`);
            const data = await response.json();

            if (data.Response === "False") {
                alert("Film Bulunamadı");
                console.log(data);
            } else {
                console.log(data); // Kontrol için
                //console.log(document.querySelector(".film__image img"));
                document.querySelector(".Writer").innerHTML = data.Writer;
                document.querySelector(".Year").innerHTML = data.Year;
                document.querySelector(".Plot").innerHTML = data.Plot;
                document.querySelector(".İmdbPoint").innerHTML = data.imdbRating;
                document.querySelector(".film__image img").src = data.Poster;
            }
        }


        searchBtn.addEventListener("click", () => {
            //checkWeather(searchBox.value);
            TakeApiInformation(searchBox.value);
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="main.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundles.min.js"></script>
    </body>

    </html>