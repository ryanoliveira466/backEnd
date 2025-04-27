<?php

 class StonesModel{
    public $id, $denomination_stone, $color_stone, $weight_stone, $weight_stone_type, $region_stone, $image_stone;

    public $rows;

    public function save(){
        include 'DAO/StonesDAO.php';

        $dao = new StonesDAO();

        

        if (empty($this->id)) {
            $dao->insert($this);
        }
        else{
            $dao->update($this);
        }
        
    }

    
    public function getAllRows(){
        include 'DAO/StonesDAO.php';

        $dao = new StonesDAO();

        $this->rows = $dao->select();
        
    }


    public function getById(int $id){
        include "DAO/StonesDAO.php";

        $dao = new StonesDAO();

        $obj = $dao->selectById($id);

        // return ($obj) ? $obj : new PessoaModel();

        if ($obj) {
            return $obj;
        }
        else{
            return new StonesModel();
        }

        // return $dao->selectById($id);

    }


    public function delete(int $id){

        include 'DAO/StonesDAO.php';

        $dao = new StonesDao();
        $dao->delete($id);

    }



 }

?>