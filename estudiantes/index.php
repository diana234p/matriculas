<?php 
include_once(('../config/config.php'));
include('estudiante.php');
$p = new estudiante ();
$data =$p->getAll ();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> listas de estudiantes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>

    <body>
          
        <div class="container">
             <h2> matricula</h2>
             <div>
                  
                 <?php 
                 
                    while( $pt=mysqli_fetch_object($data) ){
                        $date= $pt->fecha
                        echo "<div class='col'>";
                             echo"<div>";
                                 echo "<h5> <ing src'".ROOT"/images/$pt->imagen' width='50' height='50' /> $pt->nombres
                                 $st->apellidos </h5>";
                                 echo"<p><b>Fecha:</p> ".date('D', strtime($date) ).""date('M-Y H:i', strtotime ($date) )." 
                                 </p>";
                                 echo "<div text-center>";
                                   echo "<a class='btn btn-success' href='#'"> modificar </a>
                                 echo " </div>";
                            echo "</div>";
                        echo "</div>";
                    }
                 ?>

             </div>

        </div>

     </body>

</html>