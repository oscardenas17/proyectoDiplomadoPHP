<?php
require_once('../../Usuarios/Models/Usuarios.php');
require_once('../Models/Materias.php');

$modeloUsuarios = new Usuarios();
$modeloUsuarios ->validateSession();

$modeloMaterias = new Materias();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materias- Sistema de notas</title>
</head>
<body>
    <h1>Materias</h1>
    <a href="add.php" target="_blank"> Registar Materia</a><br><br>


    <table border="1">

        <tr>
            <th>Id</th>  
            <th>Nombre</th>  
            <th>Acciones</th>
        </tr>


        <?php
            $materias = $modeloMaterias->get();
            if($materias != null){
                foreach($materias as $materia){
            
        ?>
        <tr>
            <td><?php echo $materia['ID_MATERIA']?></td>
            <td><?php echo $materia['MATERIA']?></td>
            <td>
                <a href="edit.php?Id=<?php echo $materia['ID_MATERIA']?>" target="_blank">Editar</a>
                <a href="delete.php?Id=<?php echo $materia['ID_MATERIA']?>" target="_blank">Eliminar</a>
            </td>
        </tr>
    <?php
                }
            }
    ?>


    </table>

    <label for=""></label>
</body>
</html>