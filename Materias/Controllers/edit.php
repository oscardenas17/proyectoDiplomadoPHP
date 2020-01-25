<?php
require_once('../Models/Materias.php');

if($_POST){
    $modeloMate = new Materias();

    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $modeloMate->update($Id,$Nombre);
}else{
    header('Location: ../../index.php');
}

?>