<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
   <h1 align="center">Periódicos</h1>
    
    
    
 <?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT periodicos.*, editoriales.nombre FROM periodicos left join editoriales on periodicos.id_editorial = editoriales.id";
$obtEditoriales = "SELECT * FROM editoriales";
$resultado = $conexion->prepare($consulta);
$resultEditoriales = $conexion->prepare($obtEditoriales);
$resultado->execute();
$resultEditoriales->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
$dataEditoriales=$resultEditoriales->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevoPeriodico" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPeriodico" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th style="display: none;">Id</th>
                                <th>Editorial</th>
                                <th>Dia</th>
                                <th>Mes</th>
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
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['dia'] ?></td>
                                <td><?php echo $dat['mes'] ?></td>
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
<div class="modal fade" id="modalPeriodico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPeriodico">    
            <div class="modal-body">
                <div class="form-group">
                <input type="number" class="form-control" id="idPeriodico" hidden>
                <label for="id_editorial" class="col-form-label">Seleccione Editorial:</label>
                <select class="form-control" id="id_editorial" placeholder="Seleccione">
                         <?php
                        // Realizamos la consulta para extraer los datos
                        foreach ($dataEditoriales as $dataEditoriales1) {

                            echo("<option value=\"".$dataEditoriales1['id']."\">" .$dataEditoriales1['nombre']. "</option>");
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
                <!-- Select Date -->
                     <label for="mes" class="col-form-label">Día:</label>
                     <select id="dia" class="form-control" /> 
                         <option value="1">1</option> 
                         <option value="2">2</option> 
                         <option value="3">3</option> 
                         <option value="4">4</option> 
                         <option value="5">5</option> 
                         <option value="6">6</option> 
                         <option value="7">7</option> 
                         <option value="8">8</option> 
                         <option value="9">9</option> 
                         <option value="10">10</option> 
                         <option value="11">11</option> 
                         <option value="12">12</option> 
                         <option value="13">13</option> 
                         <option value="14">14</option> 
                         <option value="15">15</option> 
                         <option value="16">16</option> 
                         <option value="17">17</option> 
                         <option value="18">18</option> 
                         <option value="19">19</option> 
                         <option value="20">20</option> 
                         <option value="21">21</option> 
                         <option value="22">22</option> 
                         <option value="23">23</option> 
                         <option value="24">24</option> 
                         <option value="25">25</option> 
                         <option value="26">26</option> 
                         <option value="27">27</option> 
                         <option value="28">28</option> 
                         <option value="29">29</option> 
                         <option value="30">30</option> 
                         <option value="31">31</option> 
                     </select>
                 </div> 

                 <div class="form-group">
                     <label for="mes" class="col-form-label">Mes:</label>
                     <select id="mes" class="form-control" />
                         <option value="01">Enero</option> 
                         <option value="02">Febrero</option> 
                         <option value="03">Marzo</option> 
                         <option value="04">Abril</option> 
                         <option value="05">Mayo</option> 
                         <option value="06">Junio</option> 
                         <option value="07">Julio</option> 
                         <option value="08">Agosto</option> 
                         <option value="09">Septiembre</option> 
                         <option value="10">Octubre</option> 
                         <option value="11">Noviembre</option> 
                         <option value="12">Diciembre</option> 
                     </select>
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