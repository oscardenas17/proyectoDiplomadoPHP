<?php

class Conexion{

    protected $conect;
    private $driver ="mysql";
    private $host ="localhost";
    private $database ="notas";
    private $usuario ="root";
    private $contrasena ="";
    
    public function __construct(){
        try{

            $conect = new PDO("{$this->driver}:host={$this->host};dbname={$this->database}", $this->usuario, $this->contrasena);
            $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conect;

        }catch(PDOException $e){
            echo "Ha surgido un error al conectarse con la BD" . $e->getMessage();
        }

    }
}

    

?>