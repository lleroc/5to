<?php 
class Clase_Conexios{
    public $conexion;
    protected $db;
    private $server = "localhost";
    private $uid = "root";
    private $pwd = "root";
    private $base = "mecanica";

    public function Procedimiento_Conectar(){
        $this->conexion = mysqli_connect($this->server,$this->uid,$this->pwd,$this->base);
        mysqli_query($this->conexion, "SET NAMES 'utf8'")
        
    }


}




?>