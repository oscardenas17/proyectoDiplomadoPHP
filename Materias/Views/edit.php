<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar materia</title>
</head>
<body>

    <h1>Editar materia</h1>
    <form method="POST" action="../Controllers/add.php">

        <input type="hidden" name="Id" value="">

        <label for="Nombre"> Nombre materia: </label>
        <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre materia"> <br><br>
        <input type="submit" value="Editar Materia">
    </form>
    
</body>
</html>