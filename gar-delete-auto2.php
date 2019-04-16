<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-delete-auto2.php</title>
    <link rel="stylesheet" href="styleg.css">
</head>
<body>

<header>
<h1>Garage delete auto 2</h1>
</header>
<?php
$autokenteken = $_POST ["autokentekenvak"];

require_once "gar-connect.php";

$autos = $conn->prepare("
select 
       autokenteken,
       automerk,
       autotype,
       autokmstand,
       klantid
from   auto
where  autokenteken = :autokenteken          
");
$autos->execute(["autokenteken" => $autokenteken]);

echo "<Table>";
foreach ($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] ."</td>";
    echo "<td>" . $auto["autotype"] ."</td>";
    echo "<td>" . $auto["autokmstand"] ."</td>";
    echo "<td>" . $auto["klantid"] . "</td>";
    echo "</tr>";
}
echo "</table><br />";

echo "<form action='gar-delete-auto3.php'method='post'>";
echo "<input type='hidden' name='autokentekenvak' value= $autokenteken>";
echo "<input type='hidden' name='verwijdervak' value='0' >";
echo "<input type='checkbox' name='verwijdervak' value='1' >";
echo "verwijder deze klant. <br />";
echo "<input type='submit'>";
echo "</form>";

?>

</body>
</html>