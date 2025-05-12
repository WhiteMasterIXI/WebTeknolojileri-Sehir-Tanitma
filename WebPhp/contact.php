    <?php
 include 'partials/header.php' 

 ?>
 <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>
    <!--====================== Menü ===========================-->
    <menu class="float__menu">
        <a href="#Home" class="active"><i class="uil uil-estate"></i></a>
        <a href="#About"><i class="uil uil-books"></i></a>
        <a href="#Services"><i class="uil uil-bag-alt"></i></a>
        <a href="#Contact"><i class="uil uil-phone"></i></a>
    </menu>

    <!--====================== sections ===========================-->

    <section class="contact">
        <div class="dif_container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="images/Contact.jpg">
                </div>
                <h2>Contact Us</h2>
                <p>metin yaz bizimle iletişimle ilgili</p>
                <ul class="contact__details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>+2335523456789</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>suppor@egator.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Accra, Ghana</h5>
                    </li>
                </ul>
                <ul class="contact__socials">
                    <li><a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="https://instagram.com"><i class="uil uil-instagram-alt"></i></a></li>
                    <li><a href="https://twitter.com"><i class="uil uil-twitter"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
            </aside>
            <div id="app">
            <form  action=https://formspree.io/f/xjkvyzae  method="POST" class="contact__form">
                <div class="form__name">
                    <input type="text" name="FirstName" v-model="name" placeholder="First Name" required>
                    <input type="text" name="LastName" v-model="surname"  placeholder="Last Name" required>
                </div>
                <div class="form__name">
                <input type="phone" name="Phone" v-model="phone" placeholder="Your Email Address" required>
                <input type="email" name="Email Address" v-model="email" placeholder="Your Email Address" required>
                </div>
                <textarea name="Message" rows="7" v-model="message" placeholder="Message" required></textarea>
                <div class="buttons">
                    <button type="button" class="btn btn-primary" @click="vueKontrolEt">Send With Vue</button>
                    <button type="button" class="btn btn-primary" onclick="jsKontrol()">Send With JS</button>
                    <button type="button" class="btn btn-primary" @click="temizleForm">Clear</button>
                </div>
                
            </form>
        </div>
        </div>
    </section>
     <script>
  // JS Kontrol fonksiyonu dışarıda kalacak
  function jsKontrol() {
    const name = document.querySelector('[name="FirstName"]').value.trim();
    const surname = document.querySelector('[name="LastName"]').value.trim();
    const phone = document.querySelector('[name="Phone"]').value.trim();
    const email = document.querySelector('[name="Email Address"]').value.trim();
    const message = document.querySelector('[name="Message"]').value.trim();

    const errors = [];

    if (!name) errors.push("İsim boş olamaz.");
    if (!surname) errors.push("Soyisim boş olamaz.");
    if (!email.includes('@')) errors.push("Geçersiz e-posta.");
    if (!/^\d+$/.test(phone)) errors.push("Telefon sadece rakam olmalı.");
    if (message.length < 10) errors.push("Mesaj çok kısa.");

    if (errors.length > 0) {
      alert("JS Kontrol:\n" + errors.join("\n"));
    } else {
      alert("Form başarıyla gönderildi! (JS ile)");
      document.querySelector("form").submit();
    }
  }

  // Vue uygulaması
  new Vue({
    el: "#app",
    data: {
      name: "",
      surname: "",
      email: "",
      phone: "",
      message: ""
    },
    methods: {
      vueKontrolEt() {
        const errors = [];

        if (!this.name) errors.push("İsim boş olamaz.");
        if (!this.surname) errors.push("Soyisim boş olamaz.");
        if (!this.email.includes('@')) errors.push("Geçersiz e-posta.");
        if (!/^\d+$/.test(this.phone)) errors.push("Telefon sadece rakam olmalı.");
        if (this.message.length < 10) errors.push("Mesaj çok kısa.");

        if (errors.length > 0) {
          alert("Vue Kontrol:\n" + errors.join("\n"));
        } else {
          alert("Form başarıyla gönderildi! (Vue ile)");
          document.querySelector("form").submit();
        }
      },
      temizleForm() {
        this.name = "";
        this.surname = "";
        this.email = "";
        this.phone = "";
        this.message = "";
      }
    }
  });
</script>
    <script src="main.js"></script>
</body>

</html>