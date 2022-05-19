<?php

$numeros = [1,12,50,1.2];
$qtde = count($numeros);
echo "Meu vetor tem $qtde de posições <hr>";
$total = 0;
for($i=0;$i<4;$i++){
    echo "Indice = $i ==> $numeros[$i] <br>";
    $total = $total + $numeros[$i];
    
}
echo " <hr> ";
echo "Soma total é $total <br>";
$media = $total/$qtde;
echo "A média é $media"

?>