<?php
  

/**
 * esta clase nos permite hacer una conexion con la base de datos
 */
class Database{
    public $host ='localhost'; //servidor
    public $user ='root';//usuaio
    public $pass ='';//contraseña de phpmyadmin
    public $db = 'matriculas';//base de datos
    public $conexion;

    function connectToDatabase(){
       $this->conexion = mysqli_connect( $this->host, $this->user, $this->pass, $this->db );


        if (mysqli_connect_error() ){
            echo 'error de conexion' . mysqli_connect_error();
        }

        return $this->conexion;
    }

}

?>