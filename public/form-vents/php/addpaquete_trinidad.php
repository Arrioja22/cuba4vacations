<?php
include_once ('conexion.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//CAPTURAR DATOS POR POST
$destino=$_POST['destino'];
$nom = $_POST['nombres'];
$ape = $_POST['apellidos'];
$correo = $_POST['email'];
$tel = $_POST['telefono'];
$pais = $_POST['pais'];
$fecha_ingreso = $_POST['ingreso'];
$fecha_salida = $_POST['salida'];
$tours = $_POST['tours'];
$nom_paquete = $_POST['nom_paquete'];
$nom_habitacion = $_POST['nom_habitacion'];
$cant_personas = $_POST['personas'];
$comentario = $_POST['comentario'];




//AGREGAR A LA BASE DE DATOS
    $sql_agregar = 'INSERT INTO paquetes (destino,nom_paquete,f_ingreso,f_salida,tours,nom_habitacion,nombre_cliente,apellido_cliente,correo_cliente,telefono,pais,cantidad_personas,comentario) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?) ';
    $sentencia_agregar = $pdo->prepare($sql_agregar);

    if ($sentencia_agregar->execute(array($destino,$nom_paquete,$fecha_ingreso,$fecha_salida,$tours,$nom_habitacion,$nom,$ape,$correo,$tel,$pais,$cant_personas,$comentario))) {
        echo 'Agregado <br>';
    }else {
      echo 'Error<br>';
    }

    //$sentencia_agregar->execute(array($usuario_nuevo,$clave,$correo));



    //cerramos conexion base de datos y sentencia
    $sentencia_agregar= null;
    $pdo = null;


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'myxtyco.bonice2@gmail.com';                 // SMTP username
    $mail->Password = 'grecia22';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('myxtyco.bonice2@gmail.com', 'Cuba4Vacations');
    $mail->addAddress( $correo ,  $nom );     // Add a recipient


    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Correo modificado';
/*     $mail->Body    = "
     <html>
     <body>
     <p>Correo Reservacion Un Paquete:</p>
     <p>Nombre: {$nom}</p>
     <p>Apellido: {$ape}</p>
     <p>Correo: {$correo}</p>
     <p>Telefono: {$tel}</p>
     <p>Pais: {$pais}</p>
     <p>Fecha ingreso: {$fecha_ingreso}</p>
    <p>Fecha Salida: {$fecha_salida}</p>
     <p>Cantidad Personas: {$cant_personas}</p>

     </body>
     </html>";*/

    $mail->Body ='<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Narrative Confirm Email</title>
  <style type="text/css">

  /* Take care of image borders and formatting */

  img {
    max-width: 600px;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
  }

  a {
    border: 0;
    outline: none;
  }

  a img {
    border: none;
  }

  /* General styling */

  td, h1, h2, h3  {
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 400;
  }

  td {
    font-size: 13px;
    line-height: 150%;
    text-align: left;
  }

  body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #37302d;
    background: #ffffff;
  }

  table {
    border-collapse: collapse !important;
  }


  h1, h2, h3 {
    padding: 0;
    margin: 0;
    color: #444444;
    font-weight: 400;
    line-height: 110%;
  }

  h1 {
    font-size: 35px;
  }

  h2 {
    font-size: 30px;
  }

  h3 {
    font-size: 24px;
  }

  h4 {
    font-size: 18px;
    font-weight: normal;
  }

  .important-font {
    color: #21BEB4;
    font-weight: bold;
  }

  .hide {
    display: none !important;
  }

  .force-full-width {
    width: 100% !important;
  }

  </style>

  <style type="text/css" media="screen">
      @media screen {
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400);

        /* Thanks Outlook 2013! */
        td, h1, h2, h3 {
          font-family: "Open Sans", "Helvetica Neue", Arial, sans-serif !important;
        }
      }
  </style>

  <style type="text/css" media="only screen and (max-width: 600px)">
    /* Mobile styles */
    @media only screen and (max-width: 600px) {

      table[class="w320"] {
        width: 320px !important;
      }

      table[class="w300"] {
        width: 300px !important;
      }

      table[class="w290"] {
        width: 290px !important;
      }

      td[class="w320"] {
        width: 320px !important;
      }

      td[class~="mobile-padding"] {
        padding-left: 14px !important;
        padding-right: 14px !important;
      }

      td[class*="mobile-padding-left"] {
        padding-left: 14px !important;
      }

      td[class*="mobile-padding-right"] {
        padding-right: 14px !important;
      }

      td[class*="mobile-block"] {
        display: block !important;
        width: 100% !important;
        text-align: left !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        padding-bottom: 15px !important;
      }

      td[class*="mobile-no-padding-bottom"] {
        padding-bottom: 0 !important;
      }

      td[class~="mobile-center"] {
        text-align: center !important;
      }

      table[class*="mobile-center-block"] {
        float: none !important;
        margin: 0 auto !important;
      }

      *[class*="mobile-hide"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
        line-height: 0 !important;
        font-size: 0 !important;
      }

      td[class*="mobile-border"] {
        border: 0 !important;
      }
    }
  </style>
