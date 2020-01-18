<?php
require_once('../Models/Estudiantes.php');

if($_POST){
    $modeloEstudiantes = new Estudiantes();

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Documento = $_POST['Documento'];
    $Correo = $_POST['Correo'];
    $Materia = $_POST['Materia'];
    $Docente = $_POST['Docente'];
    $Promedio = $_POST['Promedio'];
    $Fecha = date('Y-m-d');

    $modeloEstudiantes->add($Nombre,$Apellido,$Documento,$Correo,$Materia,$Docente,$Promedio,$Fecha);

}else{
    header('Location: ../../index.php');
}
?>