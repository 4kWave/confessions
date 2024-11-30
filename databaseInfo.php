<?php

$GLOBALS['dbusername'] = "root";
$GLOBALS['dbpassword'] = "";
$GLOBALS['connection'] = new mysqli("localhost", $dbusername, $dbpassword, "confessions_database");

if(mysqli_connect_errno()){
    echo "Connection failed: " . mysqli_connect_errno();
    exit();
}

function callQuery($inputQuery){
    $queryResult = $GLOBALS['connection']->query($inputQuery);
    return $queryResult;
}

?>