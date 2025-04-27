<?php
/*
Crie um script que recebe um número e exibe a tabuada de 1 a 10 dele.

*/

$num2 = 2;
$num5 = 5;
$num7 = 7;

function multiplication($num){
    for ($i=1; $i < 11; $i++) { 
        echo "$num" * "$i". "<br>";
    }
}

multiplication($num5)



?>