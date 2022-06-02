<?php

session_start();
if($_SESSION['logado'] != 1){
    header("Location: index.html");
}

echo "Você esta em uma página restrita";
echo "<a href='logout.php'>SAIR</a>";



