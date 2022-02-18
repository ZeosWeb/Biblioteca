<?php
include_once '../../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$referencia = NULL;
$titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : '';
$id_autor = (isset($_POST['id_autor'])) ? $_POST['id_autor'] : '';
$imagen = (isset($_POST['imagen'])) ? $_POST['imagen'] : '';
$anio_pub = (isset($_POST['anio_pub'])) ? $_POST['anio_pub'] : '';
$id_editorial = (isset($_POST['id_editorial'])) ? $_POST['id_editorial'] : '';
$lugar_pub = (isset($_POST['lugar_pub'])) ? $_POST['lugar_pub'] : '';
$cantidad_ejemplares = (isset($_POST['cantidad_ejemplares'])) ? $_POST['cantidad_ejemplares'] : '';
$id_clasificacion = (isset($_POST['id_clasificacion'])) ? $_POST['id_clasificacion'] : '';
$doi = (isset($_POST['doi'])) ? $_POST['doi'] : '';
$isbn = (isset($_POST['isbn'])) ? $_POST['isbn'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta

        $obtClasif = "SELECT clasificacion FROM clasificaciones WHERE id=$id_clasificacion";
        $obtAutores = "SELECT concat_ws(' ', substr(nombres,1,1), substr(apellido1,1,3)) AS inicial FROM autor WHERE id=$id_autor";
        $resultClasif=$conexion->prepare($obtClasif);
        $resultAutores=$conexion->prepare($obtAutores);
        $resultClasif->execute();
        $dataClasif=$resultClasif->fetchAll(PDO::FETCH_ASSOC);
        $resultAutores->execute();
        $dataAutores=$resultAutores->fetchAll(PDO::FETCH_ASSOC);

        foreach ($dataClasif as $dt){
            $clasif=$dt['clasificacion'];
        }
        foreach ($dataAutores as $dtAut){
            $aut=$dtAut['inicial'];
        }
        $aut= explode(" ", $aut);

        $referencia= $clasif."<br>".$aut[0]."<br>".$aut[1];

       $consulta = "INSERT INTO libros (referencia, titulo, id_autor, imagen, anio_pub, id_editorial, lugar_pub, cantidad_ejemplares, id_clasificacion, doi, isbn) VALUES ('$referencia', '$titulo', $id_autor, '$imagen', $anio_pub, $id_editorial, '$lugar_pub', $cantidad_ejemplares, $id_clasificacion, '$doi', '$isbn') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, referencia, titulo, id_autor, imagen, anio_pub, id_editorial, lugar_pub, cantidad_ejemplares, id_clasificacion, doi, isbn FROM libros ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación

        $obtClasif = "SELECT clasificacion FROM clasificaciones WHERE id=$id_clasificacion";
        $obtAutores = "SELECT concat_ws(' ', substr(nombres,1,1), substr(apellido1,1,3)) AS inicial FROM autor WHERE id=$id_autor";
        $resultClasif=$conexion->prepare($obtClasif);
        $resultAutores=$conexion->prepare($obtAutores);
        $resultClasif->execute();
        $dataClasif=$resultClasif->fetchAll(PDO::FETCH_ASSOC);
        $resultAutores->execute();
        $dataAutores=$resultAutores->fetchAll(PDO::FETCH_ASSOC);

        foreach ($dataClasif as $dt){
            $clasif=$dt['clasificacion'];
        }
        foreach ($dataAutores as $dtAut){
            $aut=$dtAut['inicial'];
        }
        $aut= explode(" ", $aut);

        $referencia= $clasif."<br>".$aut[0]."<br>".$aut[1];
        //Arreglar Algo aqui que no envia los datos

        $consulta = "UPDATE `libros` SET `referencia` = $referencia, `titulo` = `$titulo`, `id_autor` = $id_autor, `imagen` = `$imagen`, `anio_pub` = $anio_pub, `id_editorial` = $id_editorial, `lugar_pub` = `$lugar_pub`, `cantidad_ejemplares` = $cantidad_ejemplares, `id_clasificacion` = '$id_clasificacion', `doi` = `$doi`, `isbn` = `$isbn`  WHERE `libros`.`id` = $id ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id, referencia, titulo, id_autor, imagen, anio_pub, id_editorial, lugar_pub, cantidad_ejemplares, id_clasificacion, doi, isbn FROM libros ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $queryLibroMateria = "DELETE FROM libros_Materias WHERE id_libro='$id' ";
        $resultado = $conexion->prepare($queryLibroMateria);
        $resultado->execute();

        $consulta = "DELETE FROM libros WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id, referencia, titulo, id_autor, imagen, anio_pub, id_editorial, lugar_pub, cantidad_ejemplares, id_clasificacion, doi, isbn FROM libros ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
