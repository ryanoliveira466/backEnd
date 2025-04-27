<?php
 
 class StonesDAO{

    private $conexao;

    public function __construct(){
        $dsn = "mysql:host=localhost:3306;dbname=db_mvc_exercicio";

        //Criptografar dados - Laravel
        $this->conexao = new PDO($dsn, 'root', 'root'); // credenciais do banco de dados
    }

    public function insert(StonesModel $model){

        $sql = "INSERT INTO stones (denomination_stone, color_stone, weight_stone, weight_stone_type, region_stone, image_stone) VALUES (?, ?, ?, ?, ?, ?)"; //String sql

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->denomination_stone);
        $stmt->bindValue(2, $model->color_stone);
        $stmt->bindValue(3, $model->weight_stone);
        $stmt->bindValue(4, $model->weight_stone_type);
        $stmt->bindValue(5, $model->region_stone);
        $stmt->bindValue(6, $model->image_stone);

        $stmt->execute();

    }


    public function update(StonesModel $model){
        $sql = "UPDATE stones SET denomination_stone=?, color_stone=?, weight_stone=?, weight_stone_type=?, region_stone=? ,image_stone=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->denomination_stone);
        $stmt->bindValue(2, $model->color_stone);
        $stmt->bindValue(3, $model->weight_stone);
        $stmt->bindValue(4, $model->weight_stone_type);
        $stmt->bindValue(5, $model->region_stone);
        $stmt->bindValue(6, $model->image_stone);
        $stmt->bindValue(7, $model->id);

        $stmt->execute();


    }


    public function selectById(int $id){
        include_once 'Model/StonesModel.php';

        $sql = "SELECT * FROM stones WHERE id=?";
        $stmt = $this->conexao->prepare($sql);
        

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject("StonesModel");
        

    }


    public function select(){

        $sql = "SELECT * FROM stones"; //String sql
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function delete(int $id){

        $sql = "DELETE FROM stones WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);
        $stmt->execute();

    }

 }


?>