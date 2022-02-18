<?php
include_once '../../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : '';
$apellido1 = (isset($_POST['apellido1'])) ? $_POST['apellido1'] : '';
$apellido2 = (isset($_POST['apellido2'])) ? $_POST['apellido2'] : '';
$nacionalidad = (isset($_POST['nacionalidad'])) ? $_POST['nacionalidad'] : '';
$bio = (isset($_POST['bio'])) ? $_POST['bio'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO autor (nombres, apellido1, apellido2, nacionalidad, bio) VALUES ('$nombres', '$apellido1', '$apellido2', '$nacionalidad', '$bio') ";           
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, nombres, apellido1, apellido2, nacionalidad, bio FROM autor ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE `autor` SET `nombres` = '$nombres', `apellido1` = '$apellido1', `apellido2` = '$apellido2', `nacionalidad` = '$nacionalidad', `bio` = '$bio' WHERE `autor`.`id` = $id ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id,nombres, apellido1, apellido2, nacionalidad, bio FROM autor ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM autor WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id,nombres, apellido1, apellido2, nacionalidad, bio FROM autor ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
