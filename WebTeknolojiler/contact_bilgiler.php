<?php 
$Firstname = $_POST['FirstName'];
$Lastname = $_POST['LastName'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/WebTeknolojiler/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="info-section">
        <div class="section__container">
        <div class="container">
        <p>İsim: <?php echo $Firstname ?> </p>
        <p>İsim: <?php echo $Lastname ?> </p>
        <p>İsim: <?php echo $Phone ?> </p>
        <p>İsim: <?php echo $Email ?> </p>
        <p>İsim: <?php echo $Message ?> </p>
        <a href="contact.php"><button class="btn">Geri Dön</button></a>
    </div>
</div>
    </section>
    
</body>
</html>