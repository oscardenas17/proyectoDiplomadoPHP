<?php
    require_once('../Models/Materias.php');

    if($_POST){
        $modelo = new Materias();

        $Id = $_POST['Id'];
        $modelo->delete($Id);
    }else{
        header('Location: ../../index.php');
    }
?>