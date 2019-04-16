<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>gar-read-klant.php</title>
    <link rel="stylesheet" href="styleg.css">
</head>

<body>
<header>
<h1>
    Garage read klant
</h1>

<p>
    Dit zijn alle gegevens uit de tabel klanten van de database garage.
</p>
</header>
<?php
require_once "gar-connect.php";

$klanten = $conn->prepare("
        select   klantid,
                 klantnaam,
                 klantadres,
                 klantpostcode,
                 klantplaats
         from  klant        
");
$klanten->execute();
 echo "<table class='readklant'>";
 foreach ($klanten as $klant)
 {
     echo "<tr>";
     echo "<td>" . $klant ["klantid"]    ."</td>";
     echo "<td>" . $klant ["klantnaam"]    ."</td>";
     echo "<td>" . $klant ["klantadres"]    ."</td>";
     echo "<td>" . $klant ["klantpostcode"]    ."</td>";
     echo "<td>" . $klant ["klantplaats"]    ."</td>";
     echo "</tr>";
 }
 echo "</table>";

 echo "<a class='readlink' href= 'gar-menu.php'> terug naar het menu </a>";

?>

</body>
</html>