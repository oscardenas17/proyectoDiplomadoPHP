<?php

require_once('../../Conexion.php');

class Docentes extends Conexion{

    public function __construct(){
        $this->conect = parent::__construct();
    }

    public function add($Nombre, $Apellido, $Usuario, $Password){
        $statement = $this ->conect->prepare("INSERT INTO docentes (NOMBRE, APELLIDO, USUARIO, PASSWORD, PERFIL, ESTADO) VALUE (:Nombre, :Apellido, :Usuario, :Password, 'Docente', 'Activo')");
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Password', $Password);
        
        if($statement->execute()){
            header ('Location: ../Views/index.php');
        }else{
            header ('Location: ../Views/add.php');
        }
        
    }

    public function get (){
        $rows = null;
        $statement = $this->conect->prepare("SELECT * FROM docentes WHERE PERFIL = 'Docente' ");

        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;

    }

    public function getById($Id){
        $rows = null;
        $statement = $this->conect->prepare("SELECT * FROM docentes WHERE PERFIL = 'Docente' AND ID_USUARIO =:Id ");

        $statement->binParam(':Id',$Id);

        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;

    }

    public function update($Id, $Nombre, $Apellido, $Usuario, $Password, $Estado){
        $statement= $this-> conect-> prepare("UPDATE docentes SET NOMBRE = :Nombre, APELLIDO = :Apellido, USUARIO= :Usuario, PASSWORD = :Password, ESTADO = :Estado WHERE ID_USUARIO = :Id");

        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Password', $Password);
        $statement->bindParam(':Estado', $Estado);
        
        if($statement->execute()){
            header ('Location: ../Views/index.php');
        }else{
            header ('Location: ../Views/edit.php');
        }


    }

    public function delete($Id){

        $statement =$this->conect->prepare("DELETE FROM docentes WHERE ID_USUARIO = :Id");

        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            header ('Location: ../Views/index.php');
        }else{
            header ('Location: ../Views/delete.php');
        }
  
    }
}

?>

