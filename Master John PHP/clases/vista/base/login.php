<div class="modal fade" id="login-box" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Acceso usuarios</h4>
        </div>
        <div class="modal-body">
            <form class="form">
                <div class="form-group">
                    <label for="rutFormateado">RUT</label>
                    <input id="rutFormateado" type="text" name="rutFormateado" class="form-control" maxlength="12"/>
                    <input id="rut" type="hidden" name="rut" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input id="clave" type="password" name="clave" class="form-control" />
                </div>
                <div id="login-error-box" class="alert alert-danger fade in hidden">
                    <img src="img/chuck-norris-rejected.png" style="width:80px;" alt="rechazado" />
                    <b>Mensaje de error</b>                        
                </div>
                <div id="login-success-box" class="alert fade in text-center hidden">
                    <img src="img/chuck-norris-approved.png" style="width:200px;" alt="aprobado" />            
                </div>
            </form>
        </div>
        <div class="modal-footer">                                
            <input type="button" class="btn btn-default"  data-dismiss="modal" value="Cancelar" />                           
            <input id="btn-autenticar" type="button" class="btn btn-primary"  data-dismiss="modal" value="Aceptar" />                           
        </div>
    </div>
</div>
</div>