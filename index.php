<?php
require(__DIR__ . "/databaseInfo.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confessions</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <script src="script/index.js"></script>

    <div class="title-div">
        <p class="title">Confissões</p>
    </div>
    <form class="text-area-div" action="dbTextManager.php" method="POST">
        <input type="submit" class="confess-button" value="Enviar"></input>
        <textarea class="text-area-style" name="userInput" id="input" cols="30" rows="10"></textarea>
    </form>
    <main class="main-section" id="main-section">
        <?php

        $query = "SELECT user_text FROM texts";
        $result = $connection->query($query);


        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            $text = $row[0];
            echo "<script>createCard('$text')</script>";
        }
        ?>
    </main>


</body>

</html>