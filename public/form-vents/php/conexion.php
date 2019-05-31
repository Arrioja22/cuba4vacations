<?php 
 $enlace = 'mysql:host=mx56.hostgator.mx;dbname=cubavaca_tourcuba';
  $usuario = 'cubavaca_admin';
  $pass = 'admin226';
  try {
  	$pdo = new PDO ($enlace,$usuario,$pass);

  	echo 'Conectado <br>';
  }catch (PDOException $e){
  	print "¡Error!" . $e->getMessage() . "<br/>";
  	die ();
  	
  }

  ?>
