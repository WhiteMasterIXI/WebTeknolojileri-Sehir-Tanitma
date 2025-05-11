<?php 
session_start();             // Oturumu başlat
session_unset();            // Tüm oturum verilerini temizle
session_destroy();          // Oturumu tamamen sonlandır
echo "<script>
    localStorage.setItem('isLogged', 'false');
    window.location.href = '/webtekno';
    </script>";
?>