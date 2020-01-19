<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diplomado - sistema de notas</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<div class= "container mx-auto"  style="width: 500px;">
    <h1 class="mx-auto mt-5 text-center">Inicio de Sesión</h1>   

        <form method="POST" action="Usuarios/Controllers/login.php">
            <div class="form-group">
                <label for="Usuario">Usuario: </label>  
                <input type="text" class="form-control" name="Usuario" required="" autocomplete="off" placeholder="Ingresa tu usuario"> 
                
             </div>


            <div class="form-group">
                <label for="Contrasena">Contraseña: </label>
                <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Ingresa tu contraseña" class="form-control" >
                <small id="emailHelp" class="form-text text-muted">Nunca compartas tu contraseña.</small>
            </div>

         <div class="mx-auto text-center" style="width: 200px;">
            <button  type="submit" class="btn btn-primary " value="Iniciar sesion" >Iniciar sesión</button>
        </div>   
                

        </form>

    </div>






     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>