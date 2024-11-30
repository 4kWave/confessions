<?php

$dbusername = "root";
$dbpassword = "";
$connection = new mysqli("localhost", $dbusername, $dbpassword, "confessions_database");


$query = "
        SELECT user_text FROM texts
        ";
$result = $connection->query($query);


while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
    echo($row[0]);
    echo"<br>";
}

?>