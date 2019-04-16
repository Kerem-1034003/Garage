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
$autokenteken = $_POST["autokentekenvak"];

require_once "gar-connect.php";

$autos = $conn->prepare("
select    autokenteken,
          automerk,
          autotype,
          autokmstand,
          klantid
from      auto
where     autokenteken = :autokenteken
");
$autos->execute(["autokenteken" => $autokenteken]);

echo "<table>";
foreach($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"] ."</td>";
    echo "<td>" . $auto["automerk"] ."</td>";
    echo "<td>" . $auto["autotype"] ."</td>";
    echo "<td>" . $auto["autokmstand"] ."</td>";
    echo "<td>" . $auto["klantid"] ."</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>

</body>
</html>