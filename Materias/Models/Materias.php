<?php

require_once('../../Conexion.php');

class Materias extends Conexion{

    public function __construct(){
        $this->conect = parent::__construct();
    }

    public function add($Materia){
        $statement = $this->conect->prepare("INSERT INTO materias (MATERIA) VALUES (:Materia)");

        $statement ->bindParam(':Materia', $Materia);

        if($statement->execute()){
            header('Location: ../Views/index.php');
        }else{
            header('Location: ../Views/add.php');
        }

    }

    public function get(){
        $rows =null;
        $statement = $this->conect->prepare("SELECT * FROM materias");
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;

    }

    public function getById($Id){
        $rows=null;
        $statement = $this->conect->prepare("SELECT * FROM materias WHERE ID_MATERIA = :Id");

        $statement ->bindParam(':Id', $Id);
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;

    }

    public function update($Id, $Materia){
        $statement = $this->conect->prepare("UPDATE materias SET MATERIA = :Materia WHERE ID_MATERIA = :Id");

        $statement ->bindParam(':Id', $Id);
        $statement ->bindParam(':Materia', $Materia);

        if($statement->execute()){
            header('Location: ../Views/index.php');
        }else{
            header('Location: ../Views/edit.php');
        }

    }

    public function delete($Id){
        $statement = $this->conect->prepare("DELETE FROM materias  WHERE ID_MATERIA = :Id");

        $statement ->bindParam(':Id', $Id);
       
        if($statement->execute()){
            header('Location: ../Views/index.php');
        }else{
            header('Location: ../Views/delete.php');
        }
        
    }

}

?>