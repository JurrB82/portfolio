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
    <title>SPREADS</title>
</head>
<body>

<?php include "navbar.php"?>

<main id="mainSpreads">

<section id="selectionBox">
<nav id="tarotSelector">
<form method="post">
    <h3>spreads</h3>
    <input <?= isset($_POST["spread"]) && $_POST["spread"] == "three" ? "checked" : "" ?> type="radio" id="three" name="spread" value="three">
    <label for="three">Three cards</label><br>
    <input <?= isset($_POST["spread"]) && $_POST["spread"] == "celticCross" ? "checked" : "" ?> type="radio" id="celticCross" name="spread" value="celticCross">
    <label for="celticCross">Celtic Cross</label><br>
    <input <?= isset($_POST["spread"]) && $_POST["spread"] == "catLover" ? "checked" : "" ?> type="radio" id="catLover" name="spread" value="catLover">
    <label for="catLover">Cat Lover Spread</label><br>
    <input <?= isset($_POST["spread"]) && $_POST["spread"] == "wtf" ? "checked" : "" ?> type="radio" id="wtf" name="spread" value="wtf">
    <label for="wtf">What the Actual F*ck?!</label><br><br>
    <button>submit</button>
</nav>
</form>
</section>

<section id="spreadField" class="<?= isset($_POST["spread"]) ? $_POST["spread"] : "" ?>">
<?php include "tarotRandomizer.php";?>
</section>
</main>    
</body>
</html>
