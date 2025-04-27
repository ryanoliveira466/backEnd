<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// echo $url;
// echo "<br>";

switch ($url){
    case '/';
    echo "Página inicial - 🏠 WINDOW + .";
    break;

    case '/pessoa';
    echo "Listar pessoas - 🧑🏻‍🦲";
    PessoaController::index();
    break;

    case '/pessoa/form';
    PessoaController::form();
    break;

    case '/pessoa/form/save';
    PessoaController::save();
    break;

    case '/pessoa/delete';
    PessoaController::delete();
    break;

    default:
    echo "Error 404";
    break;
}

?>