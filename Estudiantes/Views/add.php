<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de notas</title>
</head>
<body>
    <h1>Registrar estudiante</h1>

    <form method="POST" action="../Controllers/add.php">
    
        <label for="Nombre">Nombre: </label> <br> 
        <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre"><br> <br> 

        <label for="Apellido">Apellido: </label> <br> 
        <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido"><br> <br> 

        <label for="Documento">Documento: </label> <br> 
        <input type="text" name="Documento" required autocomplete="off" placeholder="Documento de identidad"><br> <br> 

        <label for="Correo">Correo: </label> <br> 
        <input type="email" name="Correo" required autocomplete="off" placeholder="Correo"><br> <br> 

        <label for="Materia">Materia: </label> <br>
        <select name="Materia" required id="">
            <option value="" disabled>Seleccione</option>
            <option value="Ciencias">Español</option>
            <option value="Ciencias">Ciencias</option>
        </select> <br><br>

        <label for="Docente">Docente: </label> <br>
        <select name="Docente" required id="">
            <option value="" disabled>Seleccione</option>
            <option value="Luis">Luis</option>
            <option value="Lucy">Lucy</option>
        </select> <br><br>

        <label for="Promedio">Promedio: </label> <br> 
        <input type="number" name="Promedio" required autocomplete="off" placeholder="Promedio"><br> <br> 

        <input type="submit" value="Registrar Estudiante">
       
    
    </form>



</body>
</html>