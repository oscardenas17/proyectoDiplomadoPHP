<?php

    require_once('../Models/Usuarios.php');

    if($_POST){
        $Usuario = $_POST['Usuario'];
        $Password = $_POST['Contrasena'];

        $objUsuarios = new Usuarios();

        if($objUsuarios->login($Usuario, $Password)){
            header('Location: ../../Estudiantes/Views/index.php');
        }else{
            header('Location: ../../index.php');
        }

    }else{
        header('Location: ../../index.php');
    }



?>