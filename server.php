<?php
    $parola = $_GET['parola'];



?>


<h2>
    la tua parola è <?php echo $parola ?>
</h2>


<?php if($parola === cane ){
    echo '***' ;
} else {
    echo $parola;
}




?>