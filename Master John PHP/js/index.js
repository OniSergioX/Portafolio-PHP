$(document).ready(function(){
	$("body").css("display","none").fadeIn("1000");

	$("#btn-autenticar").click(function(){
		$.get("clases/controlador/processRequest.php", {rut: $("#rut").val(), clave: $("#clave").val()} ,function(respuesta){

			switch(respuesta.trim()){

				case "0":
					$("#login-error-box b").text("Ingresen Todos Los Datos!");
					$("#login-error-box").removeClass("hidden");
				break;

				case "1":
					$("#login-error-box b").text("Usuario Inexistente!");
					$("#login-error-box").removeClass("hidden");				
				break;

				default:
					$("#login-success-box").removeClass("hidden");
					$("#login-box .modal-footer").addClass("hidden");
					window.location.reload();
				break;
			}

		});
	});
});	