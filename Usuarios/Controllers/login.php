<?php

    require_once('../Models/Usuarios.php');

    if($_POST){
        $Usuario = $_POST['Usuario'];
        $Password = $_POST['Contrasena'];

        $objUsuarios = new Usuarios();
        $objUsuarios->login($Usuario, $Password);

    }else{
        header('Location: ../../index.php');
    }



?>