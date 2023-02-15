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
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="witchHat.ico"/> 
    <title>TAROT</title>
</head>

<body>
<?php include "../navbar.php" ?>    
    <main class="blogMain">
<h1>Top 5 meest gevreesde Tarot-kaarten,</h1>
<div class=blogIntro>
Er bestaan veel, heel veel verschillende soorten kaarten. Zelf heb ik er veel voorbij zien komen en ik heb zeer excentrieke kaarten in mijn handen gehad. Sommigen met prachtige illustraties, zoals The Witches Tarot. Een ander goed voorbeeld is de absuditeit van de Thoth kaarten van Crowley, deze zijn dermate abstract dat veel kaartleggers er bij wegblijven. Er bestaan kaarten met illustraties van alleen maar katten, 'stickfigures', kaarten die meer inclusief zijn en nog veel meer. 

Maar alle Tarot decks hebben een ding gemeen, sommige illustraties willen nog wel eens afschrikken, om het zacht uit te drukken. Soms is dat compleet terecht, zoals bij de Toren, of minder terecht zoals bij de Dood. Voor deze top 5 heb ik illustraties gebruikt van de Rider-Waite kaarten, vooral omdat deze herkenbaar zijn. 
Hieronder de top 5 meest (onterecht) gevreesde Tarot-kaarten. 
</div>
<h3 class=blogh3>Nummer 5: 'de Dood' </h3>
<div class="blogText">
Deze lijst zou natuurlijk incompleet zijn zonder Magere Hein. De Dood doet ons terecht denken aan onze eigen sterfelijkheid en die van anderen. Niets is voor eeuwig en alles is veranderlijk. Op de kaart zelf heeft de Dood een welgesteld persoon tot zich genomen, de Dood maakt immers geen onderscheid en komt voor iedereen. 
Wat nog wel eens over het hoofd wordt gezien is de zon die op de achtergrond opkomt. Als het leven ons een deur sluit, dan is er altijd ergens een raam om te openen. Al is het maar een klein keukenraampje. Als je er doorheen past dan is dat voldoende. Het symbool voor transformatie en vernieuwing staat dan wat mij betreft onterecht op nummer vijf. 
</div>

    </main>
</body>

</html>
