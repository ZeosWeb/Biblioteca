<?php require_once "vistas/parte_superior.php"?>


<!--INICIO del cont principal-->
<div class="container">
    <h1>Configuración de Usuario</h1>
</div>



    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formConfig">    
            <div class="modal-body">
                <div class="form-group">
                <input type="number" class="form-control" id="idConfig" hidden>
                <label for="pass" class="col-form-label">Contraseña Anterior:</label>
                <input type="password" class="form-control" id="pass">
                </div>  
 				<div class="form-group">
                <label for="passNew" class="col-form-label">Contraseña:</label>
                <input type="password" class="form-control" id="passNew">
                </div> 
 				<div class="form-group">
                <label for="passNewRep" class="col-form-label">Repita la Contraseña:</label>
                <input type="password" class="form-control" id="passNewRep">
                </div>                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>








<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>