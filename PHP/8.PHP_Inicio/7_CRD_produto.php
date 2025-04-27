<?php

/*
Crie um programa para cadastrar, listar e excluir produtos de uma
lista contendo nome e preço.
*/
$arrayLista = [];

function adicionarProduto($nome, $preco){
    global $arrayLista;
    array_push($arrayLista,["Nome" => $nome, "Preço" => $preco]);
}

function listarProduto(){
    global $arrayLista;
    $count = count($arrayLista);
    for ($i=0; $i < $count; $i++) { 
        echo $arrayLista[$i]["Nome"]. "<br>";
        echo $arrayLista[$i]["Preço"]. "<br>";
        echo "Index: ". $i ."<br>";
    }
}

function excluirProduto($index){
    global $arrayLista;
    echo "Deletado: ". $arrayLista[$index]["Nome"]. "<br>";
    array_splice($arrayLista, $index, 1);
    
}



adicionarProduto("Ryan", 150);
adicionarProduto("Ryna", 300);
adicionarProduto("Nayr", 500);
listarProduto();
excluirProduto(0);
listarProduto();




?>