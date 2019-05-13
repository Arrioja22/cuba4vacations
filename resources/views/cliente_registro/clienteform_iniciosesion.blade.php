<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta content="width=device-width, initial-scale=1,user-scalable=no" name="viewport">
	 <meta charset="UTF-8">
	 <title>Inicia Sesion</title>
	       <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
		  <link rel="stylesheet" href="css/style-form.css">
		  <link rel="stylesheet" href="form/css/bootstrap.min.css">
  </head>
    <body>
	    <form action="login.php" method="POST">
	    	<div class="login-wrap">
				<div class="login-html">
					<input id="tab-2" type="radio" name="tab" class="sign-in" checked>
					<label for="tab-2" class="tab">Inicia Sesión</label>
					        <div class="login-form">

									<div class="sign-in-htm">
									<div class="group">
										<label for="user" class="label">Nombre Usuario</label>
										<input id="user" type="text" class="inputs" name="nombre">
									</div>
									<div class="group">
										<label for="pass" class="label">Contraseña</label>
										<input id="pass" type="password" class="inputs" data-type="password" name="password">
									</div>
									<!-- <div class="group">
										<input id="check" type="checkbox" class="check" checked>
										<label for="check"><span class="icon"></span> Recordar inicio de sesión</label>
									</div> -->
									<div class="group">
										<input type="submit" class="button" value="Iniciar Sesion" data-toggle="modal" data-target="#Modal1">
									</div>
									<div class="hr"></div>
									<!-- <div class="foot-lnk">
										<a href="#forgot">¿Olvidaste tu contraseña?</a>
									</div> -->
								</div>
							</div>
				</div>
			</div>
		</form>
	
    </body>
</html>