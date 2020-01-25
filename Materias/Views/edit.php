<?php
require_once('../../Usuarios/Models/Usuarios.php');
require_once('../Models/Materias.php');

$objUsuario = new Usuarios();
$objUsuario -> validateSession();

$objMateria = new Materias();
$Id= $_GET['Id'];
$infoMateria = $objMateria->getById($Id);

?>

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
    <form method="POST" action="../Controllers/edit.php">

        <input type="hidden" name="Id" value="<?php echo $Id ?>">

        <?php
        if($infoMateria != null){
            foreach($infoMateria as $info){
                  
        ?>

        <label for="Nombre"> Nombre materia: </label>
        <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre materia" value="<?php echo $info['MATERIA']?>"> <br><br>
       <?php
           }

        }
       ?>
       
        <input type="submit" value="Editar Materia">
    </form>
    
</body>
</html>