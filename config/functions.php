<?php
function getFolderProyect(){
   
    if (strpos(__DIR__, '/') !== false){
    $folder = str_replace('/opt/lampp/htdocs/','/', __DIR__);
    }else{
    $folder = str_replace('C:\\xampp\htdocs\\','/', __DIR__);
    }

    $folder = str_replace ('config', '',$folder);
    return $folder;

}

function saveImagen($file){
 $imageName = str_replace(' ','', $file['imagen']['name']);
 $imgTmp = $file ['imagen']['tmp_name'];

 move_uploaded_file($imgTmp, $_SERVER['DOCUMENT_ROOT'].getFolderProyect().'/imagen/'.$imageName);
 return $imageName;
}
?>