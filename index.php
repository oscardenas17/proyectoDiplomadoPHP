<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diplomado - sistema de notas</title>
</head>
<body>


    <h1>Inicio de Sesión</h1>    
    <form method="POST" action="Usuarios/Controller/login.php">

        <label for="Usuario">Usuario: </label>  <br> 
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Ingresa tu usuario"> <br>

        <label for="Contrasena">Contraseña: </label><br> 
        <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Ingresa tu contraseña" > <br> 

        <input type="submit" value="Iniciar sesion" >


    </form>
</body>
</html>