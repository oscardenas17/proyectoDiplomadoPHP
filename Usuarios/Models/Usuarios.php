<?php

require_once('../../Conexion.php');
session_start();

class Usuarios extends Conexion{

    public function __construct(){
        $this->conect = parent::__construct();
    }

    public function login($Usuario, $Password){
        
        $statement = $this->conect->prepare("SELECT * FROM usuarios WHERE USUARIO = :Usuario AND PASSWORD = :password" );
        $statement->bindParam('Usuario:', $Usuario);
        $statement->bindParam('Password:', $Password);
        $statement->execute();

        if($statement->rowCount()== 1){
            $result = $statement->fecth();
            $_SESSION['NOMBRE']= $result['NOMBRE'] . " " . $result['APELLIDO'];
            $_SESSION['ID']= $result['ID_USUARIO'];
            $_SESSION['PERFIL']= $result['PERFIL'];
            return true;
        }
        return false;
    }



    /*Para llamado de las variables de sesion*/
    public function getNombre(){
        return $_SESSION['NOMBRE'];
    }

    public function getId(){
        return $_SESSION['ID'];
    }

    public function getPerfil(){
        return $_SESSION['PERFIL'];
    }


    /*Validar session*/

    public function validateSession(){
        if($_SESSION['ID'] ==null){
            header('Location: ../../index.php');
        }
    }

    public function validateSessionAdministrador(){
        if($_SESSION['ID'] != null){
            if($_SESSION['PERFIL'] == 'Docente'){
                header('Location: ../../Estudiantes/views/index.php')
            }else{
                header('Location: ../../index.php');
            }
        }
    }


}

?>