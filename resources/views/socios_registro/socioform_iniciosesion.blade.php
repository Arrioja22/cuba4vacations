<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta content="width=device-width, initial-scale=1" name="viewport">
	 <meta charset="UTF-8">
	 <title>Inicia Sesion</title>
	       <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
		  <link rel="stylesheet" href="{{@asset('formularios/formulario_socios/css/style-form.css')}}">
		  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
    <body>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 align-self-center">
    			@if(Session::has('success'))

				   <div class="ocultar alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('success') }}
				   	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				    </div>
				@endif
				</div>
    			<div class="col align-self-center">
	    <form action="{{url('Inicia_Sesion')}}" method="POST">
	    	@csrf
	    	<div class="login-wrap">
				<div class="login-html">
					<input id="tab-2" type="radio" name="tab" class="sign-in" checked>
					<label for="tab-2" class="tab">Iniciar Sesión</label>
					        <div class="login-form">

									<div class="sign-in-htm">
									<div class="group">
										<label for="user" class="label">Correo</label>
										<input id="user" type="email" class="inputs" name="email" value="{{old('email')}}">
										@if ($errors->has('email'))
								             <div class=" bg-danger rounded mt-2 mb-3">
								             	<p class="text-light">{{ $errors->first('email') }}</p>
								             	</div>
								          @endif
									</div>
									<div class="group">
										<label for="pass" class="label">Contraseña</label>
										<input id="pass" type="password" class="inputs"  name="password">
										@if ($errors->has('password'))
								             <div class=" bg-danger rounded mt-2 mb-3">
								             	<p class="text-light">{{ $errors->first('password') }}</p>
								             	</div>
								          @endif
									</div>
									<!-- <div class="group">
										<input id="check" type="checkbox" class="check" checked>
										<label for="check"><span class="icon"></span> Recordar inicio de sesión</label>
									</div> -->
									<div class="group">
										<button  class="button" >Inicia Sesion</button>
									</div>
									<div class="hr"></div>
									<!-- <div class="foot-lnk">
										<a href="#forgot">¿Olvidaste tu contraseña?</a>
									</div> -->
									<div class="foot-lnk">
										<label for="tab-2">¿Aun no tienes una cuenta?</label>
										<br><br>
										<label for="tab-2"><a href="index-form.php">Registrate aqui</a></label>
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
    </body>
</html>