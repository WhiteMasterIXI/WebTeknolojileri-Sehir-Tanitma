<?php session_start();

// Verileri düz yazı haline getiriyoruz işlem yapılacağı için taglarından arındırma işlemi.
if(isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    if(!$firstname) {
        $_SESSION['signup'] = "Please enter Your First Name";
    }
        elseif(!$lastname) {
        $_SESSION['signup'] = "Please enter Your Last Name";
    }
    elseif(!$username) {
        $_SESSION['signup'] = "Please enter Your User Name";
    }
    elseif(!$email) {
        $_SESSION['signup'] = "Please enter Your Valid Email";
    }
    elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Password Should be 8+ characters";
    }
}else {
    // if button wasn't clicked, bounce back to signup page
    header('location: '.'Login.php');
    die();
}

if(isset($_SESSION['signup'])) {
        // pass form data back to signup page  
        $_SESSION['signup-data'] = $_POST;
        header('location: '. 'Login-Logic.php');
        die();
    }else {
        $_SESSION['success-message'] = "Login Successfull.";
        $_SESSION['isİnside'] = "İnside";
        header('location: '. 'index.php');
        die();
    } 
?>

















