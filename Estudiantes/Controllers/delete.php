<?php
    require_once('../Models/Estudiantes.php');

if($_POST){
    $modeloEstudiantes = new Estudiantes();

    $Id = $_POST['Id'];
    $modeloEstudiantes->delete($Id);
}else{
    headder('Location: ../../index.php');
}

?>