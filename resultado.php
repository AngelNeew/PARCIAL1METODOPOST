<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Academias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Angel Martinez">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/KA.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>

<?php //

$nombre = $_POST['nombre'];

$direccion = $_POST['direccion'];

$pago = $_POST['pago'];

$precio = $_POST['precio'];

$cantidad = $_POST['cantidad'];
$total= $precio*$cantidad;

    
echo "<br/> &nbsp; HOLA ESTIMADO ". $nombre. "!!!!!";                           
    
echo "<br/> &nbsp; EL TOTAL A PAGAR ES DE ". $total. "QUETZALES";
    
echo "<br/> &nbsp; SU COMPRA SE ENVIARA A SU DOMICILIO". $direccion. "!!!!!!";
    echo "<br/> &nbsp; SU FORMA DE PAGO ES ". $pago. ".";
    echo "<br/> &nbsp; SE REALIZO CON EXITO LA COMPRA ".$nombre. "!!!!!!";

?>