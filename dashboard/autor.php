<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
   <h1 align="center">Autor</h1>
    
    
    
 <?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, nombres, apellido1, apellido2, nacionalidad, bio FROM autor";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevoAutor" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaAutor" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th style="display: none;">Id</th>
                                <th>Nombres</th>
                                <th>1er Apellido</th>
                                <th>2do Apellido</th>
                                <th>Nacionalidad</th>
                                <th>Bio</th>
                                <th>Acciones</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td style="display: none;"><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['nombres'] ?></td>
                                <td><?php echo $dat['apellido1'] ?></td>
                                <td><?php echo $dat['apellido2'] ?></td>
                                <td><?php echo $dat['nacionalidad'] ?></td>
                                <td><?php echo $dat['bio'] ?></td>
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
<div class="modal fade" id="modalAutor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formAutor">    
            <div class="modal-body">
                <div class="form-group">
                <input type="number" class="form-control" id="idAutor" hidden>
                <label for="nombres" class="col-form-label">Nombres:</label>
                <input type="text" class="form-control" id="nombres">
                </div>  
                <div class="form-group">
                <label for="apellido1" class="col-form-label">Primer Apellido:</label>
                <input type="text" class="form-control" id="apellido1">
                </div>  
                <div class="form-group">
                <label for="apellido2" class="col-form-label">Segundo Apellido:</label>
                <input type="text" class="form-control" id="apellido2">
                </div>
                <div class="form-group">
                <label for="nacionalidad" class="col-form-label">Nacionalidad:</label>
                <input type="text" class="form-control" id="nacionalidad">
                </div>
                <div class="form-group">
                <textarea class="form-control" rows="3" id="bio" placeholder="Biografia"></textarea>
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