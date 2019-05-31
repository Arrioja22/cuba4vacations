<?php
include_once ('conexion.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$habitacion = '';
 $show='';
 $toursHabana='';
 $toursTrinidad='';
 $toursVinales='';

  if (isset ($_POST['habitacion'])) {
     $habitacion = implode(' , ' , $_POST['habitacion']);
  }
  if (isset($_POST['show'])) {
      $show = implode(' , ' , $_POST['show']);
     }
     if (isset($_POST['toursHabana'])) {
        $toursHabana = implode(' , ' , $_POST['toursHabana']);
     }
     if (isset($_POST['toursTrinidad'])) {
      $toursTrinidad = implode(' , ' , $_POST['toursTrinidad']);
     }
     if (isset($_POST['toursVinales'])) {
      $toursVinales = implode(' , ' , $_POST['toursVinales']);
     }






//CAPTURAR DATOS POR POST
$cant_adultos = $_POST['adulto'];
$cant_nino = $_POST['nino'];
$destino=$_POST['destino'];
$nom = $_POST['nombres'];
$ape = $_POST['apellidos'];
$correo = $_POST['email'];
$tel = $_POST['telefono'];
$pais = $_POST['pais'];
$fecha_ingreso = $_POST['ingreso'];
$fecha_salida = $_POST['salida'];
$comentario = $_POST['comentario'];
$numh_basica = $_POST['numh_basica'];
$numh_doble = $_POST['numh_doble'];
$numh_deluxe = $_POST['numh_deluxe'];
$comentario=$_POST['comentario'];
$cant_show_tropicana= $_POST['cant_show_tropicana'];
$cant_show_parisien=$_POST['cant_show_parisien'];
$cant_show_buenavista=$_POST['cant_show_buenavista'];
$cant_tour_viaja50=$_POST['cant_tour_viaja50'];
$cant_tour_antiguo=$_POST['cant_tour_antiguo'];
$cant_tour_hmoderna=$_POST['cant_tour_hmoderna'];
$cant_tour_canonazo=$_POST['cant_tour_canonazo'];
$cant_tour_playas=$_POST['cant_tour_playas'];
$cant_tour_r_ecologica=$_POST['cant_tour_r_ecologica'];
$cant_tour_atra_marina=$_POST['cant_tour_atra_marina'];
$cant_tour_playa_relax=$_POST['cant_tour_playa_relax'];
$cant_tour_delfinario=$_POST['cant_tour_delfinario'];
$cant_tour_re_antiguo=$_POST['cant_tour_re_antiguo'];
$cant_tour_bguama=$_POST['cant_tour_bguama'];
$cant_tour_rcanimar=$_POST['cant_tour_rcanimar'];
$cant_tour_v_vinales=$_POST['cant_tour_v_vinales'];
$cant_tour_jbotanico=$_POST['cant_tour_jbotanico'];
$cant_tour_aextremas=$_POST['cant_tour_aextremas'];
$cant_tour_mjardines=$_POST['cant_tour_mjardines'];
$cant_tour_csantos=$_POST['cant_tour_csantos'];





//AGREGAR A LA BASE DE DATOS
    $sql_agregar = 'INSERT INTO formulario_completo (nombre_cliente,apellidos_cliente,correo_cliente,telefono_cliente,pais_cliente,nump_adultos,nump_ninos,nombre_destino,fecha_ingreso,fecha_salida,tipo_habitacion,nombre_shownocturno,tour_habana,tour_vinales,tour_trinidad,numh_basica,numh_doble,numh_deluxe,cant_show_tropicana,cant_show_parisien,cant_show_buenavista,cant_tour_viaja50,cant_tour_antiguo,cant_tour_hmoderna,cant_tour_canonazo,cant_tour_playas,cant_tour_r_ecologica,cant_tour_atra_marina,cant_tour_playa_relax,cant_tour_delfinario,cant_tour_re_antiguo,cant_tour_bguama,cant_tour_rcanimar,cant_tour_v_vinales,cant_tour_jbotanico,cant_tour_aextremas,cant_tour_mjardines,cant_tour_csantos,comentarios) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ';
    $sentencia_agregar = $pdo->prepare($sql_agregar);

    if ($sentencia_agregar->execute(array($nom,$ape,$correo,$tel,$pais,$cant_adultos,$cant_nino,$destino,$fecha_ingreso,$fecha_salida,$habitacion,$show,$toursHabana,$toursVinales,$toursTrinidad,$numh_basica,$numh_doble,$numh_deluxe,$cant_show_tropicana,$cant_show_parisien,$cant_show_buenavista,$cant_tour_viaja50,$cant_tour_antiguo,$cant_tour_hmoderna,$cant_tour_canonazo,$cant_tour_playas,$cant_tour_r_ecologica,$cant_tour_atra_marina,$cant_tour_playa_relax,$cant_tour_delfinario,$cant_tour_re_antiguo,$cant_tour_bguama,$cant_tour_rcanimar,$cant_tour_v_vinales,$cant_tour_jbotanico,$cant_tour_aextremas,$cant_tour_mjardines,$cant_tour_csantos,$comentario))) {
        echo 'Agregado <br>';
    }else {
      echo 'Error<br>';
    }

   /* print_r($sentencia_agregar->errorInfo());*/

    //$sentencia_agregar->execute(array($usuario_nuevo,$clave,$correo));



    //cerramos conexion base de datos y sentencia
    $sentencia_agregar= null;
    $pdo = null;



 ?>