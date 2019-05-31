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
        <li class="is-active">Alojamiento</li>
        <li id="cocina">Cocina</li>
        <li id="sala">Sala</li>
        <li id="habitacion">Habitacion</li>
        <li id="serv_habitacion">Serv. habitacion</li>
        <li id="serv_bano">Serv. baño</li>
        <li id="serv.extra">Serv. extra</li>
        <li id="datos">Datos personales</li>
      </ul>
      <form class="form-wrapper" action="add_casascompletas.php" method="post" enctype="multipart/form-data">
        <fieldset class="section is-active" id="seleccion">
          <h3>Tipo de alojamiento</h3>
          <div class="row-2 cf">
            <div class="four col">
              <input type="radio" name="alojamiento" id="room" value="Habitacion">
              <label for="room">
                <h4>Habitacion</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="alojamiento" id="house-complete" value="Casa Completa"><label for="house-complete">
                <h4>Casa Completa</h4>
              </label>
            </div>
          </div>
          <div class="button-nm">Siguiente</div>
        </fieldset>
       
       <fieldset class="section" id="habitacion-add">
          <h3>Informacion que ofrece en la cocina</h3>

          <div class="container">
  <ul class="ks-cboxtags">
    <li><input type="checkbox" id="cheOne" name="cocina[]" value="Refrigerador"><label for="cheOne">Refrigerador</label></li>
    <li><input type="checkbox" id="cheTwo" name="cocina[]" value="Estufa" ><label for="cheTwo">Estufa</label></li>
    <li><input type="checkbox" id="cheThree" name="cocina[]" value="Microondas" ><label for="cheThree">Microondas</label></li>
    <li><input type="checkbox" id="cheFour" name="cocina[]" value="Tostadora"><label for="cheFour">Tostadora</label></li>
    <li><input type="checkbox" id="cheFive" name="cocina[]" value="Utencilios"><label for="cheFive">Utencilios de cocina</label></li>
    <li><input type="checkbox" id="cheSix"name="cocina[]" value="Licuadora" ><label for="cheSix">Licuadora</label></li>
    <li><input type="checkbox" id="cheSeven" name="cocina[]" value="Frigobar"><label for="cheSeven">Frigobar</label></li>
    <!-- <li><input type="checkbox" id="cheEight" value=""><label for="cheEight">Frigobar</label></li>
    <li><input type="checkbox" id="cheNine" value=""><label for="cheNine">Espejo</label></li>
    <li><input type="checkbox" id="cheTen" value=""><label for="cheTen">Cuna</label></li>
    <li ><input type="checkbox" id="cheEleven" value=""><label for="cheEleven">Plancha</label></li>
    <li><input type="checkbox" id="cheTwelve" value=""><label for="cheTwelve">Mesa de trabajo</label></li>
    <li><input type="checkbox" id="cheThirteen" value=""><label for="cheThirteen">TV</label></li>
    <li><input type="checkbox" id="cheFourteen" value=""><label for="cheFourteen">Ventilador</label></li> -->
    <!-- <li><input type="checkbox" id="checkboxFifteen" value="Firefly"><label for="checkboxFifteen">Firefly</label></li> -->
  </ul>

</div>
          <!-- <input type="password" name="password" id="password" placeholder="Password">
          <input type="password" name="password2" id="password2" placeholder="Re-enter Password">
          <input class="submit button" type="submit" value="Sign Up"> -->
          <div class="button-6">Siguiente</div>
        </fieldset>

 <fieldset class="section" id="hab2-add">
          <h3>Informacion que ofrece en la sala</h3>

          <div class="container">
  <ul class="ks-cboxtags">
    <li><input type="checkbox" id="chOne" name="sala[]" value="Television"><label for="chOne">Television</label></li>
    <li><input type="checkbox" id="chTwo" name="sala[]" value="Estereo" ><label for="chTwo">Estereo</label></li>
    <li><input type="checkbox" id="chThree" name="sala[]" value="Muebles" ><label for="chThree">Muebles</label></li>
    <li><input type="checkbox" id="chFour" name="sala[]" value="Librero"><label for="chFour">Librero</label></li>
    <li><input type="checkbox" id="chFive" name="sala[]" value="Mesa de centro"><label for="chFive">Mesa de centro</label></li>
    <li><input type="checkbox" id="chSix" name="sala[]" value="Mesa de trabajo" ><label for="chSix">Mesa de trabajo(escritorio)</label></li>
    <!--<li><input type="checkbox" id="cheSeven" value=""><label for="cheSeven">Frigobar</label></li>
    <li><input type="checkbox" id="cheEight" value=""><label for="cheEight">Frigobar</label></li>
    <li><input type="checkbox" id="cheNine" value=""><label for="cheNine">Espejo</label></li>
    <li><input type="checkbox" id="cheTen" value=""><label for="cheTen">Cuna</label></li>
    <li ><input type="checkbox" id="cheEleven" value=""><label for="cheEleven">Plancha</label></li>
    <li><input type="checkbox" id="cheTwelve" value=""><label for="cheTwelve">Mesa de trabajo</label></li>
    <li><input type="checkbox" id="cheThirteen" value=""><label for="cheThirteen">TV</label></li>
    <li><input type="checkbox" id="cheFourteen" value=""><label for="cheFourteen">Ventilador</label></li> -->
    <!-- <li><input type="checkbox" id="checkboxFifteen" value="Firefly"><label for="checkboxFifteen">Firefly</label></li> -->
  </ul>

