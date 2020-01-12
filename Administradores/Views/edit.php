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
    <form method="POST" action="../Controllers/edit.php"></form>

    <input type="hidden" name="Id" value="">
    
    <label for="Nombre">Nombre: </label><br>
    <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre"><br><br>

    <label for="Apellido">Apellido: </label><br>
    <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido"><br><br>

    <label for="Usuario">Usuario: </label><br>
    <input type="text" name="Usuario" required autocomplete="off" placeholder="Usuario"><br><br>

    <label for="Password">Password: </label><br>
    <input type="password" name="Password" required autocomplete="off" placeholder="Password"><br><br>

    <label for="Estado">Estado: </label><br>
    <select name="Estado"  required >
        <option value="" disabled>Seleccion</option>
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select><br><br>


    <input type="submit" value="EditarAdministrador"> 




</body>
</html>