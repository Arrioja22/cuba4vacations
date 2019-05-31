function validarDatos() {
 	var variable = true;

 		if(!document.form.nombres.value){
 			alert("Se Necesita un Nombre...!");
 			document.form.nombres.value.focus;
 			variable="false";
		}

		else if(!document.form.apellidos.value){
 			alert("Se Necesita un Apellido Paterno...!");
 			document.form.apellidos.value.focus;
 			variable="false";
		}

		else if(!document.form.email.value){
 			alert("Se Necesita un Apellido Materno...!");
 			document.form.email.value.focus;
 			variable="false";
		}

		else if(!document.form.telefono.value){
 			alert("Se Necesita una Ciudad...!");
 			document.form.telefono.value.focus;
 			variable="false";
		}


 		if (variable) {
 			document.form.submit();
 		}
 	}

 	window.onload=function(){
 		document.getElementById('boton').onclick=validarDatos;
 	}