<?php
include_once '../../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$id_karde = (isset($_POST['id_karde'])) ? $_POST['id_karde'] : '';
$numero = (isset($_POST['numero'])) ? $_POST['numero'] : '';
$anio = (isset($_POST['anio'])) ? $_POST['anio'] : '';
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO revistas (id_karde, numero, anio, descripcion) VALUES ($id_karde, $numero, $anio, '$descripcion') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, id_karde, numero, anio, descripcion FROM revistas ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE `revistas` SET `id_karde` = $id_karde, `numero` = $numero, `anio` = $anio, `descripcion` = '$descripcion'  WHERE `revistas`.`id` = $id ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id, id_karde, numero, anio, descripcion FROM revistas ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM revistas WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id, id_karde, numero, anio, descripcion FROM revistas ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
