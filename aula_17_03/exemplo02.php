<?php
    $nota = 5.5;

    //Aprovado se nota >6
    //Reprovado se nota >5
    //Recuperação se nota entre 5 e 6 


    if ($nota>6){
        //Comandos se verdadeiro
        echo "Aprovado";
    }
    elseif ($nota<5) {
        //Comandos se falso
        echo "Reprovado";
    }
    else{
        echo "Recuperação";
    }


?>