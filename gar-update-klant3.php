<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-search-klant3.php</title>
    <link rel="stylesheet" href="styleg.css">
</head>
<body>

<?php

$klantid = $_POST["klantidvak"];
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];

require_once "gar-connect.php";

$sql = $conn->prepare
("
update klant set klantnaam = :klantnaam,
                 klantadres = :klantadres, 
                 klantpostcode = :klantpostcode, 
                 klantplaats = :klantplaats
            where klantid = :klantid
");
$sql->execute
([
    "klantid" => $klantid,
    "klantnaam" => $klantnaam,
    "klantadres" => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats" => $klantplaats
]);
echo "de klant is gewijzigd. <br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";

?>

</body>
</html>