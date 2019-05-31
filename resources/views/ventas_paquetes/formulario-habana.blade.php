<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Reservación</title>
    <!-- Google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700&amp;subset=latin-ext" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{@asset('form-vents/css/font-awesome.min.css')}}" type="text/css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{@asset('form-vents/css/bootstrap-datepicker3.standalone.css')}}">
        <!-- Page style -->

    <link rel="stylesheet" href="{{@asset('form-vents/css/pagestyle.css')}}" type="text/css" />
    <!-- Form style -->
    <link rel="stylesheet" href="{{@asset('form-vents/css/formstyle.css')}}" type="text/css" />
     </head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm  navbar-dark ">
          <a class="navbar-brand justify-content-" href="../paquetes/index-2.html"><button class="btn btn-primary">Regresar</button></a>
          <a class="navbar-brand justify-content-" href="../index.php"><button class="btn btn-primary">Inicio</button></a>
        </nav>
       
        <div class="content" style='margin-top:5px'>
            <div class="row">
               
                <article class="col-md-12">
                    <!-- Start Subscribe Form -->
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <form method="POST" action="{{url('paquetes')}}" name="booking" id="booking">
                                @csrf
                                <!-- Form Title -->
                                <div class="form-heading text-center">
                                    <div class="title">Reservación</div>
                                   
                                </div>
								
								<div class='row' id="resultados_ajax"></div>
                                <!-- First & Last Name -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nombre(s)</label>
                                        <input class="input-text" type="text" name="nombres" id="nombres" required /> 
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
                                        <input type="email" name="email" id="email" required/> 
									</div>
                                    <div class="col-md-4">
                                        <label>Teléfono</label>
                                        <input type="text"  name="telefono" id="telefono" class="input-number" value="" required /> 
										
									</div>
                                    <div class="col-md-4">
                                        <label>País</label>
                                        <input class="input-text" type="text" name="pais" id="pais" required /> 
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-md-6">
                                        <label>Fecha ingreso</label>
                                        <input type="text" class='datepicker' name="ingreso" id="ingreso"   required /> 
									</div>
                                    <div class="col-md-6">
                                        <label>Fecha salida</label>
                                        <input type="text"  class='datepicker' name="salida" id="salida"  required/> 
									</div>	
                                </div>
								
								<div class="row">
                                    <div class="col-md-6">
                                        <label>Cantidad Personas</label>
                                        <select class='form-control' name="personas" id="personas" required>
										  <option selected="">--Selecciona--</option>
										  <option value="1">1</option>
										  <option value="2" selected="">2</option>
										  <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
										</select>
                                        
									</div>
                                    <div class="col-md-6">
                                        <p>*El paquete incluye 2 personas adultas, </br>
                                         por cada persona adicional se cotizara como un paquete extra.</p>
                                        <p>*No aplica para menores de edad.</p> 
                                    </div>
                                </div>
                            </br>
                            </br>

                                    <div class="row">
                                        <div class="col-md-4">
                                        <center><h4>Paquetes</h4>
                                          <h6><span id="numero_paquete"></span> Paquete(s) </h6>
                                          <h6><span id="precio_paquete"></span></h6>

                                      </center>
                                    </div>

                                        <div class="col-md-4">
                                            <center><h4>Show Nocturno</h4>
                                                <div>
                                                    <img src="images/show-nocturno4.jpg" width="60%" alt="..." class="rounded-circle">
                                                  </div>
                                                  <div>
                                                    <span class="titulo" id="show_nocturno" name="show_nocturno"><a href="#" id="shows" data-toggle="popover" title="Descripcion" data-content="
                                                      contenido </br>
                                                      " data-trigger="hover">Parisien</a></span>
                                                </div>
                                            </center>
                                        </div>

                                    <div class="col-md-4">
                                        
                                        <h4>Habitación</h4>
                                                  <div>
                                                    <img src="images/habitacion_casa.jpg" width="60%" alt="..." class="rounded-circle">
                                                  </div>
                                                  <div>
                                                    <span class="titulo"><a id="habitacion" data-toggle="popover" title="Descripcion" data-content="
                                                      contenido " data-trigger="hover">Habitación Básica</a></span>
                                                </div>
                                        
                                    </div>

                                </div>
                                <input type="hidden" name="nom_paquete" value="Paquete Habana">
                                <input type="hidden" name="nom_habitacion" value="Habitacion Basica">
                                <input type="hidden" name="show_nocturnos" value="Parisien sin cena">
                                <input type="hidden" name="tours" value="">
                                <input type="hidden" name="destino" value="Habana">
								<br>
                               <div class='row'>
								<div class='col-md-12'>
									<label>Por favor describa sus necesidades, o algo que desee incluir.</label>
									<input type="textarea" name="comentario" id="comentario" >
								</div>
							   </div>
                    
                    <!--Modal -->
                    <div class="modal fade" id="Jmodal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"style="text-align: center;">Cuba4Vacations</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Gracias por reservar con Cuba4Vacations, <br/>
                                    Te estaremos contactando dentro de 24 a 48hrs. 
                                </div>
                            </div>
                        </div>
                    </div> <!--End Modal-->
                                    <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="adam-button" id="boton">ENVIAR</button>
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
            <script src="{{@asset('form-vents/js/formscript.js')}}" type="text/javascript"></script>
            <!-- Bootstrap Datepicker JS -->
            <script src="{{@asset('form-vents/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){


    		
                var date = new Date();
                date.setDate(date.getDate());

                  $('#ingreso').datepicker({
                    startDate: date,
                    format: 'dd/mm/yyyy',
                    'setStartDate', $('#datedesde').val()
                  });

                    });

                  $('#salida').datepicker({
                    startDate: date,
                    format: 'dd/mm/yyyy'
                  }).on('changeDate',
                    function (selected) {
                        $('#ingreso').datepicker('setEndDate', $('#salida').val());

                    });


              /*  $('#ingreso').datepicker().on('change', function(e) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) {
                        $("#salida").datepicker('setDate', minDate).
                        datepicker('option', 'minDate', minDate);
                    }
                });*/
                /*$('#salida').datepicker().on('change', function(e) {
                    var maxDate = $(this).datepicker('getDate');
                    if (maxDate) {
                        $("#ingreso").datepicker('setDate', maxDate).
                        datepicker('option', 'maxDate', maxDate);
                    }
                });*/
                //
                /*$("#salida").change(function () {
                    let startDate = $("#ingreso").val()
                    let endDate = $("#salida").val()

                    if (Date.parse(endDate) <= Date.parse(startDate)) {
                        console.log('#salida');
                        $("#salida").val("")
                    }
                });*/

            
    		// $( "#booking" ).submit(function( event ) {
    		//   var parametros = $(this).serialize();
    		//   $.ajax({
    		// 		type: "POST",
    		// 		url: "enviar-mail.php",
    		// 		data: parametros,
    		// 		 beforeSend: function(objeto){
    		// 			$("#resultados_ajax").html("");
    		// 		  },
    		// 		success: function(datos){
    		// 			$("#resultados_ajax").html(datos);
    		// 		}
    		// });
    	
    		//   event.preventDefault();
    		// });

            $("#personas").change(function(){
            /*    var cantidad_personas = $("#personas").val()
                if(cantidad_personas < 3){
                    $("#numero_paquete").html("1")
                }else{
                    $("#numero_paquete").html("2")
                }*/

            var cantidad_paquetes = Math.floor($("#personas").val() / 2) + $("#personas").val() % 2;
                $("#numero_paquete").html(cantidad_paquetes);

            });

            $("#personas").change(function(){
                var precio = $("#personas").val();
                if (precio < 3){
                    $("#precio_paquete").html("$100-CUC")
                }else if (precio < 5){
                    $("#precio_paquete").html("$200-CUC")
                }else {
                    $("#precio_paquete").html("$300-CUC") 

                }

            });


          
            $('.input-number').on('input', function () { 
		     this.value = this.value.replace(/[^0-9]/g,'');
			   });

            $('.input-text').on('input', function () {
             this.value = this.value.replace(/[^A-Za-z," "]/g,' ');
             });

            document.getElementById("booking").reset();

            $("#shows").popover({html:true});
            $("#habitacion").popover({ html:true});


        });
    </script>
	
</body>
</html>