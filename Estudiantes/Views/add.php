<?php
require_once('../../Usuarios/Models/Usuarios.php');
require_once('../../Metodos.php');


$modeloUsuarios = new Usuarios();
$modeloUsuarios->validateSession();

$modeloMetodos = new Metodos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de notas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
</head>
<body>

<div class="container">

        <h1>Registrar estudiante</h1>

        <form method="POST" action="../Controllers/add.php">
             <div class="form-group">
                <label for="Nombre">Nombre: </label> 
                <input type="text" name="Nombre" required autocomplete="off" placeholder="Nombre" class="form-control">
            </div>

            <div class="form-group">
                <label for="Apellido">Apellido: </label> 
                <input type="text" name="Apellido" required autocomplete="off" placeholder="Apellido" class="form-control">
            </div>

             <div class="form-group">
                <label for="Documento">Documento: </label> 
                <input type="text" name="Documento" required autocomplete="off" placeholder="Documento de identidad" class="form-control">
            </div>

            <div class="form-group">
                <label for="Correo">Correo: </label> 
                <input type="email" name="Correo" required autocomplete="off" placeholder="Correo" class="form-control">
            </div>    

            <div class="form-group">    
                <label for="Materia">Materia: </label> 
                <select name="Materia" required  class="form-control">
             </div> 

                <option disabled>Seleccione</option>
                    <?php 
                        $Materias = $modeloMetodos->getMaterias();
                        if($Materias != null){
                            foreach($Materias as $materia){
                    ?>
                            
                        <option value="<?php echo  $materia['MATERIA'];?>">  <?php echo $materia['MATERIA']; ?> </option>
                    <?php  
                                }
                            }
                    ?> 
                
                </select>      <br>            
            <div class="form-group">  
                <label for="Docente">Docente: </label>           
                <select name="Docente" required  class="form-control">
            </div> 

                <option disabled>Seleccione</option>
            
                    <?php
                        $Docentes = $modeloMetodos->getDocentes();
                        if($Docentes != null){
                            foreach($Docentes as $docente){

                    ?> 
                            <option value="<?php echo  $docente['NOMBRE'] . ' ' .$docente['APELLIDO']; ?>">  <?php echo  $docente['NOMBRE'] . ' ' .$docente['APELLIDO']; ?> </option>
                            <?php  
                            }
                        }
                    ?> 
                                
             
                </select> <br><br>
        
            <div class="form-group">  
                <label for="Promedio">Promedio: </label>
                <input type="number" name="Promedio" required autocomplete="off" placeholder="Promedio"  class="form-control"><br> <br> 
            </div> 

                <div class="text-center">
                    <input class="btn btn-primary" type="submit" value="Registrar Estudiante">
                </div>
            </div>
        </form>
</div>


</body>
</html>