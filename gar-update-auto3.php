<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto3.php</title>
    <link rel="stylesheet" href="styleg.css">
</head>
<body>

<?php

$autokenteken = $_POST["autokentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];
$klantid = $_POST["klantidvak"];


require_once "gar-connect.php";

$sql = $conn->prepare
("
update auto set autokenteken = :autokenteken,
                automerk = :automerk, 
                autotype = :autotype, 
                autokmstand = :autokmstand
            where autokenteken= :autokenteken
");
$sql->execute
([
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand,
    "klantid" => $klantid
]);
echo "de klant is gewijzigd. <br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";

?>

</body>
</html>