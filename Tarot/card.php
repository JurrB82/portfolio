<?php 
session_start();
if (isset($_GET['logoutFunction'])) {
    $_SESSION['tarotLogin'] = false;
}
include "tarotRandomizer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="witchHat.ico"/> 
    <title><?=$tarotArrayValues[$_GET['cardName']]['name']?></title>
</head>

<body>
<?php include "navbar.php" ?>    
    <main id="mainCardPage">
<?php 
if (isset($_GET['cardName'])) {
    ?>
    <section>
    <h1 class="standardHeader" id="headerCardPage">
        <?=$tarotArrayValues[$_GET['cardName']]['name']?>
    </h1>
    <p class="standardText" id=textCardPage>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea est labore deserunt consectetur maiores ad exercitationem corrupti, aliquam velit in repudiandae saepe earum facere illum ex delectus illo ducimus suscipit adipisci culpa vel distinctio modi obcaecati quis? Officiis eligendi autem sapiente cumque?
    </p>
    <img class="underConstructionCat" src="under_construction.jpg" alt="">
    <figcaption>Under construction until further notice.</figcaption>
    </section>
    <section>
    <figure id="imageCardPage">
    <img src='./cards/<?=$tarotArrayValues[$_GET['cardName']]['image']?>'>
    <figcaption id="tarotFigcaption"><?=$tarotArrayValues[$_GET['cardName']]['keyWords']?></figcaption>
    </figure>
    </section>
    <?php
} else {
    ?> <p>"We are the Borg.<br> 
        Lower your shields and surrender your ships.<br>
        We will add your biological and technological<br> 
        distinctiveness to our own. Your culture will<br>
        adapt to service us. Resistance is futile."</p>
    <?php
}
?>
    </main>
</body>

</html>
