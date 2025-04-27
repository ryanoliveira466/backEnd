<?php

class StonesController{

    public static function index(){
        include 'Model/StonesModel.php';

        $model = new StonesModel();
        $model->getAllRows();

        include 'View/modulos/stones/ListStones.php';
        
    }

    public static function form(){

        include 'Model/StonesModel.php';

        $model = new StonesModel();

        // var_dump(($model));
        //isset() is a PHP function used to check 
        //if a variable is set and is not null. It returns true if the variable exists and has a value other than null, and false if the variable is either not set or is null.
        //Returns true if the variable is set and not null.
        //Returns false if the variable is not set or is null.

        if (isset($_GET['id'])) {
            $model = $model->getById((int) $_GET['id']);
        }

        include 'View/modulos/stones/FormStones.php';
    }

    public static function save() {
        // var_dump($_POST); comentar pois ele tem break e para o código
        include 'Model/StonesModel.php'; //Inclui a model para transportar a pessoa

        $model = new StonesModel(); //Instancia o objeto
        $model-> id = $_POST['id'];
        $model-> denomination_stone = $_POST['denomination_stone'];
        $model-> color_stone = $_POST['color_stone'];
        $model-> weight_stone = $_POST['weight_stone'];
        $model-> weight_stone_type = $_POST['weight_stone_type'];
        $model-> region_stone = $_POST['region_stone'];
        $model-> image_stone = $_POST['source_img_database'];

        $model->save();

        header("Location: /stones");

    }

    public static function delete(){
        include 'Model/StonesModel.php';

        $model = new StonesModel();
        $model->delete((int) $_GET['id']);

        header("Location: /stones");
    }

}

?>