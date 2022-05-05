<?php
    
    $numero = $_POST['num'];
    $res = 1;
    for($cont=$numero;$cont>=1;$cont--){
        $res *= $cont;
        echo "$numero * $cont = $res <br>";
    }
    
?>