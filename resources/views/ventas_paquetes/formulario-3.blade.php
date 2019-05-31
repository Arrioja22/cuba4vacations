<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Personaliza tu viaje</title>
    <!-- Google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700&amp;subset=latin-ext" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{@asset('form-vents/css/font-awesome.min.css')}}" type="text/css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{@asset('form-vents/css/bootstrap-datepicker.css')}}">
        <!-- Page style -->

    <link rel="stylesheet" href="{{@asset('form-vents/css/pagestyle.css')}}" type="text/css" />
    <!-- Form style -->
    <link rel="stylesheet" href="{{@asset('form-vents/css/formstyle.css')}}" type="text/css" />
  </head>


   <body>
		<div class="container align-content-around">
			<nav class="navbar navbar-expand-sm  navbar-dark ">
          <a class="navbar-brand justify-content-" href="../paquetes/index-4.html"><button class="btn btn-primary">Regresar</button></a>
          <a class="navbar-brand justify-content-" href="../index.php"><button class="btn btn-primary">Inicio</button></a>
        </nav>

		    <div class="content" style='margin-top:5px'>
		        <div class="row">

	<article class="col-md-12 col-xs-12">
	    <!-- Start Subscribe Form -->
	    <div class="row">
	        <div class="col-md-10 offset-md-1">
	            <form method="POST" action="php/add_armatupaquete.php" name="booking" id="booking">
	                <!-- Form Title -->
	                    <div class="form-heading text-center">
	                        <div class="title">Personaliza tu viaje</div>

	                    </div>

	                    <div class="row">
	                        <div class="col-md-6">
	                        	<div class="col-md-12">
	                        	   <label>Personas:</label>
	                        	</div>
	                        	<div class="col-md-6 form-1" style="float: left;">
	                                    <select class='form-control' required name="adulto" id="adulto">
	                                      <option value="" selected="">Adultos</option>
	                                      <option value="1">1</option>
	                                      <option value="2">2</option>
	                                      <option value="3">3</option>
	                                      <option value="4">4</option>
	                                      <option value="5">5</option>
	                                      <option value="6">6</option>
	                                    </select>
	                              </div>

	                            <div class="col-md-6 form-1" style="float: right;">
	                                    <select class='form-control' required name="nino" id="nino">
	                                      <option value="" selected="">Niños</option>
	                                      <option value="0">0</option>
	                                      <option value="1">1</option>
	                                      <option value="2">2</option>
	                                      <option value="3">3</option>
	                                      <option value="4">4</option>
	                                      <option value="5">5</option>
	                                      <option value="6">6</option>
	                                    </select>
	                            </div>
	                        </div>

	                        <div class="col-md-6">
	                            <label>Destino:</label>
	                            <select class='form-control' name="destino" id="destino" required>
	                              <option value="">--Selecciona--</option>
	                              <option value="habana" id="habana"> Habana</option>
	                              <option value="viñales" id="viñales" selected="">Viñales</option>
	                              <option value="trinidad" id="trinidad">Trinidad</option>
	                            </select>
	                        </div>
	                    </div>

	                    <div class="row">
	                        <div class="col-md-6">
	                            <label>Fecha ingreso</label>
	                            <input type="text" class='datepicker' name="ingreso" id="ingreso" required />
	                        </div>
	                        <div class="col-md-6">
	                            <label>Fecha salida</label>

	                            <input type="text"  class='datepicker2' name="salida" id="salida" required/>
	                        </div>
	                    </div>

	                    <span id="span-cdias"></span>

	                   <center>
	                    <div class="row ">
	                    	<div class="col-md-12">
	                    	<label>Habitación</label>
	                         </div>
	                    	<div class="col-md-4">
	                    		<label>
	                    		  <div>
	                    		  
	                    			<img src="images/habitacion_casa.jpg" width="60%" alt="..." class="img-check rounded-circle">
	                    			<input type="checkbox" name="habitacion[]" value="basica">
	                    		    
	                    		  </div>
	                    		   
	                    		  <div>
	                    			<span  >
	                    			<a class="text-danger" id="habitacion_basica" data-toggle="popover" title="Descripcion" data-content="
	                    			Capacidad: 2 Adultos y 1 niño menor a 10 años <br/>
	                    			Tipo de cama: 1 Matrimonial <br/>
	                    			Servicios que incluye: <br/>
	                    			Aire acondicionado<br/>
	                    			TV<br/>
	                    			Telefono<br/>
	                    			Baño completo<br/>
	                    			Toallas
	                    		" data-trigger="hover" data-placement="bottom">Habitación Básica</a>
	                    		    </span>
	                    		</div>
	                    	   </label>
	                    	   <div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="numh_basica" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    	</div>

	                    	<div class="col-md-4">
	                    		<label>
	                    			<div>
	                    		   
	                    			<img src="images/habitacion_casa1.jpg" width="60%" alt="..." class="img-check  rounded-circle"><input type="checkbox" name="habitacion[]" value="doble">
	                    		    
	                    		</div>
	          
	                    		<div>
	                    			<span >
	                                <a  id="habitacion_doble" data-toggle="popover" title="Descripcion"
	                                data-content="
	                    			Capacidad: 4 Personas <br/>
	                    			Tipo de cama: 2 Camas Matrimonial <br/>
	                    			Servicios que incluye: <br/>
	                    			Aire acondicionado<br/>
	                    			TV<br/>
	                    			Telefono<br/>
	                    			Baño completo<br/>
	                    			Toallas
	                    		" data-trigger="hover">
	                    			Habitación Doble</a>
	                    		</span></div>
	                    		</label>
	                    		<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="numh_doble" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    	</div>
	                    	<div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			
	                    			<img src="images/habitacion_casa2.jpg" width="60%" alt="..." class="img-check  rounded-circle" ><input type="checkbox" name="habitacion[]" value="deluxe">
	                    		   
	                    			</div>
	                    		    
	                    			<div>
	                    			<span class="titulo">
	                    			<a href="" id="habitacion_deluxe" data-toggle="popover" title="Descripcion"
	                    			data-content="
	                    			Capacidad: 2 Adultos y 1 niño menor a 10 años <br/>
	                    			Tipo de cama: 1 Kingsize <br/>
	                    			Servicios que incluye: <br/>
	                    			Aire acondicionado<br/>
	                    			TV<br/>
	                    			Renta de internet<br/>
	                    			Caja fuerte<br/>
	                    			Minibar<br/>
	                    			Telefono<br/>
	                    			Baño completo<br/>
	                    			Toallas
	                    		" data-trigger="hover">

	                    			Habitación Deluxe</a></span>
	                    		</div>
	                    		</label>
	                    		<div class="row">

	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="numh_deluxe" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    	</div>
	                    </div>

	                <!-- <div class="row">
	                	<div class="col-md-12">
	                		<label >Numero de habitaciones:</label>
	                	</div>
	                    <div class="col-md-6">
	                                    <select class='form-control' required name="n_habitacion" id="n_habitacion">
	                                      <option value="" selected="">--Selecciona--</option>
	                                      <option value="1">1</option>
	                                      <option value="2">2</option>
	                                      <option value="3">3</option>
	                                      <option value="4">4</option>
	                                      <option value="5">5</option>
	                                      <option value="6">6</option>
	                                    </select>
	                    </div>
	                </div> -->

	                <div class="row" id="show-habana">
	                	<div class="col-md-12">
	                		<label>Show Nocturnos</label>
	                	</div>
	                     	<div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="images/show-nocturno1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="show[]" value="Tropicana">
	                    		</div>
	                    		
	                    			<span >
	                    				<a href="" id="show_1" data-toggle="popover" title="Descripcion"
	                    				data-content=" Un paraíso bajo las estrellas. <br/>
	                    				show nocturno cubano de más prestigio 
	                    				internacionalmente.
	                    				" data-trigger="hover">
	                    				Tropicana
	                    		    </a></span>
	                    		
	                    		</label>
	                    		<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_show_tropicana" style="width: 80px;">
	                    	   	</div>
	                    	   </div>

	                    	</div>

	                    	<div class="col-md-4">
	                    		<label >
	                    			<div>
	                    			<img src="images/show-nocturno2.jpg" width="60%" alt="..." class="img-check  rounded-circle">
	                    			<input type="checkbox" name="show[]" value="Parisien">
	                    		</div>
	                    		
	                    			<span class="titulo">
	                    			<a href="" id="show_2" data-toggle="popover" title="Descripcion"
	                    				data-content=" Gran show de fusión de las <br/>
	                    				culturas que formaron las raices cubanas.
	                    				" data-trigger="hover">
	                    			Parisien</a>
	                    		</span>
	                    		
	                    		</label>
	                    		<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_show_parisien" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    	</div>
	                    	<div class="col-md-4">

	                    		<label >
	                    			<div>
	                    			<img src="images/show-nocturno4.jpg" width="60%" alt="..." class="img-check  rounded-circle" ><input type="checkbox" name="show[]" value="Buenavista social club">
	                    		</div>
	                    		<div>
	                    			<span class="titulo">
	                    			<a href="" id="show_3" data-toggle="popover" title="Descripcion"
	                    				data-content="Viaja a los clásicos ritmos <br/>
	                    				cubanos que te haran soñar.
	                    				" data-trigger="hover">
	                    			Buenavista social club</a>
	                    		</span>
	                    		</div>
	                    		</label>
	                    		<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_show_buenavista" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    	</div>

	                </div>


	                <div class="row" id="tours_habana">
	                	<div class="col-md-12">
	                		<label class>Tours-Habana</label>
	                	</div>
	                    <div class="col-md-4">
	                    		<label >
	                    			<div>
	                    			<input type="checkbox" name="toursHabana[]" value="Viaja a la habana de los Años 50's"><img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle">
	                    		</div>
	                    			<div>
	                    			<span class="titulo">
	                    			<a href="" id="tour_habana1" data-toggle="popover" title="Descripcion"
	                    				data-content="
	                    				Caminata por el Centro Histórico de La Habana Vieja: </br>

	                    				•	Capitolio </br>
										•	Plaza de San Francisco </br>
										•	Plaza Vieja</br>
										•	Plaza de Armas</br>
									    •	Catedral </br>
										•	Calle Obispo </br>
										•	Bar el Floridita </br>
										•	La Bodeguita del medio </br>

	                    				Punto de encuentro: Parque Central (Estatua de José Martí). </br>
	                    				guía local bilingüe  </br>
	                    				duración aprox. de 4 horas <br/>




	                    				" data-trigger="hover">
	                    			Viaja a la habana de los Años 50's</a></span>
	                    		</div>
	                    		</label>
	                    		<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_viaja50" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label clas>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursHabana[]"class="two" value="Auto antiguo">
	                    		</div>
	                             
	                    			<span class="titulo">
	                    			<a href="" id="tour_habana2" data-toggle="popover" title="Descripcion"
	                    				data-content="Recorrido panorámico en auto antiguo por la Habana de los años 50’s:
	                    				</br>

	                    				•	Gran teatro de La Habana</br>
										•	Capitolio Nacional</br>
										•	Parque Central</br>
										•	Parque La Fraternidad </br>
										•	Plaza de la Revolución </br>
	                                    •	Colina Universitaria </br>
										•	Hotel Nacional </br>
										•	Hotel Capri </br>
										•	Malecón</br>

									     guía local bilingüe </br>
									     Duración aprox. de 2 horas</br>

	                    				" data-trigger="hover">
	                    			Auto antiguo</a>
	                    		</span>
	                    		
	                    		</label>
	                    		<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_antiguo" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label clas>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursHabana[]" class="two" value="Habana moderna">

	                    		</div>
	                    		<div>
	                    			<span class="titulo">
	                    			<a href="" id="tour_habana3" data-toggle="popover" title="Descripcion"
	                    				data-content="Recorrido panorámico en La Habana Moderna:
	                    				</br> 

	                    				•	Quinta Avenida de Miramar </br> 
										•	La Marina Hemingway </br> 
										•	Coney Island </br>
									     guía local bilingüe </br> 
								         duración aprox. de 2 horas</br>

	                    				" data-trigger="hover">Habana moderna</a>
	                    			</span>
	                    		</div>
	                    		</label>
	                    		<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_hmoderna" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label clas>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check  rounded-circle"><input type="checkbox"  name="toursHabana[]" class="two" value="Canonazo de las 9pm">
	                    		</div>
	                    			<div>
	                    		<span class="titulo">
	                    		<a href="" id="tour_habana4" data-toggle="popover" title="Descripcion"
	                    				data-content=" El tour incluye: </br>
	                    				Paso por el túnel sumergido de La Habana </br>
										Visita al Cristo de La Habana </br>
										Visita a la Fortaleza de la Cabaña </br>
										Exhibición de la Crisis de los misiles </br>
										Show del cañonazo de las 9pm </br>

	                                        Con guía local biligüe </br>
												Capacidad máxima para 4 personas por vehículo</br>
	                    			</br>


	                    				" data-trigger="hover">Cañonazo de las 9pm</a></span>
	                    	</div>
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_canonazo" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label clas>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox"  name="toursHabana[]"class="two" value="Visita las playas del este">
	                    		</div>
	                    			<div>
	                    		<span class="titulo">
	                    			<a href="" id="tour_habana5" data-toggle="popover" title="Descripcion"
	                    				data-content=" Recorrido panoramico en auto </br>
	                    			   por las playas del este: </br>
	                    				Santa María del Mar </br>
										Guanabo </br>
										Boca Ciega </br>
	                                  Capacidad máxima para 4 personas por vehículo</br>

	                    				" data-trigger="hover">
	                    			Visita las playas del este</a>
	                    			</span>
	                    	</div>
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_playas" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                </div>

	                <div class="row" id="tours_trinidad">
	                	<div class="col-md-12">
	                		<label >Tours-Trinidad</label>
	                	</div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursTrinidad[]" value="Reserva ecológica">
	                    		</div>
	                    			<div>
	                    		<span class="titulo" id="titulo">
	                    		<a href="#titulo" id="tour_varadero1" data-toggle="popover" title="Descripcion"
	                    				data-content="Visita unas maravillosas cuevas
	                    				" data-trigger="hover">
	                    			Reserva ecológica</a></span>
	                    	</div>
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_r_ecologica" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursTrinidad[]" value="Atracciones marinas">
	                    		</div>
	                    			<div>
	                    		<span class="titulo">
	                    		<a href="" id="tour_varadero2" data-toggle="popover" title="Descripcion"
	                    				data-content="snorkel,buceo,...
	                    				" data-trigger="hover">
	                    			Atracciones marinas</a>
	                    		</span>
	                    	</div>
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_atra_marina" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle">
	                    		<input type="checkbox" name="toursTrinidad[]" value="Playa y relax">
	                    	</div>
	                    		
	                    		<span class="titulo">
	                    		<a href="" id="tour_varadero3" data-toggle="popover" title="Descripcion"
	                    				data-content="Ven conoce las playas y relajate de la mejor manera
	                    				" data-trigger="hover">
	                    			Playa y relax</a></span>
	                    	
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_playa_relax" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle">
	                    		<input type="checkbox" name="toursTrinidad[]" value="Delfinario">
	                    	</div>
	                    		
	                    		<span class="titulo">
	                    		<a href="" id="tour_varadero4" data-toggle="popover" title="Descripcion"
	                    				data-content="nada con delfines y un excelente show
	                    				" data-trigger="hover">
	                    			Delfinario</a></span>
	                    	
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_delfinario" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursTrinidad[]" value="Recorrido auto antiguo">
	                    		</div>
	                    			
	                    		<span>
	                    		<a href="" id="tour_varadero5" data-toggle="popover" title="Descripcion"
	                    				data-content="Recorre Varadero y Matanzas
	                    				" data-trigger="hover">
	                    			Recorrido auto antiguo</a></span>
	                    	
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_re_antiguo" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursTrinidad[]" value="Boca de Guama">
	                    		</div>
	                    			<div>
	                    		<span class="titulo">
	                    		<a href="" id="tour_varadero6" data-toggle="popover" title="Descripcion"
	                    				data-content="cocodrilos
	                    				" data-trigger="hover">
	                    			Boca de Guama
	                    		</a></span>
	                    	</div>
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_bguama" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursTrinidad[]" value="Rio canimar">
	                    		</div>
	                    			
	                    		<span class="titulo">
	                    		<a href="" id="tour_varadero7" data-toggle="popover" title="Descripcion"
	                    				data-content="pesca </br> 
	                    				              caballos y </br>
	                    				              buceo
	                    				" data-trigger="hover">
	                    			Rio canimar</a></span>
	                    	
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_rcanimar" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                </div>

	                <div class="row" id="tours_viñales">
	                	<div class="col-md-12">
	                		<label >Tours-Viñales</label>
	                	</div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursVinales[]" value="Valle de vinales">
	                    		</div>
	                    			<div>
	                    		<span class="titulo">
	                    		<a href="" id="tour_viñales1" data-toggle="popover" title="Descripcion"
	                    				data-content="caballos </br>
	                    				fabrica de puros </br> 
	                    				cafe <br>
	                    				y licor de guayabita </br>
	                    				
	                    				" data-trigger="hover">
	                    			Valle de viñales</a></span>
	                    	</div>
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_v_vinales" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursVinales[]" value="Jardín Botánico">
	                    		</div>
	                    			<div>
	                    		<span class="titulo">
	                    		<a href="" id="tour_viñales2" data-toggle="popover" title="Descripcion"
	                    				data-content="--contenido--
	                    				" data-trigger="hover">
	                    			Jardín Botánico</a></span>
	                    	</div>
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_jbotanico" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursVinales[]"value="Atracciones extremas">
	                    		</div>
	                    			
	                    		<span>
	                    		<a href="" id="tour_viñales3" data-toggle="popover" title="Descripcion"
	                    				data-content="Canopy 'El fortín' </br>
	                    				   tirolesa
	                    				" data-trigger="hover">
	                    			Atracciones extremas</a></span>
	                    	
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_aextremas" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursVinales[]" value="Mirador los jardines">
	                    		</div>
	                    			<div>
	                    		<span class="titulo">
	                    		<a href="" id="tour_viñales4" data-toggle="popover" title="Descripcion"
	                    				data-content=" --contenido--
	                    				" data-trigger="hover">
	                    			Mirador los jardines</a></span>
	                    	</div>
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_mjardines" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>
	                    <div class="col-md-4">
	                    		<label>
	                    			<div>
	                    			<img src="../tours/images/Blog/1.jpg" width="60%" alt="..." class="img-check rounded-circle"><input type="checkbox" name="toursVinales[]" value="Caverna de santos tomas">
	                    		</div>
	                    			
	                    		<span class="titulo">
	                    		<a href="" id="tour_viñales5" data-toggle="popover" title="Descripcion"
	                    				data-content="--contenido--
	                    				" data-trigger="hover">
	                    			Caverna de santos tomas</a></span>
	                    	
	                    	</label>
	                    	<div class="row">
	                    			<div class="col-md-12">
	                    				<p>Cantidad</p>
	                    	   	<input type="number" name="cant_tour_csantos" style="width: 80px;">
	                    	   	</div>
	                    	   </div>
	                    </div>

	                </div>
	                </center>


				    <div class='row' id="resultados_ajax"></div>
	                    <!-- First & Last Name -->
	                    <div class="row">
	                        <div class="col-md-6">
	                            <label>Nombre(s)</label>
	                            <input class="input-text" type="text" name="nombres" id="nombres" required/>
							</div>
	                        <div class="col-md-6">
	                            <label>Apellidos</label>
	                            <input class="input-text" type="text" name="apellidos" id="apellidos" required />
							</div>
	                    </div>
	                    <!-- Email & Phone  -->
	                    <div class="row">
	                        <div class="col-md-4">
	                            <label>Correo electrónico</label>
	                            <input type="email" name="email" id="email" required "/>
							</div>
	                        <div class="col-md-4">
	                            <label>Teléfono</label>
	                            <input type="text"  name="telefono" id="telefono"
	                           class="input-number" value="" required />

							</div>
	                        <div class="col-md-4">
	                            <label>País</label>
	                            <input class="input-text" type="text" name="pais" id="pais" required />
	                        </div>
	                    </div>


	                        <div class='row'>
									<div class='col-md-12'>
										<label>Por favor describa sus necesidades, o algo que desee incluir.</label>
										<input class="input-text" type="textarea" name="comentario" id="comentario" >
									</div>
	                        </div>
	                        <div class="row">
	                                <div class="col-md-12">
	                                    <button class="adam-button">ENVIAR</button></button>
	                                </div>
	                        </div>
				                    </div>
		                        </form>
		                    </div>
		                </div>
		            </article>
		            <div class="scrollup">
                                <a href="#">
                                    <i class="fa fa-chevron-up">
                                    </i>
                                </a>
                            </div>
				    <div class="clearfix"></div>
				</div>
		    </div>
	    </div>
		    <!-- jQuery -->
		   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		    <!-- Bootstrap JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js" ></script>
		    
		    <!-- Form JS -->
		    <script src="{{@asset('form-vents/s/formscript.js')}}" type="text/javascript"></script>
		    <!-- Bootstrap Datepicker JS -->
		    <script src="{{@asset('form-vents/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
		    <script type="text/javascript">
                $(document).ready(function(){

                  $("#show-habana").hide();
                  $("#tours_habana").hide();
                  $("#tours_trinidad").hide();
                  $("#tours_viñales").show();

                  $("#destino").change(function() {
                    let destino = $("#destino").val();
                    switch(destino) {
                      case 'habana':
                        $("#show-habana").show();
                        $("#tours_habana").show();
                        $("#tours_trinidad").hide();
                        $("#tours_viñales").hide();
                        break;
                      case 'trinidad':
                        $("#show-habana").hide();
                        $("#tours_habana").hide();
                        $("#tours_trinidad").show();
                        $("#tours_viñales").hide();
                        break;
                      case 'viñales':
                        $("#show-habana").hide();
                        $("#tours_habana").hide();
                        $("#tours_trinidad").hide();
                        $("#tours_viñales").show();
                        break;
                      default:
                        $("#show-habana").hide();
                        $("#tours_habana").hide();
                        $("#tours_trinidad").hide();
                        $("#tours_viñales").hide();
                    }
                  });


		                var date = new Date();
		                date.setDate(date.getDate());

		                  $("#ingreso, #salida").datepicker({  
		                    startDate: date,
		                    format: 'dd/mm/yyyy'
		                  });

		                
		                $("#salida").change(function () {
		                    let startDate = $("#ingreso").val()
		                    let endDate = $("#salida").val()

		                    if ((Date.parse(endDate) <= Date.parse(startDate))) {
		                        //console.log("fecha menor");
		                        $("#salida").val("")
		                    }
		                });






								/*$(document).ready(function(e){

									$('.img-check').click(function(e) {
						        $('.img-check').not(this).removeClass('check')
						    		.siblings('input').prop('checked',false);
						    	$(this).addClass('check')
						            .siblings('input').prop('checked',true);
						         });

							});

							$(document).ready(function(e){

									$('.img-check2').click(function(e) {
						        $('.img-check2').not(this).removeClass('check')
						    		.siblings('input').prop('checked',false);
						    	$(this).addClass('check')
						            .siblings('input').prop('checked',true);
						         });

							});

							$(document).ready(function(e){

									$('.img-check3').click(function(e) {
						        $('.img-check3').not(this).removeClass('check')
						    		.siblings('input').prop('checked',false);
						    	$(this).addClass('check')
						            .siblings('input').prop('checked',true);
						         });

							});


							$(document).ready(function(e){

									$('.img-check4').click(function(e) {
						        $('.img-check4').not(this).removeClass('check')
						    		.siblings('input').prop('checked',false);
						    	$(this).addClass('check')
						            .siblings('input').prop('checked',true);
						         });

							});

							$(document).ready(function(e){

									$('.img-check5').click(function(e) {
						        $('.img-check5').not(this).removeClass('check')
						    		.siblings('input').prop('checked',false);
						    	$(this).addClass('check')
						            .siblings('input').prop('checked',true);
						         });

							});*/


								$('.input-number').on('input', function () {
					              this.value = this.value.replace(/[^0-9]/g,'');
					                });

								$('.input-text').on('input', function () {
					              this.value = this.value.replace(/[^A-Za-z," "]/g,'');
					                });


			                $("#habitacion_basica").popover({ html: true});
			                $("#habitacion_doble").popover({ html: true});
			                $("#habitacion_deluxe").popover({ html: true});
			                $("#show_1").popover({ html: true});
			                $("#show_2").popover({ html: true});
			                $("#show_3").popover({ html: true});
			                $("#tour_habana1").popover({ html: true});
			                $("#tour_habana2").popover({ html: true});
			                $("#tour_habana3").popover({ html: true});
			                $("#tour_habana4").popover({ html: true});
			                $("#tour_habana5").popover({ html: true});
			                $("#tour_varadero1").popover({ html: true});
			                $("#tour_varadero2").popover({ html: true});
			                $("#tour_varadero3").popover({ html: true});
			                $("#tour_varadero4").popover({ html: true});
			                $("#tour_varadero5").popover({ html: true});
			                $("#tour_varadero6").popover({ html: true});
			                $("#tour_varadero7").popover({ html: true});
			                $("#tour_viñales1").popover({ html: true});
			                $("#tour_viñales2").popover({ html: true});
			                $("#tour_viñales3").popover({ html: true});
			                $("#tour_viñales4").popover({ html: true});
			                $("#tour_viñales5").popover({ html: true});

			                document.getElementById("booking").reset(); 


								$(".img-check").click(function(){
								$(this).toggleClass("check");
							     });

						          //function redirection() { 
						       
						         /*window.location = "formulario-2.html?destino=habana"; */

						         //setTimeout("redirection ()", 10000 );
                });
            </script>
	</body>
</html>
