<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
   <h1 align="center">Libros</h1>
    
    
    
 <?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT libros.*, concat_ws(' ', autor.nombres, autor.apellido1, autor.apellido2) as autor, editoriales.nombre as editorial, clasificaciones.clasificacion FROM libros left join autor on libros.id_autor = autor.id left join editoriales on libros.id_editorial = editoriales.id left join clasificaciones on libros.id_clasificacion = clasificaciones.id";

$obtEditoriales = "SELECT * FROM editoriales";
$obtClasificaciones = "SELECT * FROM clasificaciones";
$obtAutores = "SELECT * FROM autor";

$resultado = $conexion->prepare($consulta);
$resultEditoriales = $conexion->prepare($obtEditoriales);
$resultClasificaciones=$conexion->prepare($obtClasificaciones);
$resultAutores=$conexion->prepare($obtAutores);

$resultado->execute();
$resultEditoriales->execute();
$resultClasificaciones->execute();
$resultAutores->execute();

$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
$dataEditoriales=$resultEditoriales->fetchAll(PDO::FETCH_ASSOC);
$dataClasificaciones=$resultClasificaciones->fetchAll(PDO::FETCH_ASSOC);
$dataAutores=$resultAutores->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevoLibro" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaLibro" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th style="display: none;">Id</th>
                                <th style="display: none;">Clasif</th>
                                <th>idClasif</th>
                                <th>Imagen</th>
                                <th>Título</th>
                                <th>Autor</th>
                                <th style="display: none;">Año</th>
                                <th>Editorial</th>
                                <th style="display: none;">Lugar</th>
                                <th style="display: none;">Ejemplares</th>
                                <th style="display: none;">Doi</th>
                                <th style="display: none;">ISBN</th>
                                <th>Acciones</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td style="display: none;"><?php echo $dat['id'] ?></td>
                                <td style="display: none;"><?php echo $dat['id_clasificacion'] ?></td>
                                <td><?php echo $dat['referencia'] ?></td>
                                <td><?php echo $dat['imagen'] ?></td>
                                <td><?php echo $dat['titulo'] ?></td>
                                <td><?php echo $dat['autor'] ?></td>
                                <td style="display: none;"><?php echo $dat['anio_pub'] ?></td>
                                <td><?php echo $dat['editorial'] ?></td>
                                <td style="display: none;"><?php echo $dat['lugar_pub'] ?></td>
                                <td style="display: none;"><?php echo $dat['cantidad_ejemplares'] ?></td>
                                <td style="display: none;"><?php echo $dat['doi'] ?></td>
                                <td style="display: none;"><?php echo $dat['isbn'] ?></td>
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
      
<!--Modal para General-->
<div class="modal fade" id="modalLibro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formLibro">    
            <div class="modal-body">
                <div class="form-group">
                <input type="number" class="form-control" id="idLibro" hidden>
                <label for="id_clasificacion" class="col-form-label">Seleccione Clasificación:</label>
                    <select class="form-control" id="id_clasificacion" placeholder="Seleccione">
                            <?php
                            // Realizamos la consulta para extraer los datos
                            foreach ($dataClasificaciones as $dataClasificaciones1) {

                                echo("<option value=\"".$dataClasificaciones1['id']."\">" .$dataClasificaciones1['clasificacion']. "</option>");
                                }
                            ?>
                    </select>
                </div> 

            <div class="form-group">
                <label for="imagen">Seleccione una imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/png, image/jpeg, image/jpg">
            </div>
            <div class="form-group">
                <label for="titulo" class="col-form-label">Titulo:</label>
                <input type="text" class="form-control" id="titulo">
            </div>
            <div class="form-group">
                <label for="id_autor" class="col-form-label">Seleccione el Autor:</label>
                    <select class="form-control" id="id_autor" placeholder="Seleccione">
                            <?php
                            // Realizamos la consulta para extraer los datos
                            foreach ($dataAutores as $dataAutores1) {

                                echo("<option value=\"".$dataAutores1['id']."\">" .$dataAutores1['nombres']." ".$dataAutores1['apellido1']. "</option>");
                                }
                            ?>
                    </select>
                </div>
                <div class="form-group">
                <label for="anio_pub" class="col-form-label">Año de Publicaión:</label>
                  <select class="form-control" id="anio_pub">
                    <?php
                        for ($year = (int)date('Y'); 1500 <= $year; $year--): ?>
                            <option value="<?=$year;?>"><?=$year;?></option>
                    <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group">
                <label for="id_editorial" class="col-form-label">Seleccione la Editorial:</label>
                    <select class="form-control" id="id_editorial" placeholder="Seleccione">
                            <?php
                            // Realizamos la consulta para extraer los datos
                            foreach ($dataEditoriales as $dataEditoriales1) {

                                echo("<option value=\"".$dataEditoriales1['id']."\">" .$dataEditoriales1['nombre']. "</option>");
                                }
                            ?>
                    </select>
                </div>

                <div class="form-group">
                <label for="lugar_pub" class="col-form-label">Lugar de Publicación:</label>
                <input type="text" class="form-control" id="lugar_pub">
                </div>
                <div class="form-group">
                <label for="cantidad_ejemplares" class="col-form-label">Cantidad de Ejemplares:</label>
                <input type="number" class="form-control" id="cantidad_ejemplares">
                </div>
                <div class="form-group">
                <label for="doi" class="col-form-label">DOI:</label>
                <input type="text" class="form-control" id="doi">
                </div>
                <div class="form-group">
                <label for="isbn" class="col-form-label">ISBN:</label>
                <input type="text" class="form-control" id="isbn">
                </div>                       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  

<!--Modal para Ver Libro-->
<div class="modal fade" id="modalVerLibro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id=formVerLibro>
            <div class="modal-body">
                <div class="form-group">
                <label class="col-form-label"><strong>Imagen:</strong> <?php echo $dat['imagen'] ?></label>
                </div>
                <div class="form-group">
                <label class="col-form-label"><strong>Clasificación:</strong> <?php echo $dat['referencia'] ?></label>
                </div>
                <div class="form-group">
                <label class="col-form-label"><strong>Título:</strong> <?php echo $dat['titulo'] ?></label>
                </div>
                <div class="form-group">
                <label class="col-form-label"><strong>Autor:</strong> <?php echo $dat['autor'] ?></label>
                </div>
                <div class="form-group">
                <label class="col-form-label"><strong>Año de Publicación:</strong> <?php echo $dat['anio_pub'] ?></label>
                </div>
                <div class="form-group">
                <label class="col-form-label"><strong>Editorial:</strong> <?php echo $dat['editorial'] ?></label>
                </div>
                <div class="form-group">
                <label class="col-form-label"><strong>Lugar de Publicación:</strong> <?php echo $dat['lugar_pub'] ?></label>
                </div>
                <div class="form-group">
                <label class="col-form-label"><strong>Cantidad de Ejemplares:</strong> <?php echo $dat['cantidad_ejemplares'] ?></label>
                </div>
                <div class="form-group">
                <label class="col-form-label"><strong>DOI:</strong> <?php echo $dat['doi'] ?></label>
                </div>
                <div class="form-group">
                <label class="col-form-label"><strong>ISBN:</strong> <?php echo $dat['isbn'] ?></label>
                </div>
                                   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            </div>
            </form>    
        </div>
    </div>
</div>
      
    
    
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>