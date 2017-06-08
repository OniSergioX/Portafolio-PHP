<div class="modal fade" id="register-box" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title text-center"><b>CREAR CUENTA</b></h4>
			</div>
			<div class="modal-body">


				<form>


					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Datos De Usuario</legend>

						<div class="col-md-offset-1 col-md-5">

							<label for="rut">RUT</label>                            
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" id="rut" placeholder="Ingrese R.U.N." maxlength="8" onkeypress="return isNumber(event)">
							</div><br>

							<label for="nombre">APELLIDO PATERNO</label>                            
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" id="apellidoPaterno" placeholder="Ingrese Apellido Paterno" maxlength="30">
							</div><br>

							<label for="rut">DIRECCION</label>                            
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
								<input type="text" class="form-control" id="direccion" placeholder="Ingrese Domicilio" maxlength="50">
							</div><br>

							<label for="rut">TELEFONO</label>                            
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
								<input type="text" class="form-control" id="telefono" placeholder="Ingrese N° Teléfonico (8 digitos)" maxlength="8" onkeypress="return isNumber(event)">
							</div><br>						

						</div>

						<div class="col-md-5">
							
							<label for="nombre">NOMBRE</label>                            
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" id="nombre" placeholder="Ingrese Nombre" maxlength="30">
							</div><br>

							<label for="nombre">APELLIDO MATERNO</label>                            
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" id="apellidoMaterno" placeholder="Ingrese Apellido Materno" maxlength="30">
							</div><br>

							<label for="estadocivil">COMUNA</label>                            
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
								<select id="comuna" class="form-control">
									<option value=""><b>Seleccione Comuna</b></option>
								</select>								
							</div><br>

							<label for="e-mail">E-MAIL</label>                            
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
								<input type="email" class="form-control" id="e-mail" placeholder="Ingrese Correo Electrónico" maxlength="50">
							</div><br>																									

						</div>

					</fieldset>
				


					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Datos De Cuenta</legend>

						<div class="col-md-offset-1 col-md-5">

							<label for="user">USERNAME</label>                            
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" id="username" placeholder="Ingrese Username" maxlength="50">
							</div><br>

						</div>

						<div class="col-md-5">
							
							<label for="password">CONTRASE&Ntilde;A</label>                            
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" class="form-control" id="contrasenia" placeholder="Ingrese Contraseña" maxlength="100">
							</div><br>												

						</div>
						
					</fieldset>					

					<div id="register-error-box" class="alert alert-danger fade in hidden">
						<img src="img/chuck-norris-rejected.png" style="width:80px;" alt="rechazado" />
						<b>Mensaje de error</b>                        
					</div>

					<div id="register-success-box" class="alert fade in text-center hidden">
						<img src="img/chuck-norris-approved.png" style="width:200px;" alt="aprobado" />            
					</div>


				</form>



			</div>
			<div class="modal-footer">                                
				<input type="button" class="btn btn-default"  data-dismiss="modal" value="Cancelar" />                           
				<input id="btnRegistrar" type="button" class="btn btn-primary"  data-dismiss="modal" value="Registrar"/>                           
			</div>
		</div>
	</div>
</div>