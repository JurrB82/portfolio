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
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="witchHat.ico"/> 
    <title>Kleine Arcana deel 1</title>
</head>
<body>
<?php include "../navbar.php" ?>  

<h1>Het leren lezen van de Kleine Arcana, deel 1:</h1>

<p>
    Waarbij de Grote Arcana kaarten veel meer onderbewuste archetypen symboliseren,
    wijkt de Kleine Arcana hier wat van af. De Kleine Arcana is bevat in totaal 56
    kaarten en is voor sommigen dan wat lastig om te leren, omdat het erg talrijk is.
    Ook zijn de afbeeldingen minder 'voor de hand liggend' vergeleken met de Grote Arcana.
    Het leren lezen van de Kleine Arcana heb ik in tweeën opgesplitst, omdat de 
    hofkaarten weer afwijken van de andere, numerieke Kleine Arcana kaarten.

    Voor de numerieke Kleine Arcana kaarten heb ik het volgende advies, en hieronder 
    ook een uitwerking met mijn interpretatie. 
    Het enige wat een efficiënte kaartlezer moet weten is de symbolieke waarden van 
    numerologie en de vier elementen (water, lucht, aarde en vuur).
    Combineer deze twee tezamen en je hebt een handig ezelsbruggetje.
</p>
<table id=smallArcanaTable>
    <tr>
        <th>

        </th>
        <th>
        <b>Kelken</b><br>
        Emotie<br>
        Gevoel & Intuïtie
        </th>
        <th>
        <b>Staven</b><br>
        Passie<br>
        Motivatie & Inspiratie
        </th>
        <th>
        <b>Pentakels</b><br>
        Materie<br>
        Groei & financiën 
        </th>        
        <th>
        <b>Zwaarden</b><br>
        Gedachte<br>
        Communicatie & Ideeën
        </th>
    </tr>

    <tr>
    <td>
        <b>Aas</b><br>
        Het eerste Inzicht<br>
        een begin, potentie:
    </td>
    <td>
        connectie & voorgevoel
    </td>
    <td>
        groei & nieuwe mogelijkheden
    </td>
    <td>
        overvloed & baankansen
    </td>
    <td>
        waarheidsvinding & eureka-momenten
    </td>    
    </tr>

    <tr>
    <td>
        <b>Twee</b><br>
        de Keuze<br>
        balans & dualiteit: 
    </td>
    <td>
        partnerschap & eigenliefde
    </td>
    <td>
        planning & ontdekkingen
    </td>
    <td>
        prioriteiten & tijdsmanagement
    </td>
    <td>
        belsuitelooshied & keuzes maken
    </td>    
   
    </tr>
    <tr>
    <td>
        <b>Drie</b><br>
        de Expressie<br>
        groei & de groep: 
    </td>
    <td>
        collaboratie & vriendschap
    </td>
    <td>
        expansie & voortgang
    </td>
    <td>
        harmonie & teamwork
    </td>
    <td>
        hartenzeer & rouw
    </td>    
   
    </tr>
    <tr>
    <td>
        <b>Vier</b><br>
        het Structuur:<br>
        manifestatie & stagnatie
    </td>
    <td>
        meditatie & terugtrekken
    </td>
    <td>
        celebratie & thuiskomst
    </td>
    <td>
        sparen & schaarste
    </td>
    <td>
        rust & contemplatie
    </td>    
   
    </tr>
    <tr>
    <td>
        <b>Vijf</b><br>
        de Verandering:<br>
        voortgang & conflict
    </td>
    <td>
        spijt & teleurstelling
    </td>
    <td>
        conflict & meningsverschil
    </td>
    <td>
        armoede & isolatie 
    </td>
    <td>
        conflict & verlies
    </td>    
   
    </tr>
    <tr>
    <td>
        <b>Zes</b><br>
        het Aanpassen:<br>
        harmonie & richtlijnen
    </td>
    <td>
        het verleden & herinneringen
    </td>
    <td>
        zelfvertrouwen & succes 
    </td>
    <td>
        genereus zijn & delen 
    </td>
    <td>
        transitie & verandering
    </td>    
   
    </tr>
    <tr>
    <td>
        <b>Zeven</b><br>
        de Ontdekking:<br>
        introspectie & revaluatie
    </td>
    <td>
        keuzes & illusies
    </td>
    <td>
        uitdagingen & competitie
    </td>
    <td>
        lange termijn & investeringen
    </td>
    <td>
        verraad & deceptie
    </td>    
   
    </tr>
    <tr>
    <td>
        <b>Acht</b><br>
        de Vervulling:<br>
        wedergeboorte & overgang
    </td>
    <td>
        belsuiteloosheid & escapisme
    </td>
    <td>
        beweging & aktie 
    </td>
    <td>
        leren e& zelf-ontplooing
    </td>
    <td>
        restricite & slachtoffer-mentaliteit
    </td>    
   
    </tr>
    <tr>
    <td>
        <b>Negen</b><br>
        de Prestatie:<br>
        voltooiing & prestaties
    </td>
    <td>
        gratitude & genot 
    </td>
    <td>
        doorzettingsvermogen & moed 
    </td>
    <td>
        overvloed & luxe
    </td>
    <td>
        bezorgdheid & nachtmerries
    </td>    
   
    </tr>
    <tr>
    <td>
        <b>Tien</b><br>
        het Einde:<br>
        cycli & nieuw begin 
    </td>
    <td>
        onvoorwaardelijke liefde & harmonie
    </td>
    <td>
        lasten & verantwoordelijkheden
    </td>
    <td>
        financiëel succes & rijkdom
    </td>
    <td>
        pijnlijk einde & crisis
    </td>    
   
    </tr>
    
</table>

</body>
</html>
