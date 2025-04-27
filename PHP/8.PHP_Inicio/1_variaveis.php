<?php
/*
Declare as variáveis $nome, $idade, $altura e $casado com valores fictícios.
Exiba os valores usando echo.
Exiba o tipo de cada variável
*/

$nome = "Pablo";
$idade = 42;
$altura = 1.75;
$casado = true;

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Altura: $altura <br>";
echo "Casado: ". ($casado ? "Sim" : "Não")."<br>";

var_dump($nome, $idade, $altura, $casado);


?>