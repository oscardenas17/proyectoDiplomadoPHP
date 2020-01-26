<?php

require_once('../../Usuarios/Models/Usuarios.php');
require_once('../../Estudiantes/Models/Estudiantes.php');

$objUsuarios = new Usuarios();
$objUsuarios -> validateSession();

$objEstudiantes = new Estudiantes();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de notas</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php
    if($objUsuarios->getPerfil()=='Docente'){
?>
    <h1>
        <a href="#">Estudiantes</a>
        <a href="">Salir</a>
    </h1>

<?php
}else{
?>

    <h1>
    <a href="../../Administradores/Views/index.php">ADMINISTRADORES</a>
    <a href="../../Docentes/Views/index.php">DOCENTES</a>
    <a href="../../Materias/views/index.php">MATERIAS</a>
    <a href="#">Estudiantes</a>
    <a href="">Salir</a>
    </h1>
  <?php      
}
?>


    <div class="container">
        <h1 class="text-center">Estudiantes</h1>

        <button type="button" class="btn btn-success mb-5 mt-5">
            <a href="add.php" target="_blank" class="text-decoration-none font-weight-bold text-dark">Registrar Estudiante</a>
        </button>

        <div class="table-responsive table-responsive-sm">
            <table class="table table-striped table-bordered table-hover ">
            <caption>List of Students</caption>
                <thead class="thead-dark">
                    <tr>
                        <th >Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Documento</th>
                        <th>Correo</th>
                        <th>Materia</th>
                        <th>Docente</th>
                        <th>Promedio</th>
                        <th>Fecha de registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>


            <?php
                $estudiantes = $objEstudiantes->get();
                if($estudiantes != null){
                    foreach($estudiantes as $estudiante){

            ?>
                <tr class="text-center">
                    <td><?php echo $estudiante['id_estudiante']?></td>
                    <td><?php echo $estudiante['nombre']?></td>
                    <td><?php echo $estudiante['apellido']?></td>
                    <td><?php echo $estudiante['documento']?></td>
                    <td><?php echo $estudiante['correo']?></td>
                    <td><?php echo $estudiante['materia']?></td>
                    <td><?php echo $estudiante['docente']?></td>
                    <td><?php echo $estudiante['promedio']?></td>
                    <td><?php echo $estudiante['fecha_registro']?></td>

                    <td>
                        <a href="edit.php?Id=<?php echo $estudiante['id_estudiante']?>" target="_blank">Editar</a>

                        <a href="delete.php?Id=<?php echo $estudiante['id_estudiante']?>" target="_blank">Eliminar</a>
                    </td>
                </tr>

            <?php
                    }
                }
            ?>

            </table>

            </div>
     </div>  
</body>
</html>