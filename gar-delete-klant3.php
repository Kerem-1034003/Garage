<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-delete-klant3.php</title>
    <link rel="stylesheet" href="styleg.css">
</head>
<body>
<header>
<h1>Garage delete klant 3</h1>
</header>
<?php
$klantid = $_POST ["klantidvak"];

$verwijderen = $_POST ["verwijdervak"];

if ($verwijderen)
{
    require_once "gar-connect.php";
    $sql = $conn->prepare("
    delete from klant
    where klantid = :klantid
    ");
    $sql->execute(["klantid" => $klantid]);
    echo "de gegevens zijn verwijderd. <br />";

}
else
    {
        echo "de gegevens zijn niet verwijderd. <br />";
    }
    echo "<a href='gar-menu.php'>terug naar het menu. </a>";
?>

</body>
</html>
