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
    <title>TAROT</title>
</head>

<body>
<?php include "navbar.php" ?>    
    <main>
        <h1 class="standardHeader">Hallo & Welkom</h1>
        <section id="mainSection">

<?php if (isset($_SESSION['tarotLogin']) && ($_SESSION['tarotLogin'] == true)) {
    echo 
    '<div id="loginPart">
    <form id="logoutFunction" method="get" action="index.php">
    <p class="standardText">Thank you,<br>for logging in</p>
    <input type="hidden" name="logoutFunction" value="tarotData">
    <button id="logoutButton">LOGOUT</button>
    </form>
    </div>';
} else {
    ?>
    <div id="loginPart">
        <form id="loginFunction" method="post" action="userdata.php">
        <p>LOGIN</p>
        <label for="">Username</label>
        <input type="text" name="username"><br>
        <label for="">Password</label>
        <input type="password" name="password">
        <button>LOGIN</button>
        <p id="errorMessage">
        <?php if (isset($_SESSION["error"])) {
            echo $_SESSION["error"];
            $_SESSION['error'] = "";
        }
        ?>
    </p> 
        </form>
</div> 
<?php } ?>
    <span id="otherPart"> 
    <p class="standardText">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti magnam unde, aliquam expedita, facere aliquid, ipsam quia repellat laboriosam quisquam facilis alias at libero commodi eius. Corrupti, recusandae. Sapiente ullam vel doloribus tempore, facilis, nam assumenda quidem at possimus commodi maiores, voluptatem voluptas! Similique facilis numquam veritatis laudantium quos cum error animi in impedit quas libero architecto aut cumque, consequuntur sequi possimus voluptatem saepe voluptatum? Optio corrupti minima debitis hic atque animi dignissimos molestiae, pariatur, adipisci expedita repellat aliquid aperiam culpa vitae, dolore quos rerum facere ut! Mollitia numquam illo, explicabo fugit aliquid laudantium aperiam recusandae esse, fugiat quisquam hic voluptatibus inventore provident, soluta repudiandae enim nostrum deserunt id corrupti doloribus. Tempora quasi laudantium magni beatae, aperiam voluptatem facilis. Quasi, fugit excepturi! A sint labore dolorum similique nihil est reprehenderit praesentium nulla aperiam rerum culpa iusto adipisci quas voluptate dolorem delectus, quod in consectetur tempora quo sit. Eligendi, nam unde.
    </p>
    </span>
</section>
    </main>
</body>

</html>
