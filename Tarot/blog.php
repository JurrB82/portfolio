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
    <title>BLOG</title>
</head>

<body>
<?php include "navbar.php" ?>    
    <main>
        <h1 class="standardHeader">Blog</h1>
        <p class="standardText">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla recusandae eaque cumque dolorem necessitatibus provident eligendi beatae animi consectetur sapiente.
        </p>
        <a href="blog/kleineArcanaDeel1.php">
            <h3 class="standardSubHeader">Het leren lezen van de Kleine Arcana deel 1:</h3>
            </a>
            <p class="standardText">
                Leer de Kleine Arcana lezen met een paar handige tips
            </p>
            <img class="underConstructionCat" src="under_construction.jpg" alt="">
    <figcaption>Under construction until further notice.</figcaption>
    </main>
</body>

</html>
