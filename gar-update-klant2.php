<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-search-klant1.php</title>
    <link rel="stylesheet" href="styleg.css">
</head>
<body>

<header>
<h1>garage update klant2</h1>
<p>
    dit formulier wordt gebruikt om klantgegevens te wijzigen
    in de tabel klant van de database garage.
</p>
</header>
<?php
$klantid = $_POST ["klantidvak"];

require_once "gar-connect.php";

$klanten = $conn->prepare("
           select   klantid,
                    klantnaam,
                    klantadres,
                    klantpostcode,
                    klantplaats
           from     klant
           where    klantid = :klantid
                   ");
$klanten -> execute (["klantid" => $klantid]);

echo "<form action ='gar-update-klant3.php' method = 'post'>";
foreach ($klanten as $klant) {
    echo " klantid:" . $klant ["klantid"];
    echo " <input type='hidden' name= 'klantidvak' ";
    echo " value=' " . $klant["klantid"] . " '> <br /> ";

    echo " klantnaam: <input type='text' ";
    echo " name = 'klantnaamvak' ";
    echo " value = '" . $klant["klantnaam"] . "' ";
    echo "> <br />";

    echo " klantadres: <input type='text' ";
    echo " name = 'klantadresvak' ";
    echo " value = '" . $klant["klantadres"] . "' ";
    echo "> <br />";

    echo " klantpostcode: <input type='text' ";
    echo " name = 'klantpostcodevak' ";
    echo " value = '" . $klant["klantpostcode"] . "' ";
    echo "> <br />";

    echo " klantplaats: <input type='text' ";
    echo " name = 'klantplaatsvak' ";
    echo " value = '" . $klant["klantplaats"] . "' ";
    echo "> <br />";

}
    echo  "<input type ='submit'>";
echo "</form>";

?>

</body>
</html>
