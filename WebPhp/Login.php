<?php session_start();

 // get back form data if there was a registration  error 
 $firstname = $_SESSION['signup-data']['firstname'] ?? null;
 $lastname = $_SESSION['signup-data']['lastname'] ?? null;
 $username = $_SESSION['signup-data']['username'] ?? null;
 $email = $_SESSION['signup-data']['email'] ?? null;
 $createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
 $confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
 // delete signup data session
 unset($_SESSION['signup-data']);
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="style.css">
    <title>About Page</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>

 
<section class="form__section">
        <div class="form__container form__section-container">
            <h2>Sign In</h2>
            <?php if(isset($_SESSION['signup'])) : ?>
            <div class="Message__Container Error">
                
                <?= $_SESSION['signup'];
                unset($_SESSION['signup'])
                ?>
            
            </div>
        <?php endif ?>
            <!-- Buraların hepsine required koyduğumuz için php deki yerler çalışmıyor girmeniz gerek falan yazar required ları kaldırırsanız -->
            <form action="Login-Logic.php" enctype="multipart/form-data" method="POST"> <!-- method üst tarafa bilgileri yazmayı engeller sadece sayfanın adresini yazar-->
                <input type="text" name="firstname" value="<?=$firstname?>" placeholder="First Name"> <!-- ne olarak kaydedicekse name ile kaydediliyor -->
                <input type="text" name="lastname" value="<?=$lastname?>" placeholder="Last Name">
                <input type="text" name="username" value="<?=$username?>" placeholder="User Name">
                <input type="email" name="email" value="<?=$email?>" placeholder="Email">
                <input type="password" name="createpassword" value="<?=$createpassword?>" placeholder="Create Password">
                <input type="password" name="confirmpassword" value="<?=$confirmpassword?>" placeholder="Confirm Password">
                <button type="submit" name="submit" class="btn">Sign In</button>
            </form>
        </div>
    </section>

    <script src="main.js"></script>
</body>

</html>