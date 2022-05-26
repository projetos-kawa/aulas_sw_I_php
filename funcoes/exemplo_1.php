<?php
echo "FUNÇÃO SEM RETORNO E SEM PARAMETRO<br>";
    function teste(){
        echo "Kawã";

    }
    teste();
    echo "<hr>";


echo 'FUNÇÃO SEM RETORNO E COM PARAMETRO<br>';
    function teste2($a){
        echo $a;
    }
// A VARIÁVEL $a TEM ESCOPO LOCAL
    teste2("BOM DIA");
    echo "<br>";
    teste2("Oi galera");  
    echo "<hr>";

echo "FUNÇÃO COM RETORNO E SEM PARAMETRO <br>";
    function teste3(){
        $b = 'Kawã';
        return $b;
    }
    $resultado = teste3();
    echo $resultado;

    echo "<hr>";


echo "FUNÇÃO COM RETORNO E COM PARAMETRO <br>";

    function teste4($x, $y){
        $soma = $x + $y;
        return $soma;
    }

    $num1 = 10;
    $num2 = 20;

    $result = teste4($num1,$num2);
    echo "A soma é $result";


?>