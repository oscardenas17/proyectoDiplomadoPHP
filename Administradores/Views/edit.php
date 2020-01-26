
<?php
    require_once('../../Usuarios/Models/Usuarios.php');
    require_once('../Models/Administradores.php');

    $modeloUsuarios = new Usuarios();
    $modeloAdministradores = new Administradores();
    
    $modeloUsuarios ->validateSession();
    $Id = $_GET['Id'];
    $administrador = $modeloAdministradores->getById($Id);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de notas</title>
</head>
<body>

    <h1>Editar administrador</h1>
    <form method="POST" action="../Controllers/edit.php">

    <?php
        if($administrador != null){
            foreach($administrador as $info){        
    ?>

    <input type="hidden" name="Id" value="<?php echo $Id;?>">
    
    <label for="Nombre">Nombre: </label><br>
    <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre" value="<?php echo $info['NOMBRE']; ?>"><br><br>

    <label for="Apellido">Apellido: </label><br>
    <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido" value="<?php echo $info['APELLIDO']; ?>"><br><br>

    <label for="Usuario">Usuario: </label><br>
    <input type="text" name="Usuario" required autocomplete="off" placeholder="Usuario" value="<?php echo $info['USUARIO']; ?>"><br><br>

    <label for="Password">Password: </label><br>
    <input type="password" name="Password" required autocomplete="off" placeholder="Password" value="<?php echo $info['PASSWORD']; ?>"><br><br>

    <label for="Estado">Estado: </label><br>
    <select name="Estado"  required >
        <option value="<?php echo $info['ESTADO'] ?>" ><?php $info['ESTADO'] ?></option>
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select><br><br>

    <?php  
         }
        }
        ?>
    <input type="submit" value="EditarAdministrador"> 
</form>


</body>
</html>