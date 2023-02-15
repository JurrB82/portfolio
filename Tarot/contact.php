<?php 
session_start();
if (isset($_GET['logoutFunction'])) {
    $_SESSION['tarotLogin'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="witchHat.ico"/> 
    <title>CONTACT</title>
</head>
<body>
    <?php include "navbar.php"?>

    <img class="underConstructionCat" src="under_construction.jpg" alt="">
    <figcaption>Under construction until further notice.</figcaption>
    <p>hier komt contact-informatie</p>
    
    
    
</body>
</html>
