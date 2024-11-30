<?php
require(__DIR__ . "/databaseInfo.php");

$textFromUser = $_POST['userInput'];


$textQuery = "
    INSERT INTO texts(user_text) 
    VALUES('$textFromUser');
";

if(callQuery($textQuery)){
    echo "Mensagem Enviada.";
}else{
    echo "Error.";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confessions</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
            font-family: 'Cutive Mono', monospace;
            font-size: 26px;
        }
    </style>
</head>

<body>
    <a href="index.php" style="color:gray">Voltar</a>

</body>

</html>