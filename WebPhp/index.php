    <?php
 include 'partials/header.php' 

 ?>
    <!--====================== Menü ===========================-->
    <menu class="float__menu">
        <a href="#Home" class="active"><i class="uil uil-estate"></i></a>
        <a href="#CV-Part"><i class="uil uil-books"></i></a>
        <a href="#Swiper"><i class="uil uil-bag-alt"></i></a>
        <a href="#Weather"><i class="uil uil-books"></i></a>
    </menu>
    <!--====================== Home ===========================-->
    <section class="Home" id="Home">
        <div class="section__container">
            <div class="container">
                <?php if(isset($_SESSION['success-message'])) : ?>
                <div class="Message__Container Success">
                    <?= $_SESSION['success-message']; unset($_SESSION['success-message'])?>
                </div>
                <?php endif ?>
                <h2>Hello It's Me</h2>
                <h1>Emre Koca</h1>
                <h2>And I'am <span>Student</span></h2>
                <p>This is My Portfolio Website</p>
                <div class="social__links">
                    <a href="https://www.facebook.com/"><i class="uil uil-facebook-f"></i></a>
                    <a href="https://www.twitter.com/"><i class="uil uil-twitter"></i></a>
                    <a href="https://www.gmail.com/"><i class="uil uil-envelope"></i></a>
                    <a href=""><i class="uil uil-whatsapp"></i></a>
                </div>
            </div>
            <div class="right__container">
                <div class="image__container">
                    <img src="images/profil.jpg" alt="">
                    <ul>
                        <li>
                            <div class="overlay-slide">Welcome My Website</div>
                        </li>
                        <li><a class="overlay-slide" href="https://www.youtube.com"><i class="uil uil-youtube"></i></a>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas suscipit voluptatibus, fugit
                        quam deserunt expedita laudantium eligendi commodi at facere eveniet eos asperiores maxime,
                        neque molestias? Sed consequatur et ipsam!</p>
                </div>
                <div class="Education">
                    <h4>My Education Progress</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quo suscipit ullam aperiam magni
                        ea quas nam quibusdam veritatis praesentium, cupiditate rem incidunt dolorem rerum voluptatibus
                        tenetur laborum eveniet voluptas.</p>
                </div>
                <div class="Hobbys">
                    <h4>My Hobbys</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eius harum earum?</p>
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
                    <input type="text" placeholder="enter city name" spellcheck="false">
                    <button><img src="images/search.png" alt=""></button>
                </div>
                <div class="error">
                    <p>Invalid city name</p>
                </div>
                <div class="weather">
                    <img src="images/clear.png" class="weather-icon">
                    <h1 class="temp">22°C</h1>
                    <h2 class="city">New York</h2>
                    <div class="details">
                        <div class="col">
                            <img src="images/humidity_8691565.png">
                            <div>
                                <p class="humidity">50%</p>
                                <p>Humidity</p>
                            </div>
                        </div>
                        <div class="col">
                            <img src="images/wind-socket_2402912.png">
                            <div>
                                <p class="wind">15 km/h</p>
                                <p>Wind Speed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <footer>

    </footer>

    <script>

        const apiKey = "485d86be4fc80a56d9a3585850d07a08"
        const apiUrl = "https://api.openweathermap.org/data/2.5/weather?=&units=metric&q=";

        const searchBox = document.querySelector(".search input");
        const searchBtn = document.querySelector(".search button");
        const weatherIcon = document.querySelector(".weather-icon")


        async function checkWeather(city) {
            const response = await fetch(apiUrl + city + `&appid=${apiKey}`);

            if (response.status == 404) {
                document.querySelector(".weather").style.display = "none";
                document.querySelector(".error").style.display = "block";
            }
            else {
                var data = await response.json();

                console.log(data);


                document.querySelector(".city").innerphp = data.name;
                document.querySelector(".temp").innerphp = Math.round(data.main.temp) + "°C";
                document.querySelector(".humidity").innerphp = data.main.humidity + "%";
                document.querySelector(".wind").innerphp = data.wind.speed + "km/h";

                if (data.weather[0].main == "Clouds") {
                    weatherIcon.src = "images/clouds.png"
                }
                else if (data.weather[0].main == "Clear") {
                    weatherIcon.src = "images/clear.png"
                }
                else if (data.weather[0].main == "Rain") {
                    weatherIcon.src = "images/rain.png"
                }
                else if (data.weather[0].main == "Drizzle") {
                    weatherIcon.src = "images/drizzle.png"
                }
                else if (data.weather[0].main == "Mist") {
                    weatherIcon.src = "images/mist.png"
                }

                document.querySelector(".weather").style.display = "block";
                document.querySelector(".error").style.display = "none";
            }


        }


        searchBtn.addEventListener("click", () => {
            checkWeather(searchBox.value);
        })



    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="main.js"></script>
</body>

    </html>