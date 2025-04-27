<?php
/*
Crie um array de usuários onde cada item tem nome e idade. Depois, exiba os dados formatados.
Exemplo de saída:
Usuário: Ana, Idade: 22
Usuário: Pedro, Idade: 30
Usuário: Julia, Idade: 27
*/

$arrayUsuarios = [["Nome" => "Anna", "Idade" => 22], ["Nome" => "Pedro", "Idade" => 30] ,["Nome" => "Julia", "Idade" => 27]];

function listar(){
    global $arrayUsuarios;
    foreach ($arrayUsuarios as $value) {
        echo "Idade: ". $value["Nome"]. ",  Nome: ". $value["Idade"] . "<br>";
    }
}

listar();
