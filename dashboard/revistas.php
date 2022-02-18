<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
   <h1 align="center">Revistas</h1>
    
    
    
 <?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT revistas.*, karde.numero_karde FROM revistas left join karde on revistas.id_karde = karde.id";
$obtKarde = "SELECT * FROM karde";
$resultado = $conexion->prepare($consulta);
$resultKarde = $conexion->prepare($obtKarde);
$resultado->execute();
$resultKarde->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
$dataKarde=$resultKarde->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevoRevista" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaRevista" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th style="display: none;">Id</th>
                                <th># Karde</th>
                                <th>Revista #</th>
                                <th>Año</th>
                                <th>Descripción</th>
                                <th>Acciones</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td style="display: none;"><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['numero_karde'] ?></td>
                                <td><?php echo $dat['numero'] ?></td>
                                <td><?php echo $dat['anio'] ?></td>
                                <td><?php echo $dat['descripcion'] ?></td>
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
<div class="modal fade" id="modalRevista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formRevista">    
            <div class="modal-body">
                <div class="form-group">
                <input type="number" class="form-control" id="idRevista" hidden>
                <label for="id_karde" class="col-form-label">Seleccione el Karde:</label>
                <select class="form-control" id="id_karde" placeholder="Seleccione">
                         <?php
                        // Realizamos la consulta para extraer los datos
                        foreach ($dataKarde as $dataKarde1) {

                            echo("<option value=\"".$dataKarde1['id']."\">" .$dataKarde1['numero_karde']." -> ".$dataKarde1['nombre']. "</option>");
                            # code...
                        }
                        //while ($dataKarde1 in $dataKarde) {
                        // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                        //echo '<option value="'.$valores[id].'">'.$valores[paises].'</option>';
                         //}
                        ?>
                </select>


                </div>  
                <div class="form-group">
                <label for="numero" class="col-form-label">Número de Revista:</label>
                <input type="number" class="form-control" id="numero">
                </div>  
                <div class="form-group">
                <label for="anio" class="col-form-label">Año:</label>
                  <select class="form-control" id="anio">
                    <?php
                        for ($year = (int)date('Y'); 1500 <= $year; $year--): ?>
                            <option value="<?=$year;?>"><?=$year;?></option>
                    <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group">
                <textarea class="form-control" rows="3" id="descripcion" placeholder="Descripción"></textarea>
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