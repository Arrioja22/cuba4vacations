
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta content="width=device-width, initial-scale=1" name="viewport">
 	<meta charset="UTF-8">
 	<title>Bievenido Socio</title>
 	<link href="../blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"href="{{@asset('socios/css/estilos.css')}}">
  <link rel="stylesheet" type="text/css" href="{{@asset('socios/css/mdb.lite.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{@asset('socios/css/mdb.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{@asset('socios/css/style.min.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:600" rel="stylesheet"> 
  
 </head>
 <body >
 	   <!--Navbar-->
<nav class="navbar navbar-expand-lg  navbar-dark   rgba-brown-strong fixed-top scrolling-navbar" data-spy="affix">

  <!-- Navbar brand -->

  <!-- Collapse button -->
  <button class="navbar-toggler "  type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <a class ="d-inline-block align-top navbar-brand" href="#"><img src="{{@asset('socios/img/cuba4vacations-logo3.png')}}" width="40%" height="10%"></a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active ">
        <a class="nav-link" href="../index.php">Inicio
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="formularios/renta-depa.php">Vivienda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="formularios/renta-auto.php">Automovil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="formularios/renta-extra.php">Otros servicios</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown ">
        @if (auth()->check())
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">{{ auth()->user()->nombre }}</a>
          @endif
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">Cerrar Sesion</a>
        </div>
      </li>

    </ul>
    <!-- Links -->
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->


  <div id="carouselExampleControls col-md-12 col-xs-12" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="over"></div>
      <img class="d-block w-100" src="{{@asset('socios/img/fondo_socio.jpg')}}"  alt="First slide">
      
    </div>
    <div class="carousel-item">
      <div class="over"></div>
      <img class="d-block w-100" src="{{@asset('socios/img/fondo_socio.jpg')}}" alt="Second slide">

    </div>
    <div class="carousel-item">
      <div class="over"></div>
      <img class="d-block w-100" src="{{@asset('socios/img/fondo_socio.jpg')}}" alt="Third slide">

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <div class="container-fluid">
  <div class="row">
    <div class="col-md-3 cont-1">
          <div class="">
                <img class="img-circle" src="{{@asset('socios/img/aaaa.jpg')}}" width="350px" height="300px">
            </div>
      </div>
      <div class="col-md-1"></div>
    <div class="col-md-8 cont-2">
      <div class="">
                <h1>Bienvenido(a)</h1>
            </div>
            <div class="texto">
                <p>Descubre como abrir las puertas de tu hogar a las personas indicadas, y al mismo tiempo ganar dinero. <br>
                  Se parte de esta gran familia que es Cuba4Vacations.<br>
                  Con nosotros como equipo podrás lograr tus sueños expandiendo las fronteras con los servicios que ofreces. <br>
                  Sea que tengas una casa o departamento, carro de renta, ofrezcas tour guiados, paladares o restaurantes entre otros; podrás formar parte de esta gran familia y crecer junto a Cuba4Vacations. trabajando juntos crearemos lazos de confianza y respeto donde todos ganemos.
                 </p>
            </div>
        </div>
  </div>
  </div>


    <footer class="page-footer font-small unique-color-dark mt-5">
      <div class="footer-copyright text-center py-3"> Derechos Reservados &copy;Cuba4Vacations 2018.
    </div>
    </footer>


     <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h5 class="modal-title text-white" id="exampleModalLabel">Cerrar sesión</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">¿Estás seguro de que deseas cerrar sesión?</div>
        <div class="modal-footer">
          <button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-info "
          onclick="event.preventDefault();
         document.getElementById('logout-form').submit();
 
          ">Cerrar sesión</button>
          <form  id="logout-form" action="{{url('/salir')}}" method="POST"> @csrf</form>
        </div>
      </div>
    </div>
  </div>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="{{@asset('socios/js/mdb.min.js')}}"></script>
    <!-- <script type="text/javascript">
 $(document).ready(function(){    
    
     $('.nav-link').css('color', '#ffffff');

 $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll < 1){
            $('.fixed-top').css('background', 'rgba(100,166,184,0.9)');
        } else{
            $('.fixed-top').css('background', 'rgba(100, 162, 184, 0.9)');
        }
    });
  });
    </script> -->
 </body>
 </html>