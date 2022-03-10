<?php
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $soma = $nota1 + $nota2 + $nota3;   
    $media = ($nota1 + $nota2 + $nota3)/3;

    echo "Sua média é igual à" .$media.;


?>