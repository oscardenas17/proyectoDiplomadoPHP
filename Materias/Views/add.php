<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registar materia</title>
</head>
<body>

    <h1>Registrar materia</h1>
    <form method="POST" action="../Controllers/add.php">
        <label for="Nombre"> Nombre materia: </label>
        <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre materia"> <br><br>
        <input type="submit" value="Registrar Materia">
    </form>
    
</body>
</html>