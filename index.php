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

    <form action="./server.php" method="POST">
        <label for="text">Inserici parola da eliminare</label>
        <input type="text" name="parola" id="parola">
    </form>

    

   <?php

        
        echo $testo="la barca di mia nonna <br>"; 
        echo "Lunghezza: " . strlen($testo) . " caratteri";
       
       
   ?>
   

   

    

    
</body>
</html>

