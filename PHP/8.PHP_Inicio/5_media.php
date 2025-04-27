<?php

/* Crie uma função que receba 2 números e retorne um array
associativo contendo a média e também um indicador booleano de
aprovado/reprovado. Considere aprovado com média >= 6.
*/


$num1 = 8;
$num2 = 4;

function average($num1, $num2){

    $average = 20 * 0.60 / 2;
    $result = ($num1 + $num2) / 2;

 

 
    if ($result >= $average){
        $array = ["Nota" => $result, "Resultado" => "Aprovado"];
        echo "Nota final: " .$array["Nota"]. "<br>";
        echo "Resultado: " .$array["Resultado"]. "<br>";
    }

    else{
        $array = ["Nota" => $result, "Resultado" => "Reprovado"];
        echo "Nota final: " .$array["Nota"]. "<br>";
        echo "Resultado: " .$array["Resultado"]. "<br>";
    }
}

average($num1 , $num2);


?>