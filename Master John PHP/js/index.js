"use strict ";

$(document).ready(function(){
	$("body").css("display","none").fadeIn("1000");


	$("#btnRegistrar").click(function(){
		$(this).removeAttr("data-dismiss");
		var datos = ["username","contrasenia","rut","nombre","apellidoPaterno","apellidoMaterno","direccion","e-mail","telefono","comuna"],
		contador = 0;

		for (var i=0; i<= datos.length; i++) {
			if (!validarEntrada(datos[i])) {
				contador++;
				break;				
			}
		}

		if (contador === 0) {
			var cuenta = {username: $("#username").val().trim(), salt: "", pass: $("#contrasenia").val().trim(), rut: $("#rut").val().trim(), nombre: $("#nombre").val().trim(),
				apellidoP: $("#apellidoPaterno").val().trim(),apellidoM: $("#apellidoMaterno").val().trim(), direccion: $("#direccion").val().trim(), email: $("#e-mail").val(),
				telefono: $("#telefono").val(), comuna: $("#comuna").val()			
			}

			$.post("clases/controlador/CrearCuenta.php", cuenta, function(respuesta){
				switch(respuesta.trim()){

					case "0": 

						if ($("#register-error-box").hasClass("alert-warning")) {
							$("#register-error-box").hide().html("DATOS FALTANTES! : INGRESE TODOS LOS DATOS!");
						}
						else{
							$("#register-error-box").removeClass("hidden alert-danger").addClass("alert-warning").hide().html("DATOS FALTANTES! : INGRESE TODOS LOS DATOS!");
						}

					break;

					case "1":

						if ($("#register-error-box").hasClass("alert-warning")) {
							$("#register-error-box").removeClass("alert-warning");
						}
						else if($("#register-error-box").hasClass("alert-danger")){
							$("#register-error-box").removeClass("alert-danger")
						}
						else if($("#register-error-box").hasClass("alert-success")){
							$("#register-error-box").hide().html("CUENTA CREADA EXITOSAMENTE!");
						}
						else{
							$("#register-error-box").addClass("alert-success").hide().html("CUENTA CREADA EXITOSAMENTE!");
						}						
					
					break;

					case "2": console.log("LA CUENTA CUYO USERNAME O CORREO YA EXISTE!"); break;
					case "4": window.location.reload(); break; /*INTENTO FALLIDO DE XSS*/
					default: console.log("default! " + respuesta); break;
				}	
			});
		}
		else{
			$("#register-error-box").removeClass("hidden alert-danger").addClass("alert-warning").hide().html("DATOS FALTANTES! : INGRESE TODOS LOS DATOS!").fadeIn();
		}
	});

	$("#btn-autenticar").click(function(){
		$(this).removeAttr("data-dismiss");
		$.get("clases/controlador/processRequest.php", {username: $("#username").val(), clave: $("#clave").val()} ,function(respuesta){
			switch(respuesta.trim()){
				case "0": $("#login-error-box b").text("Ingresen Todos Los Datos!"); $("#login-error-box").removeClass("hidden"); break;
				case "1": $("#login-error-box b").text("Usuario Inexistente!"); $("#login-error-box").removeClass("hidden"); break;
				 default: $("#login-success-box").removeClass("hidden"); $("#login-box .modal-footer").addClass("hidden");  window.location.reload(); break;
			}
		});
	});

	$.get("clases/controlador/listarComunas.php",function(jsonComunas) {
		jsonComunas = JSON.parse(jsonComunas); 
		$(jsonComunas).each(function(index, comuna) {
			$("#comuna").append("<option value=\"" + comuna.comuna_id + "\">" + comuna.comuna_nombre + "</option>");
		});
	});	

});


function validarEntrada(nombre_entrada){
	return ($("#" + nombre_entrada + "").val() !== "")? true : false;
}

function isNumber(evt) {
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		return false;
	}
	return true;
}

function inputVacio(elemento){
	var idInput  = "#" + elemento.id,
	    idMensaje  = "#" + elemento.id + "Mensaje";
	if (elemento.value === "") {
		if (elemento.nodeName === "SELECT") {
			$(idInput).css("border","2px solid red");
			$(idMensaje).hide().html("<p>Campo sin opcion seleccionada!</p>").fadeIn();
		}
		else{
			$(idInput).css("border","2px solid red");
			$(idMensaje).hide().html("<p>Campo sin datos!</p>").fadeIn();
		}		
	}
	else{
		$(idInput).css("border","1px #ccc");
		$(idMensaje).fadeOut();
	}
}

function limpiarInput(elemento){
	if (Array.IsArray(elemento)) {
		for (i = 0 ; i < elemento.length; i++) {
			$("#" + elemento[i]).val("");
		}
	}
	else{
		$("#" + elemento).val("");
	}	
}