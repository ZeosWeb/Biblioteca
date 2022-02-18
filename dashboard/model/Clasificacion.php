<?php
include_once '../../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$clase = (isset($_POST['clase'])) ? $_POST['clase'] : '';
$lengua = (isset($_POST['lengua'])) ? $_POST['lengua'] : '';
$genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
$clasificacion = (isset($_POST['clasificacion'])) ? $_POST['clasificacion'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $clasificacion=strtolower($clasificacion);
        $consulta = "INSERT INTO clasificaciones (clase, lengua, genero, clasificacion) VALUES ('$clase', '$lengua', '$genero', '$clasificacion') ";           
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, clase, lengua, genero, clasificacion FROM clasificaciones ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $clasificacion=strtolower($clasificacion);
        $consulta = "UPDATE `clasificaciones` SET `clase`= '$clase', `lengua`= '$lengua', `genero`= '$genero', `clasificacion`= '$clasificacion' WHERE `clasificaciones`.`id` = $id ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id, clase, lengua, genero, clasificacion FROM clasificaciones ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM clasificaciones WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id, clase, lengua, genero, clasificacion FROM clasificaciones ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
