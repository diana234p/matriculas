<?php 

 include ('../config/Database.php');

class estudiante{

    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
     $nombres = $params['nombres'];
     $apellidos = $params['apellidos'];
     $email = $params['email'];
     $escuelaproveniente = $params['escuelaproveniente'];
     $añosrepetidos = $params['añosrepetidos'];
     $imagen = $params['imagen'];

     $insert = " INSERT INTO estudiante  VALUES (NULL '$nombres','$apellidos','$email',
     '$escuelaproveniente','$añosrepetidos','$imagen')";
     return mysqli_query($this->conexion, $insert);
    
    }

    function getAll(){
        $sql="SELECT * FROM estudiante";
        return mysqli_query($this-> connexion, $sql);
    }
}
?>