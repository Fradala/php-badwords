<?php

    $testo = "la nonna va al mare con il nonno"


    $badword = $_GET['badword'];

    $censoredParagraph = str_ireplace($badword, " *** ", $paragraph);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

    <h1>
        parole
    </h1>

    <form action="./index.php" method="GET">
        <label for="text">Inserici parola da eliminare</label>
        <input type="text" name="parola" id="parola">
        <button type="submit">censura</button>
    </form>

    <h2>
        testo: <br>
        lunghezza: <?php echo strlen($testo); ?>
    </h2>

    <p>
        <?php echo $testo; ?>
    </p>

    <hr>
    <hr>

    <h2>
        Testo censurato: <br>
        Lunghezza: <?php echo strlen($paroleDaCensurare); ?>
    </h2>
    <p>
        <?php echo $paroleDaCensurare; ?>
    </p>


    

   
   

   

    

    
</body>
</html>

