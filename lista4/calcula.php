<?php

$Numero1 = $_POST["Numero1"];
$Numero2 = $_POST["Numero2"];
$operacao = $_POST["operacao"];
 
    if($operacao == "Soma"){
        $resultado = $Numero1+$Numero2;
    }

    if($operacao == "Subtração"){
        $resultado = $Numero1-$Numero2;
    }

    if($operacao == "Divisão"){
        $resultado = $Numero1/$Numero2;
    }

    if($operacao == "Multiplicação"){
        $resultado = $Numero1*$Numero2;
    }

    echo "O resultado da operacação é:".$resultado;
