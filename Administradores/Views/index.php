<?php
    require_once('../../Usuarios/Models/Usuarios.php');
    require_once('../Models/Administradores.php');

    $modeloUsuarios = new Usuarios();
    $modeloAdministradores = new Administradores();
    
    $modeloUsuarios ->validateSession();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador - Sistema de notas</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

   
<div class="container">
        <h1 class="text-center">Administradores</h1>
    <button type="button" class="btn btn-success mb-5 mt-5">
            <a href="add.php" target="_blank" class="text-decoration-none font-weight-bold text-dark">Registrar Administrador</a>
        </button>

        <div class="table-responsive table-responsive-sm">
            <table class="table table-striped table-bordered table-hover ">
            <caption>List of Admins</caption>
                <thead class="thead-dark">
         
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                 </thead>

        <?php
        $admins= $modeloAdministradores->get();
        if($admins != null){
            foreach($admins as $admin){
      
        ?>
        <tr class="text-center">
            <td><?php echo  $admin['ID_USUARIO'] ?></td>
            <td><?php echo  $admin['NOMBRE'] ?></td>
            <td><?php echo  $admin['APELLIDO'] ?></td>
            <td><?php echo  $admin['USUARIO'] ?></td>
            <td><?php echo  $admin['PERFIL'] ?></td>
            <td><?php echo  $admin['ESTADO'] ?></td>
            <td>
                <a href="edit.php?Id=<?php echo $admin['ID_USUARIO']?>" target="_Blank">Editar</a>
                 <a href="delete.php?Id=<?php echo $admin['ID_USUARIO']?>" target="_blank">Eliminar</a>   
            </td>
        </tr>

         <?php                                       
                }
            }
         ?>


    </table>
    </div>  
</body>
</html>