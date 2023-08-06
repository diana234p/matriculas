<?php 
include_once('../config/config.php');
include('estudiante.php');

if (isset($_POST) && !empty($_POST) ){
    $p = new estudiante();

    if ($_FILES['imagen']['name'] !== ''){
        $_POST['imagen'] = saveImagen($_FILES);
    }

    $save = $p->save($_POST);
    if ($save){
        $mensaje = '<div class="alert-success" > estudiante registrado </div>';
    }else{
        $mensaje = '<div class="alert-danger" > error al registrar! </div>';
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <title>registrar estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <?php 
             if(isset($mensaje)){
                echo $mensaje;
             }
            ?>
            <h2 class="text-center mb-2" > REGISTRAR ESTUDIANTE</h2>
             <form method="POST" enctype="multipart/form-data">

            <div class="row mb-2" >

            <div class="col"> 
            <input type="text" name="nombres" id="nombres" placeholder="nombres del estudiante" class="form-control">
            </div>
            <div class="col">
            <input type="text" name="apellidos" id="apellidos" placeholder="apellidos del estudiante" class="form-control">
            </div>
            </div>

            <div class="row mb-2" >
            <div class="col"> 
            <input type="text" name="email" id="email" placeholder="email del estudiante" class="form-control">
            </div>
            </div>

            <div class="row mb-2" >
            <div class="col"> 
            <input type="text" name="escuelaproveniente" id="escuelaproveniente" placeholder="escuela proveniente" class="form-control">
            </div>
            <div class="col">
            <input type="number" name="añosrepetidos" id="añosrepetidos" placeholder="años repetidos" class="form-control">
            </div>
            </div>

            <div class="row mb-2" >
           
            <div class="col">
            <input type="file" name="imagen" id="imagen" class="form-control">
            </div>

            </div>

            
             <button class="btn btn-success"> REGISTRAR</button>
            </form>
        </div>
    </body>
</html>