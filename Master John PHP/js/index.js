"use strict ";

$(document).ready(function(){
	$("body").css("display","none").fadeIn("1000");


	$("#btnRegistrar").click(function(){
		var cuenta = {
			username: $("#username").val().trim(),
			salt: "",
			pass: $("#contrasenia").val().trim(),
			rut: $("#rut").val().trim(),
			nombre: $("#nombre").val().trim(),
			apellidoP: $("#apellidoPaterno").val().trim(),
			apellidoM: $("#apellidoMaterno").val().trim(),
			direccion: $("#direccion").val().trim(),
			email: $("#e-mail").val(),
			telefono: $("#telefono").val(),
			comuna: $("#comuna").val()			
		}

		$.post("clases/controlador/CrearCuenta.php", cuenta, function(respuesta){

			switch(respuesta.trim()){
				case 0: console.log("LA CUENTA YA EXISTE!"); break;
				case 1: console.log("CUENTA CREADA CON EXITO!"); break;
				case 2: console.log("LA CUENTA CUYO USERNAME CORREO YA EXISTE!"); break;
				default: console.log("default! " + respuesta); break;
			}	
		});

	});

	$("#btn-autenticar").click(function(){
		$(this).removeAttr("data-dismiss");
		$.get("clases/controlador/processRequest.php", {username: $("#username").val(), clave: $("#clave").val()} ,function(respuesta){
			// console.log(respuesta.trim());
			switch(respuesta.trim()){
				case "0": $("#login-error-box b").text("Ingresen Todos Los Datos!"); $("#login-error-box").removeClass("hidden"); break;
				case "1": $("#login-error-box b").text("Usuario Inexistente!"); $("#login-error-box").removeClass("hidden"); break;
				 default: $("#login-success-box").removeClass("hidden"); $("#login-box .modal-footer").addClass("hidden"); /* window.location.reload();*/ break;
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


function isNumber(evt) {
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		return false;
	}
	return true;
}