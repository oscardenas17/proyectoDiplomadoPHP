<?php
require_once('../Models/Administradores.php');

if($_POST){
    $modeloAdministradores = new Administradores();
    
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Password'];
   
    $modeloAdministradores->add($Nombre, $Apellido, $Usuario, $Password);
}else{
    header('Location: ../../index.php');
}

?> 
