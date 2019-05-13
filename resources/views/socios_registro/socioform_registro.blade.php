
<!DOCTYPE html>
<html lang="en" >

		<head>
			<meta content="width=device-width, initial-scale=1" name="viewport">
		  <meta charset="UTF-8">
		  <title>Registrate</title>
		  
		  
		  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
		  <link rel="stylesheet" href="{{@asset('formularios/formulario_socios/css/style-form.css')}}">
		  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		  
		</head>

    <body>
    	
 <div class="container">
 	<div class="row">
 		<div class="col align-self-center">
		<form action="{{url('/registro-socio')}}" method="POST">
			{!! csrf_field() !!}
			<div class="login-wrap">
				<div class="login-html">
					<input id="tab-1" type="radio" name="tab" class="sign-up" checked>
					<label for="tab-1" class="tab">Registrarse</label>
						<div class="login-form">
								<div class="sign-up-htm">
								<div class="col-xs-12">
									<div class="group"> 
										<label for="user" class="label">Nombre(s)</label>
										<input id="user" type="text" name="nombre" class="inputs input-text" value="{{old('nombre')}}">
										@if ($errors->has('nombre'))
								             <div class=" bg-danger rounded mt-2 mb-3">
								             	<p class="text-light">{{ $errors->first('nombre') }}</p>
								             	</div>
								          @endif
									</div>
								</div>
									<div class=" col-xs-12">
									<div class="group">
										<label for="user" class="label">Apellido(s)</label>
										<input id="user" type="text" name="apellidos" class="inputs  input-text" value="{{old('apellidos')}}">
										@if ($errors->has('apellidos'))
								             <div class=" bg-danger rounded mt-2 mb-3">
								             	<p class="text-light">{{ $errors->first('apellidos') }}</p>
								             	</div>
								          @endif
									</div>
								</div>
								<div class="col-xs-12">
									<div class="group">
										<label for="tel" class="label">Telefono</label>
										<input id="tel" type="text" name="tel" class="inputs  input-number" value="{{old('tel')}}">
										@if ($errors->has('tel'))
								             <div class=" bg-danger rounded mt-2 mb-3">
								             	<p class="text-light">{{ $errors->first('tel') }}</p>
								             	</div>
								          @endif
									</div>
								</div>
								<div class="col-xs-12">
									<div class="group">
										<label for="email" class="label">Correo Electrónico</label>
										<input id="email" type="text" name="email" class="inputs" value="{{old('email')}}">
										@if ($errors->has('email'))
								             <div class=" bg-danger rounded mt-2 mb-3">
								             	<p class="text-light">{{ $errors->first('email') }}</p>
								             	</div>
								          @endif
									</div>
								</div>
								<div class="col-xs-12">
									<div class="group">
										<label for="pass" class="label">Contraseña</label>
										<input id="pass" type="password" name="password" class="inputs">
										@if ($errors->has('password'))
								             <div class=" bg-danger rounded mt-2 mb-3">
								             	<p class="text-light">{{ $errors->first('password') }}</p>
								             	</div>
								          @endif
									</div>
								</div>
								
								<div class="col-xs-12">
									<div class="group">
										<button  class="button" name="registrarse" >Registrarse</button>
									</div>
								</div>
                                <div class="col-xs-12">
									<div class="hr"></div>
									<div class="foot-lnk">
										<label for="tab-2"><a href="index-form2.php"> ¿Ya eres miembro?</a></label>
									</div>
								</div>

								</div>
					    </div>
				</div>
			</div>
		</form>
		</div>
		</div>
		</div>
		     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			 <script type="text/javascript">
			 
		   $(document).ready(function() {
				 	

			$('.input-number').on('input', function () { 
		     this.value = this.value.replace(/[^0-9]/g,'');
			   });

            $('.input-text').on('input', function () {
             this.value = this.value.replace(/[^A-Za-z," "]/g,'');
             });
				 	
				});
			 </script>

	</body>

</html>