</head>
<body class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
<table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%">
  <tr>
    <td align="center" valign="top" bgcolor="#ffffff"  width="100%">

    <table cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <td style="background:#d3d4d4" width="100%">
          <center>
            <table cellspacing="0" cellpadding="0" width="600" class="w320">
              <tr>
                <td valign="top" class="mobile-block mobile-no-padding-bottom mobile-center" width="270" style="background:#d3d4d4;padding:10px 10px 10px 20px;">
                  <a href="#" style="text-decoration:none;">
                    <img src="https://www.filepicker.io/api/file/X9R4FqRPaEIS3vMxFXgl" width="142" height="30" alt="Your Logo"/>
                  </a>
                </td>
                <td valign="top" class="mobile-block mobile-center" width="270" style="background:#d3d4d4;padding:10px 15px 10px 10px">
                  <table border="0" cellpadding="0" cellspacing="0" class="mobile-center-block" align="right">
                    <tr>
                      <td align="right">
                        <a href="https://www.facebook.com/cuba4vacations">
                        <img src="http://keenthemes.com/assets/img/emailtemplate/social_facebook.png"  width="30" height="30" alt="social icon"/>
                        </a>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
      <tr>
        <td style="border-bottom:1px solid #e7e7e7;">
          <center>
            <table cellpadding="0" cellspacing="0" width="600" class="w320">
              <tr>
                <td align="left" class="mobile-padding" style="padding:20px">

                  <br class="mobile-hide" />

                  <h2>Gracias por reservar con nosotros Cuba4Vacations</h2><br>
                  '.$nom.'&nbsp;'.$ape.',<br>
                  En el transcurso de 24 a 48 horas. le estaremos contactando para confirmar la Reservacion.<br>

                  <br>

                  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
                    <tr>
                      <td width="281" style="background-color:#ffffff; font-size:0; line-height:0;">&nbsp;</td>
                    </tr>
                  </table>
                </td>
                <td class="mobile-hide" style="padding-top:20px;padding-bottom:0; vertical-align:bottom;" valign="bottom">
                  <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                      <td align="right" valign="bottom" style="padding-bottom:0; vertical-align:bottom;">
                        <img  style="vertical-align:bottom;" src="https://www.filepicker.io/api/file/9f3sP1z8SeW1sMiDA48o"  width="174" height="294" />
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
      <tr>
        <td valign="top" style="background-color:#f8f8f8;border-bottom:1px solid #e7e7e7;">

          <center>
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="w320" style="height:100%;">
              <tr>

                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
      <tr>
        <td style="background-color:#d3d4d4;">
          <center>
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="w320" style="height:100%;color:#ffffff" bgcolor="#d3d4d4" >
              <tr>
                <td align="right" valign="middle" class="mobile-padding" style="font-size:12px;padding:20px; background-color:#d3d4d4; color:#ffffff; text-align:left; ">
                  <a style="color:#000000;" href="https://www.facebook.com/cuba4vacations">Facebook</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                  <a style="color:#000000;" href="https://www.instagram.com/cuba4vacations">Instagram</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                  <a style="color:#000000;" href="https://www.cuba4vacations.com/">Cuba4Vacations</a>
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
    </table>

    </td>
  </tr>
