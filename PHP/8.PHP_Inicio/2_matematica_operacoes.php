<?php
/*
Receba dois números e os armazene em variáveis.
Exiba a soma, subtração, multiplicação e divisão entre eles.
*/

$num1 = 2;
$num2 = 2;

function math($a, $b){
    echo "$a" + "$b"."<br>";
    echo "$a" - "$b"."<br>";
    echo "$a" * "$b"."<br>";
    echo "$a" / "$b"."<br>";
}

math($num1, $num2);

?>