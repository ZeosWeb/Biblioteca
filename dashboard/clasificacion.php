<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
   <h1 align="center">Clasificacion</h1>
    
    
    
 <?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, clase, lengua, genero, clasificacion FROM clasificaciones";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevoClasif" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaClasif" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th style="display: none;">Id</th>
                                <th>Clase</th>
                                <th>Lengua</th>
                                <th>Genero</th>
                                <th>Clasificación</th>
                                <th>Acciones</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td style="display: none;"><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['clase'] ?></td>
                                <td><?php echo $dat['lengua'] ?></td>
                                <td><?php echo $dat['genero'] ?></td>
                                <td><?php echo $dat['clasificacion'] ?></td>
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
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalClasif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formClasif">    
            <div class="modal-body">
                <div class="form-group">
                <input type="number" class="form-control" id="idClasif" hidden>
                <label for="clase" class="col-form-label">Clase:</label>
                <input type="text" class="form-control" id="clase">
                </div>  
                <div class="form-group">
                <label for="lengua" class="col-form-label">Lengua:</label>
                <input type="text" class="form-control" id="lengua">
                </div>  
                <div class="form-group">
                <label for="genero" class="col-form-label">Género:</label>
                <input type="text" class="form-control" id="genero">
                </div>
                <div class="form-group">
                <label for="clasificacion" class="col-form-label">Clasificación:</label>
                <input type="text" class="form-control" id="clasificacion">
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
      
    
    
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>