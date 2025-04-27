<?php

include 'Controller/StonesController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// echo $url;
// echo "<br>";

switch ($url) {
    case '/';
        include 'View/modulos/stones/MainPage.php';
        break;

    case '/stones';
        StonesController::index();
        break;

    case '/stones/form';
        StonesController::form();
        break;

    case '/stones/form/save';
        StonesController::save();
        break;

    case '/stones/delete';
        StonesController::delete();
        break;

    default:
        echo "Error 404";
        break;
}

?>