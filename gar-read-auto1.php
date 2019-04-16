<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-read-auto.php</title>
    <link rel="stylesheet" href="styleg.css">
</head>

<body>
<header>
<h1>
    Garage read auto's
</h1>
<p>
    Dit zijn alle gegevens uit de tabel auto's van de database garage.
</p>
</header>
<?php
require_once "gar-connect.php";

$auto = $conn->prepare("
        select   klantid,
                 autokenteken,
                 automerk,
                 autotype,
                 autokmstand
         from  auto        
");
$auto->execute();

echo "<table class='readauto'>";
foreach ($auto as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto ["klantid"]    ."</td>";
    echo "<td>" . $auto ["autokenteken"]    ."</td>";
    echo "<td>" . $auto ["automerk"]    ."</td>";
    echo "<td>" . $auto ["autotype"]    ."</td>";
    echo "<td>" . $auto ["autokmstand"]    ."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a class='readlink' href= 'gar-menu.php'> terug naar het menu </a>";

?>

</body>
</html>