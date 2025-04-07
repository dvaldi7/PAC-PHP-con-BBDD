<?php
$con = mysqli_connect("localhost", "root", "", "", 3308);
if (!$con) die("Error conexión: " . mysqli_connect_error());

echo "Conexión básica OK<br>";

$dbs = mysqli_query($con, "SHOW DATABASES");
while ($db = mysqli_fetch_array($dbs)) {
    echo $db[0] . "<br>";
}
?>
