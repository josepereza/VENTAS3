<?php
/*
	Pequeño, muy pequeño sistema de ventas en PHP con MySQL

	@author parzibyte

	No olvides visitar parzibyte.me/blog para más cosas como esta
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ventas</title>
	<!--  
	
	<link rel="stylesheet" href="./css/2.css">
	<link rel="stylesheet" href="./css/estilo.css">  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">	
<style>
.alert {
	background-color: #90caf9;
	color: black;
	padding:15px;
	font-size :1.5em;
}

</style>	
</head>
<body>
	<nav class="navbar">
		<div class="nav-wrapper">
		<div class="container">
			
				<a class="brand-logo left" href="#">POS</a>
			
			
				<ul class="right">
					<li><a href="./listar.php">Productos</a></li>
					<li><a href="./vender.php">Vender</a></li>
					<li><a href="./ventas.php">Ventas</a></li>
				</ul>
			</div>
		
		
		</div>
	</nav>
	<div class="container">
		<div class="row">