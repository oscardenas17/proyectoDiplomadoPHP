<?php

   /** echo $_GET['Id'];**/
require_once('../../Usuarios/Models/Usuarios.php');
require_once('../Models/Estudiantes.php');
require_once('../../Metodos.php');

 $modeloUsuarios = new Usuarios();
 $modeloUsuarios->validateSession();

 $modeloEstudiantes = new Estudiantes();
 $Id =$_GET['Id'];
 $informacionEstudiante = $modeloEstudiantes->getById($Id);

 $modeloMetodos = new Metodos();

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
    <h1>Editar estudiante</h1>

    <form method="POST" action="../Controllers/edit.php">

    <input type="hidden" name="Id" value="<?php echo $Id; ?>">

    <?php 
        if($informacionEstudiante != null){
            foreach($informacionEstudiante as $info){
        }
    ?>        
            <label for="Nombre">Nombre: </label> <br> 
            <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre" value="<?php echo $info['NOMBRE']?>"><br> <br> 

            <label for="Apellido">Apellido: </label> <br> 
            <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido" value="<?php echo $info['APELLIDO']?>"><br> <br> 

            <label for="Documento">Documento: </label> <br> 
            <input type="text" name="Documento" required autocomplete="off" placeholder="Documento de identidad" value="<?php echo $info['DOCUMENTO']?>"><br> <br> 

            <label for="Correo">Correo: </label> <br> 
            <input type="email" name="Correo" required autocomplete="off" placeholder="Correo" value="<?php echo $info['CORREO']?>"><br> <br> 

            <label for="Materia">Materia: </label> <br>
            <select name="Materia" required>
                <option value="<?php echo $info['MATERIA']?>"> <?php echo $info['MATERIA']?> </option>
                <?php           
                    $materias = $modeloMetodos->getMaterias();
                    if($materias != null){
                        foreach($materias as $materia){
                    
                ?>
                    <option value="<?php echo $materia['MATERIA']?>"><?php echo $materia['MATERIA']?></option>
                <?php           
                    }
                }
                ?>
               
            </select> <br><br>  
            <label for="Docente">Docente: </label> <br>
            <select name="Docente" required >
            <option value="<?php echo $info['DOCENTE']?>"> <?php echo $info['DOCENTE']?> </option>
               
            <?php           
                    $docentes = $modeloMetodos->getDocentes();
                    if($docentes != null){
                        foreach($docentes as $docente){
                    
                ?>
                    <option value="<?php echo $docente['NOMBRE'] .' '. $docente['APELLIDO']?>"><?php echo  $docente['NOMBRE'] .' '. $docente['APELLIDO']?></option>
                <?php           
                    }
                }
               ?>
        <?php   
        }      
        ?>   
 </select> <br><br> 


        <label for="Promedio">Promedio: </label> <br> 
            <input type="number" name="Promedio" required autocomplete="off" placeholder="Promedio" value="<?php echo $info['PROMEDIO']?>"><br> <br> 
        <input type="submit" value="Editar Estudiante">
       
   
    </form>



</body>
</html>