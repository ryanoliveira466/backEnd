<?php
 
 class PessoaDAO{

    private $conexao;

    public function __construct(){
        $dsn = "mysql:host=localhost:3306;dbname=db_mvc";

        //Criptografar dados - Laravel
        $this->conexao = new PDO($dsn, 'root', 'root'); // credenciais do banco de dados
    }

    public function insert(PessoaModel $model){

        $sql = "INSERT INTO pessoa (nome, cpf, data_nascimento) VALUES (?, ?, ?)"; //String sql

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);

        $stmt->execute();

    }


    public function update(PessoaModel $model){
        $sql = "UPDATE pessoa SET nome=?, cpf=?, data_nascimento=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->id);

        $stmt->execute();


    }


    public function selectById(int $id){
        include_once 'Model/PessoaModel.php';

        $sql = "SELECT * FROM pessoa WHERE id=?";
        $stmt = $this->conexao->prepare($sql);
        

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject("PessoaModel");
        

    }


    public function select(){

        $sql = "SELECT * FROM pessoa"; //String sql
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function delete(int $id){

        $sql = "DELETE FROM pessoa WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);
        $stmt->execute();

    }

 }


?>