</div>
          <div class="button-7">Siguiente</div>
        </fieldset>



        





        <fieldset class="section menu">
          <h3>Informacion de la(s) habitacion(es)</h3>
          <!-- <div class="button-2 boton-clonar">Agregar habitacion</div> -->
          <div class="clonar">
          <div>
            <!--	<div>
          <label>Cantidad de habitaciones</label>
            </div>
			<div class="number">
			  <input class="number__field" type="number" id="number1" min="1" max="20" step="1" value="1">
			</div> -->
			
          </div> 

         <br><br>
         <label>Tipo de habitacion</label>
         <div class="row cf">
            <div class="four col">
              <input type="radio" name="habitacion" id="estandar" value="estandar" >
              <label for="estandar">
                <h4>Estandar</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="habitacion" id="doble" value="doble"><label for="doble">
                <h4>Doble</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="habitacion" id="deluxe" value="deluxe"><label for="deluxe">
                <h4>Deluxe</h4>
              </label>
            </div>
          </div>

          


           <div>
            	<div>
          <label>Capacidad de personas de la habitacion</label>
            </div>
			<div class="number">
			  <input class="number__field" type="number" name="c_persona" id="numero" value="">
			</div>
			
          </div>


              
             <div class="name">
              <label>Cantidad de camas:</label>
            </div>

               <div class="ajustar">
                <div class="alinear">
				<label>Individual</label>
				</div>
			<div class="number-2">
			  <input class="number__field" type="number" name="cama_individual" id="individual 2"  value="">
			</div>
		
			<div class="alinear">
				<label>Matrimonial</label>
				</div>
			<div class="number-2">
			  <input class="number__field" type="number" name="cama_matrimonial" id="matrimonial 2" value="">
			</div>
		   </div>
		
		<div class="ajustar-2">
			<div class="alinear">
				<label >Kingsize</label>
				</div>
			<div class="number-2 text">
			  <input class="number__field" type="number" name="cama_kingsize" id="kingsize 2"  value="">
			</div>
			<div class="alinear">
				<label>Sofacama</label>
				</div>
			<div class="number-2 text">
			  <input class="number__field " type="number" name="sofacama" id="sofacama 2" value="">
			</div>

		</div>
   </div>
   <hr class="linea" size="2" width="80%" style="margin-top: 50px;">
          <div class="button-10 nivel1">Siguiente</div>
        </fieldset>

        <fieldset class="section">
          <h3>Servicios Que Ofrece en la(s) habitacion(es)</h3>

          <!-- <div class="button-2 boton-clonar2">Agregar habitacion</div> -->

          <div class="container">
  <ul class="ks-cboxtags">
    <li><input type="checkbox" id="checkboxOne" name="cuarto[]" value="Aire acondicionado"><label for="checkboxOne">Aire acondicionado</label></li>
    <li><input type="checkbox" id="checkboxTwo" name="cuarto[]" value="Sillon indivual" ><label for="checkboxTwo">Sillon individual</label></li>
    <li><input type="checkbox" id="checkboxThree" name="cuarto[]" value="Acceso a internet" ><label for="checkboxThree">Acceso a internet</label></li>
    <li><input type="checkbox" id="checkboxFour" name="cuarto[]" value="Servicio de limpieza"><label for="checkboxFour">Servicio de limpieza</label></li>
    <li><input type="checkbox" id="checkboxFive" name="cuarto[]" value="Caja fuerte"><label for="checkboxFive">Caja fuerte</label></li>
    <li><input type="checkbox" id="checkboxSix" name="cuarto[]" value="Closet" ><label for="checkboxSix">Closet</label></li>
    <li><input type="checkbox" id="checkboxSeven" name="cuarto[]" value="Minibar"><label for="checkboxSeven">Minibar</label></li>
    <li><input type="checkbox" id="checkboxEight" name="cuarto[]" value="Frigobar"><label for="checkboxEight">Frigobar</label></li>
    <li><input type="checkbox" id="checkboxNine" name="cuarto[]" value="Espejo"><label for="checkboxNine">Espejo</label></li>
    <li><input type="checkbox" id="checkboxTen" name="cuarto[]" value="Cuna"><label for="checkboxTen">Cuna</label></li>
    <li ><input type="checkbox" id="checkboxEleven" name="cuarto[]" value="Plancha"><label for="checkboxEleven">Plancha</label></li>
    <li><input type="checkbox" id="checkboxTwelve" name="cuarto[]" value="Mesa de trabajo"><label for="checkboxTwelve">Mesa de trabajo</label></li>
    <li><input type="checkbox" id="checkboxThirteen" name="cuarto[]" value="TV"><label for="checkboxThirteen">TV</label></li>
    <li><input type="checkbox" id="checkboxFourteen" name="cuarto[]" value="Ventilador"><label for="checkboxFourteen">Ventilador</label></li>
    <!-- <li><input type="checkbox" id="checkboxFifteen" value="Firefly"><label for="checkboxFifteen">Firefly</label></li> -->
  </ul>

