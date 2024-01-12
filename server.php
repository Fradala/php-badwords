<?php
    $parola = $_POST['parola'];

    echo $testo="la barca di mia nonna <br>"; 
    echo "Lunghezza: " . strlen($testo) . " caratteri";
    $testoNuovo=str_replace($testo, $parola , '***');
       


    
?>