</table>
</body>
</html>';

    $mail->send();
    echo 'Mensaje enviado';
} catch (Exception $e) {
    echo 'Mensaje no enviado error: ', $mail->ErrorInfo;
}


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'myxtyco.bonice2@gmail.com';                 // SMTP username
    $mail->Password = 'grecia22';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('myxtyco.bonice2@gmail.com', 'Cuba4Vacations');
    $mail->addAddress( $correo ,  $nom );     // Add a recipient


    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Correo de reservacion';
    // $mail->Body    = "
    // <html>
    // <body>
    // <p>Correo Reservacion Un Paquete:</p>
    // <p>Nombre: {$nom}</p>
    // <p>Apellido: {$ape}</p>
    // <p>Correo: {$correo}</p>
    // <p>Telefono: {$tel}</p>
    // <p>Pais: {$pais}</p>
    // <p>Fecha ingreso: {$fecha_ingreso}</p>
    // <p>Fecha Salida: {$fecha_salida}</p>
    // <p>Cantidad Personas: {$cant_personas}</p>

    // </body>
    // </html>";

    $mail->Body ='<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Narrative Confirm Email</title>
  <style type="text/css">

  /* Take care of image borders and formatting */

  img {
    max-width: 600px;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
  }

  a {
    border: 0;
    outline: none;
  }

  a img {
    border: none;
  }

  /* General styling */

  td, h1, h2, h3  {
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 400;
  }

  td {
    font-size: 13px;
    line-height: 150%;
    text-align: left;
  }

  body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #37302d;
    background: #ffffff;
  }

  table {
    border-collapse: collapse !important;
  }


  h1, h2, h3 {
    padding: 0;
    margin: 0;
    color: #444444;
    font-weight: 400;
    line-height: 110%;
  }

  h1 {
    font-size: 35px;
  }

  h2 {
    font-size: 30px;
  }

  h3 {
    font-size: 24px;
  }

  h4 {
    font-size: 18px;
    font-weight: normal;
  }

  .important-font {
    color: #21BEB4;
    font-weight: bold;
  }

  .hide {
    display: none !important;
  }

  .force-full-width {
    width: 100% !important;
  }

  </style>

  <style type="text/css" media="screen">
      @media screen {
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400);

        /* Thanks Outlook 2013! */
        td, h1, h2, h3 {
          font-family: "Open Sans", "Helvetica Neue", Arial, sans-serif !important;
        }
      }
  </style>

  <style type="text/css" media="only screen and (max-width: 600px)">
    /* Mobile styles */
    @media only screen and (max-width: 600px) {

      table[class="w320"] {
        width: 320px !important;
      }

      table[class="w300"] {
        width: 300px !important;
      }

      table[class="w290"] {
        width: 290px !important;
      }

      td[class="w320"] {
        width: 320px !important;
      }

      td[class~="mobile-padding"] {
        padding-left: 14px !important;
        padding-right: 14px !important;
      }

      td[class*="mobile-padding-left"] {
        padding-left: 14px !important;
      }

      td[class*="mobile-padding-right"] {
        padding-right: 14px !important;
      }

      td[class*="mobile-block"] {
        display: block !important;
        width: 100% !important;
        text-align: left !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        padding-bottom: 15px !important;
      }

      td[class*="mobile-no-padding-bottom"] {
        padding-bottom: 0 !important;
      }

      td[class~="mobile-center"] {
        text-align: center !important;
      }

      table[class*="mobile-center-block"] {
        float: none !important;
        margin: 0 auto !important;
      }

      *[class*="mobile-hide"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
        line-height: 0 !important;
        font-size: 0 !important;
      }

      td[class*="mobile-border"] {
        border: 0 !important;
      }
    }
  </style>
