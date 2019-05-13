
<!DOCTYPE html>
<html lang="en" >

		<head>
		  <meta charset="UTF-8">
		  <title>Registrate</title>
		  
		  <meta content="width=device-width, initial-scale=1,user-scalable=no" name="viewport">
		  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

		  <link rel="stylesheet" href="{{@asset('formularios/formulario_socios/css/style-form.css')}}">
		  <link rel="stylesheet" href="{{@asset('formularios/formulario_socios/css/bootstrap.min.css')}}">

		  
		</head>

    <body>


		<form action="{{url('/Registro_Cliente')}}" method="POST">
			{!! csrf_field() !!}
			<div class="login-wrap2">
				<div class="login-html">
					<input id="tab-1" type="radio" name="tab" class="sign-up" checked>
					<label for="tab-1" class="tab">Registrarse</label>
						<div class="login-form">
								<div class="sign-up-htm">
									<div class="group">
										<label for="user" class="label">Nombre Usuario</label>
										<input id="user" type="text" name="nombre" class="inputs">
									</div>
									<div class="group">
										<label for="pass" class="label">Contraseña</label>
										<input id="pass" type="password" name="password" class="inputs" data-type="password">
									</div>

									<div class="group">
										<label for="email" class="label">Correo Electrónico</label>
										<input id="email" type="text" name="correo" class="inputs">
									</div>
									<div class="group">
										<input type="submit" class="button" name="registrarse" id="registrar" value="Registrarme">
									</div>
									<div class="hr"></div>
									<div class="foot-lnk">
										<label for="tab-2"><a href="index-form2.php"> ¿Ya eres miembro?</a></label>
									</div>

									<input type="hidden" name="rol" value=2>

								</div>
					    </div>
				</div>
			</div>
		</form>


				<!-- The Modal -->
				<div class="modal" id="Modal1">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Modal Heading</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        Modal body..
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>

		     


		     <script src="form/js/jquery-3.1.1.min.js"></script>
			 <script src="tours/js/materialize.min.js"></script>
			 <script src="form/js/bootstrap.min.js"></script>
			 <script type="text/javascript">
			 
				 $(document).ready(function($) {

				 	$(function(){
				 		$('#registrarse')on ('click', function(e) {
				 			e.preventDefault();
				 			var nombre = $('#user').val()
				 			var correo = $('#email').val()
				 		});

				 	})
				 		
				 	
				});
			 </script>

	</body>

</html>
