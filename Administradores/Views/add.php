<?php
require_once('../../Usuarios/Models/Usuarios.php');

$modeloUsuarios= new Usuarios();
$modeloUsuarios->validateSession();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>agregar admin</title>
</head>
<body>

    <h1>Registrar administrador</h1>
    <form  action="../Controllers/add.php" method="POST">
    
    <label for="Nombre">Nombre: </label><br>
    <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre"><br><br>

    <label for="Apellido">Apellido: </label><br>
    <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido"><br><br>

    <label for="Usuario">Usuario: </label><br>
    <input type="text" name="Usuario" required autocomplete="off" placeholder="Usuario"><br><br>

    <label for="Password">Password: </label><br>
    <input type="password" name="Password" required autocomplete="off" placeholder="Password"><br><br>


    <input type="submit" value="Registar Administrador"> 

    </form>


</body>
</html>