<div class="modal fade" id="login-box" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> <b>ACCESO USUARIOS</b> </h4>
        </div>
        <div class="modal-body">
            <form class="form">

                <label for="user">NOMBRE DE USUARIO</label>                            
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" id="user" placeholder="Ingrese Username">
                </div><br>

                <label for="password">CONTRASE&Ntilde;A</label>                            
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" class="form-control" id="password" placeholder="Ingrese Contraseña">
                </div><br>


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