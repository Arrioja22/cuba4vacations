<?php 
session_start();

if (isset ($_SESSION['socio']) ){

    
  }else {
    header('Location:index-form2.php');
  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta content="width=device-width, initial-scale=1" name="viewport">
	<meta charset="UTF-8">
	<title>Nuevo</title>
	<link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
	
</head>
<body>
	  <div class="container">
    <div class="wrapper">
      <ul class="steps">
        <li class="is-active">Transmission</li>
        <li>Inf.del auto</li>
        <li>Datos del auto</li>
        <!-- <li>Nivel 4</li> -->
       <!--  <li>Nivel 5</li> -->
        <!-- <li>Nivel 6</li> -->
      </ul>
      <form class="form-wrapper" method="post" action="add_autos.php" enctype="multipart/form-data">
        <fieldset class="section is-active">
          <h3>Tipo de transmicion</h3>
          <div class="row-2 cf">
            <div class="four col">
              <input type="radio" value="Estandar" name="transmicion" id="room">
              <label for="room">
                <h4>Estandar</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="transmicion" value="Automatico" id="house-complete"><label for="house-complete">
                <h4>Automatico</h4>
              </label>
            </div>
          </div>
          <div class="button-15">Siguiente</div>
        </fieldset>
        <fieldset class="section menu">
          <h3>Informacion del automovil</h3> 
         <br><br>
         <label>Tipo de automovil</label>
         <div class="row cf">
            <div class="four col">
              <input type="radio" name="tipo_auto" value="Auto 4 puertas" id="sedan" >
              <label for="sedan">
                <h4>Auto 4 puertas</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="tipo_auto" value="Camioneta" id="camioneta"><label for="camioneta">
                <h4>Camioneta</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="tipo_auto" value="Clasico" id="clasico"><label for="clasico">
                <h4>Clasico</h4>
              </label>
            </div>
          </div>

           <div>
            	<div>
          <label>Capacidad de personas del automovil</label>
            </div>
			<div class="number">
			  <input class="number__field" name="c_personas_auto" type="number" id="number" value="" >
			</div>
			
          </div>
          <div class="button-14 nivel1">Siguiente</div>
        </fieldset>

        <fieldset class="section">
        	<h3>Datos importantes</h3>
          <input type="text" name="nombre_propietario"  placeholder="Nombre completo propietario" id="rellenar1">
          <input type="text" name="modelo"  placeholder="Modelo del automovil" id="rellenar2">
          <input type="text" name="placas"  placeholder="Numero de placas" id="rellenar3">
          <input type="text" name="telefono"  placeholder="Telefono" class="input-number" id="rellenar4">
          <label>Fechas de disponibilidad del automovil</label><br>
          <input type="date"  id="ingreso" name="fecha_inicio">
          <input type="date"  id="salida" name="fecha_fin" >
          <input type="text" name="lugar"  placeholder="Ciudad" id="rellenar5">
        	<input type="text" name="precio"  placeholder="Precio de la renta $" class="input-number" id="rellenar2">
          <select class='form-control' name="pago" id="adulto" style="width: 350px; height: 40px;">
             <option value="" selected="">Forma de pago</option>
            <option value="Efectivo">Efectivo</option>
            <option value="Trasnferencia">Transferencia</option>
          </select>
          <select class='form-control' name="moneda" id="adulto" style="width: 350px; height: 40px;">
          <option value="" selected="">Tipo de moneda</option>
          <option value="CUC">CUC</option>
          <option value="EURO">EURO</option>
          <option value="DOLAR">DOLAR</option>
          <option value="MONEDA NACIONAL">MONEDA NACIONAL</option>
          </select>
          <input type="text" name="direccion"  placeholder="Direccion de la casa" id="rellenar2">
          <input type="text" name="referencias" placeholder="Referencias para la ubicacion de casa" id="rellenar2">
          <textarea name="comentario" placeholder="descripcion" style="width: 350px; height: 100px;"></textarea>
          <div><label>Sube tus fotos de tu automovil que vas  a rentar</label></div>
          <div>
            <input type="file" name="autoFotos[]" multiple></div>
             <div class="button-16">Siguiente</div>
        	
        </fieldset>

        <fieldset class="section">
          <h3>Para finalizar su registro haga clic en el boton aceptar para guardar sus datos</h3>
          <!-- <div class="button">Inicio</div> -->
          <input class="submit button" type="submit" value="Aceptar">
        </fieldset>
      </form>
    </div>
  </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
   <!--  <script src="js/bootstrap.min.js"></script> -->
     <script src="js/bootstrap-datepicker.js"></script>
	<script src="js/form.js"></script>

</body>
</html>