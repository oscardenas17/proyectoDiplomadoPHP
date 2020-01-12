<?php

class Conexion{

    protected $conect;
    private $driver ="mysql";
    private $host ="localhost";
    private $db ="notas";
    private $usuario ="root";
    private $contrasema ="";
    
    public function __construct(){
        try{

            $conect =new PDO("{$this->driver}:host={$this->host};dbname={$this->db}", $this->usuario, $this->contrasena);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;

        }catch(PDOException $e){
            echo "Ha surgido un error al conectarse con la BD" . $e->getMessage();
        }

    }
}

    

?>