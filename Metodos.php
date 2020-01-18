<?php

require_once('Conexion.php');

class Metodos extends Conexion{

    public function __construct(){
        $this->conect = parent::__construct();
    }
 
    public function getMaterias(){
        $rows =null;
        $statement = $this->conect->prepare("SELECT * FROM materias");
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }


    public function getDocentes(){
        $rows =null;
        $statement = $this->conect->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Docente'");
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }


}

?>