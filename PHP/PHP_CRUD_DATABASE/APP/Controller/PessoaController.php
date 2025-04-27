<?php

class PessoaController{

    public static function index(){
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->getAllRows();

        include 'View/modulos/pessoas/ListaPessoa.php';
        
    }

    public static function form(){

        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        // var_dump(($model));

        if (isset($_GET['id'])) {
            $model = $model->getById((int) $_GET['id']);
        }

        include 'View/modulos/pessoas/FormPessoa.php';
    }

    public static function save() {
        // var_dump($_POST); comentar pois ele tem break e para o código
        include 'Model/PessoaModel.php'; //Inclui a model para transportar a pessoa

        $model = new PessoaModel(); //Instancia o objeto
        $model-> id = $_POST['id'];
        $model-> nome = $_POST['nome'];
        $model-> cpf = $_POST['cpf'];
        $model-> data_nascimento = $_POST['data_nascimento'];

        $model->save();

        header("Location: /pessoa");

    }

    public static function delete(){
        include 'Model/pessoaModel.php';

        $model = new PessoaModel();
        $model->delete((int) $_GET['id']);

        header("Location: /pessoa");
    }

}

?>