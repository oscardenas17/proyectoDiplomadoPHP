<?php
require_once('../Models/Administradores.php');

if($_POST){
    $modeloAdministradores = new Administradores();
    
    $Id= $_POST['Id'];
    
   
    $modeloAdministradores->delete($Id);
}else{
    header('Location: ../../index.php');
}

?> 
