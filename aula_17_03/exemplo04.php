<?php
$sigla = "BA";
switch ($sigla)
{
    case "SP":
        echo "Você escolheu São Paulo";
        break;
    case "RJ":
        echo "Você escolheu Rio de Janeiro";
        break;
    case "MG":
        echo "Você escolheu Minas Gerais";
        break;
    default:
        echo "Não encontrei sua escolha na base de dados";
}