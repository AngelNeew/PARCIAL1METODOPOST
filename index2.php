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
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
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
<!-- ======================================================================================================================== -->

<!DOCTYPE html>

<html>

<head>

<title>SOLICITUD DE PRODUCTOS</title>

<meta charset="utf-8">

</head>

<body>

<form name="formularioDatos" method="post" action="resultado.php">

<p> CÁLCULO DE VENTA PEDIDO  </p>

<br/>
Introduzca Su nombre: <input type="text" name="nombre" value="">

<br/> <br/>
Introduzca Su direccion: <input type="text" name="direccion" value="">

<br/> <br/>
Introduzca La forma de pago : <input type="text" name="pago" value="">

<br/> <br/>


Introduzca el Precio de su Producto: <input type="text" name="precio" value="">

<br/> <br/>

Introduzca la cantidad: <input type="text" name="cantidad" value="">

<br/> <br/>

<input value="Calcular" type="submit" />

</form>

</body>

</html>
    
    
    
    <div align="center">
<embed src="SPORT.mp4" width="600"
       height="600">
  
    
    
    
    
    
    
    
    
    
    
    
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright ANGEL MARTINEZ <br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>