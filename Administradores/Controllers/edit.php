<?php
require_once('../Models/Administradores.php');

if($_POST){
    $modeloAdministradores = new Administradores();
    
    $Id= $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Password'];
    $Estado = $_POST['Estado'];
   
    $modeloAdministradores->update($Id, $Nombre, $Apellido, $Usuario, $Password, $Estado);
}else{
    header('Location: ../../index.php');
}

?> 
