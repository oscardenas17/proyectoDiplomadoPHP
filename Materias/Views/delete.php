<?php
    require_once('../../Usuarios/Models/Usuarios.php');
    $usuariosModelo = new usuarios();
    $usuariosModelo->validateSession();

    $Id = $_GET['Id'];
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

<h1>Eliminar Materia</h1>
<form method="POST"  action="../Controllers/delete.php">

    <input type="hidden" name="Id" value="<?php echo $Id?>">

    <p>¿deseas eliminar este Materia?</p>

    <input type="submit" value="Eliminar Materia">
</form>
    
</body>
</html>