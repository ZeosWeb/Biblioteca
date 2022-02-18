<?php
include_once '../../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$id_editorial = (isset($_POST['id_editorial'])) ? $_POST['id_editorial'] : '';
$dia = (isset($_POST['dia'])) ? $_POST['dia'] : '';
$mes = (isset($_POST['mes'])) ? $_POST['mes'] : '';
$anio = (isset($_POST['anio'])) ? $_POST['anio'] : '';
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO periodicos (id_editorial, dia, mes, anio, descripcion) VALUES ($id_editorial, $dia, $mes, $anio, '$descripcion') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, id_editorial, dia, mes, anio, descripcion FROM periodicos ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE `periodicos` SET `id_editorial` = $id_editorial, `dia` = $dia, `mes` = $mes, `anio` = $anio, `descripcion` = '$descripcion'  WHERE `periodicos`.`id` = $id ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id, id_editorial, dia, mes, anio, descripcion FROM periodicos ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM periodicos WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id, id_editorial, dia, mes, anio, descripcion FROM periodicos ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
