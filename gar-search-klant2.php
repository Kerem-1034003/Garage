<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-search-klant2.php</title>
    <link rel="stylesheet" href="styleg.css">
</head>
<body>
<header>
<h1>garage zoek op klantid 2 </h1>
</header>
<?php
$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$klanten = $conn->prepare("
select    klantid,
          klantnaam,
          klantadres,
          klantpostcode,
          klantplaats
from      klant
where     klantid = :klantid
");
$klanten->execute(["klantid" => $klantid]);

echo "<table>";
foreach($klanten as $klant)
{
    echo "<tr>";
    echo "<td>" . $klant["klantid"] ."</td>";
    echo "<td>" . $klant["klantnaam"] ."</td>";
    echo "<td>" . $klant["klantadres"] ."</td>";
    echo "<td>" . $klant["klantpostcode"] ."</td>";
    echo "<td>" . $klant["klantplaats"] ."</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>

</body>
</html>