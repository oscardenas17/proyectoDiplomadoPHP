<?php
require_once('../Models/Materias.php');

if($_POST){
    $modeloMaterias = new Materias();
    
    $Nombre = $_POST['Nombre'];
    $modeloMaterias ->add($Nombre);
}else{
    header('Location: ../../index.php');
}
?>