</div>
          <!-- <input type="password" name="password" id="password" placeholder="Password">
          <input type="password" name="password2" id="password2" placeholder="Re-enter Password">
          <input class="submit button" type="submit" value="Sign Up"> -->
          <div class="button-11">Siguiente</div>
        </fieldset>

        <fieldset class="section">
          <h3>Servicios que incluye el baño</h3>

         

          <div class="container">
  <ul class="ks-cboxtags">
    <li><input type="checkbox" id="checkbox1" name="bano[]" value="Agua caliente"><label for="checkbox1">Agua caliente</label></li>
    <li><input type="checkbox" id="checkbox2" name="bano[]" value="Toallas" ><label for="checkbox2">Toallas</label></li>
    <li><input type="checkbox" id="checkbox3" name="bano[]" value="Shampoo" ><label for="checkbox3">Shampoo</label></li>
    <li><input type="checkbox" id="checkbox4" name="bano[]" value="Jabon"><label for="checkbox4">Jabon</label></li>
    <li><input type="checkbox" id="checkbox5" name="bano[]" value="Regadera"><label for="checkbox5">Regadera</label></li>
    <li><input type="checkbox" id="checkbox6" name="bano[]" value="Bañera" ><label for="checkbox6">Bañera</label></li>
    <li><input type="checkbox" id="checkbox7" name="bano[]" value="Secadora de pelo"><label for="checkbox7">Secadora de pelo</label></li>
    <li><input type="checkbox" id="checkbox8" name="bano[]" value="Papel Higienico"><label for="checkbox8">Papel higienico</label></li>
    
  </ul>

</div>
          <!-- <input type="password" name="password" id="password" placeholder="Password">
          <input type="password" name="password2" id="password2" placeholder="Re-enter Password">
          <input class="submit button" type="submit" value="Sign Up"> -->
          <div class="button-8">Siguiente</div>
        </fieldset>

        <fieldset class="section">
          <h3>Otros servicios de la casa</h3>

          <div class="container">
  <ul class="ks-cboxtags">
    <li><input type="checkbox" id="checkboxa1" name="extra[]"value="Lavanderia"><label for="checkboxa1">Lavanderia</label></li>
    <li><input type="checkbox" id="checkboxa2" name="extra[]"value="Alberca" ><label for="checkboxa2">Alberca</label></li>
    <li><input type="checkbox" id="checkboxa3" name="extra[]"value="Estacionamiento" ><label for="checkboxa3">Estacionamiento</label></li>
    <li><input type="checkbox" id="checkboxa4" name="extra[]"value="GYM"><label for="checkboxa4">GYM</label></li>
    <li><input type="checkbox" id="checkboxa5" name="extra[]"value="Terraza"><label for="checkboxa5">Terraza</label></li>
  </ul>

</div>
          <!-- <input type="password" name="password" id="password" placeholder="Password">
          <input type="password" name="password2" id="password2" placeholder="Re-enter Password">
          <input class="submit button" type="submit" value="Sign Up"> -->
          <div class="button-9">Next</div>
        </fieldset>
        <fieldset class="section">
        	<h3>Datos importantes</h3>
        	<input type="text" name="precio" id="precio" placeholder="Precio de la renta $" class="input-number" id="rellenar">
          <select class='form-control' required name="moneda" id="moneda" style="width: 350px; height: 40px;">
          <option value="" selected="">Tipo de moneda</option>
          <option value="CUC">CUC</option>
          <option value="EURO">EURO</option>
          <option value="DOLAR">DOLAR</option>
          <option value="NACIONAL">MONEDA NACIONAL</option>
          </select>
          <select class='form-control' required name="pago" id="pago" style="width: 350px; height: 40px;">
          <option value="" selected="">Forma de pago</option>
          <option value="Tranferencia">Transferencia</option>
          <option value="Efectivo">Efectivo</option>
          </select><br>
          <label>Fechas de Disponibilidad de la casa.</label><br>
          <input type="date"  class='datepicker' id="ingreso" name="fecha_inicio">
          <input type="date" class='datepicker' id="salida" name="fecha_fin" >
          <input type="text" name="titulo" placeholder="Titulo para casa o departamento" required id="rellenar" >
            <input type="text" name="direccion" id="direccion" placeholder="Direccion de la casa" id="rellenar">
            <input type="text" name="referencias" placeholder="Referencias para la ubicacion de casa" id="rellenar">
            <textarea placeholder="descripcion" name="comentario" style="width: 350px; height: 100px;"></textarea>
            <div><label>Sube tus fotos de la casa o departamento.</label></div>
            <div><input type="file" name="subirFoto[]" multiple></div>
             <div class="button-12">Siguiente</div>
        	
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
     <!-- <script src="js/clonar.js"></script> -->
     <script src="js/bootstrap-datepicker.js"></script>
	 <script src="js/form.js"></script> 
</body>
</html>