</head>
<body class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
<table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%">
  <tr>
    <td align="center" valign="top" bgcolor="#ffffff"  width="100%">

    <table cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <td style="background:#d3d4d4" width="100%">
          <center>
            <table cellspacing="0" cellpadding="0" width="600" class="w320">
              <tr>
                <td valign="top" class="mobile-block mobile-no-padding-bottom mobile-center" width="270" style="background:#d3d4d4;padding:10px 10px 10px 20px;">
                  <a href="#" style="text-decoration:none;">
                    <img src="https://www.filepicker.io/api/file/X9R4FqRPaEIS3vMxFXgl" width="142" height="30" alt="Your Logo"/>
                  </a>
                </td>
                <td valign="top" class="mobile-block mobile-center" width="270" style="background:#d3d4d4;padding:10px 15px 10px 10px">
                  <table border="0" cellpadding="0" cellspacing="0" class="mobile-center-block" align="right">
                    <tr>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
      <tr>
        <td style="border-bottom:1px solid #e7e7e7;">
          <center>
            <table cellpadding="0" cellspacing="0" width="600" class="w320">
              <tr>
                <td align="left" class="mobile-padding" style="padding:20px">

                  <br class="mobile-hide" />

                  <h2>Reservacion realizada </h2><br>
                  Datos de la reservacion:<br>

                  <br>

                  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
                    <tr>
                      <td width="281" style="background-color:#ffffff; font-size:0; line-height:0;">&nbsp;</td>
                    </tr>
                  </table>
                </td>
                <td class="mobile-hide" style="padding-top:20px;padding-bottom:0; vertical-align:bottom;" valign="bottom">
                  <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                      <td align="right" valign="bottom" style="padding-bottom:0; vertical-align:bottom;">
                        <img  style="vertical-align:bottom;" src="https://www.filepicker.io/api/file/9f3sP1z8SeW1sMiDA48o"  width="174" height="294" />
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
      <tr>
        <td valign="top" style="background-color:#f8f8f8;border-bottom:1px solid #e7e7e7;">

          <center>
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="w320" style="height:100%;">
              <tr>
                <td valign="top" class="mobile-padding" style="padding:20px;">
                  <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                      <td style="padding-right:20px">
                        <b>Datos del cliente</b>
                      </td>

                      <td>
                        <b>Datos de la Reservacion</b>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-top:5px; padding-right:20px; border-top:1px solid #E7E7E7; vertical-align:top; ">
                        Nombre: &nbsp; '.$nom.' &nbsp;'.$ape.'.
                      </td>
                      <td style="padding-top:5px; border-top:1px solid #E7E7E7;">
                        Paquete: <br> 
                        '.$nom_paquete.'.
                      </td>

                    </tr>
                     <tr>
                      <td style="padding-top:5px; padding-right:20px; border-top:1px solid #E7E7E7; vertical-align:top; ">
                        Correo: &nbsp; '.$correo.'.
                      </td>
                      <td style="padding-top:5px; border-top:1px solid #E7E7E7;">
                        Fecha ingreso: &nbsp; '.$fecha_ingreso.'.<br>
                        Fecha salida: &nbsp; '.$fecha_salida.'.
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-top:5px; padding-right:20px; border-top:1px solid #E7E7E7; vertical-align:top; ">
                        No. Telefono: &nbsp; '.$tel.'. <br>
                        Pais: &nbsp; '.$pais.'. <br>
                        No. Personas por Paquete: &nbsp; '.$cant_personas.'. <br>
                      </td>
                      <td style="padding-top:5px; border-top:1px solid #E7E7E7;">
                        Show nocturno: &nbsp; '.$tours.'.<br>
                        Habitacion: <br> 
                        '.$nom_habitacion.'.
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-top:5px; padding-right:20px; border-top:1px solid #E7E7E7; vertical-align:top; ">
                        Comentarios: &nbsp; '.$comentario.' <br>
                        
                      </td>
                      <td style="padding-top:5px; border-top:1px solid #E7E7E7;">

                      </td>
                    </tr>
                  </table>
                  <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                      <td style="padding-top:50px;">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tr>
                            <td width="350" style="vertical-align:top;">
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </center>
        </td>
      </tr>
      <tr>
        <td style="background-color:#d3d4d4;">
          <center>
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="w320" style="height:100%;color:#ffffff" bgcolor="#d3d4d4" >
              <tr>
              </tr>
            </table>
          </center>
        </td>
      </tr>
    </table>

    </td>
  </tr>
</table>
</body>
</html>';

    $mail->send();
    echo 'Mensaje enviado';
} catch (Exception $e) {
    echo 'Mensaje no enviado error: ', $mail->ErrorInfo;
}


 ?>