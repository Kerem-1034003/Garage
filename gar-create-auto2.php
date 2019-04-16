<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
    <link rel="stylesheet" href="styleg.css">
</head>

<body>
<header>
<h1>Garage create auto 2</h1>
<p>
    Een auto toevoegen aan de tabel
    auto in de database garage
</p>
</header>

<?php

$klantid       = $_POST["klantidvak"];
$autokenteken     = $_POST["autokentekenvak"];
$automerk    = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand   = $_POST["autokmstandvak"];

require_once "gar-connect.php";

$sql = $conn->prepare(" INSERT INTO auto VALUE 
                        (
                        :autoid, :autokenteken, :automerk,
                        :autotype, :autokmstand
                        )
                     ");
$sql-> execute([
    "autoid" => $klantid,
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand
]);

echo "De auto is toegevoegd<br/>";
echo "<a href= 'gar-menu.php'> Terug naar het menu </a>";
?>

</body>
</html>