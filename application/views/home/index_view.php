<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Barber Cloud</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/login.js'); ?>"></script>
</head>
<body>
	<header>
		<div class="logo">
			Barber Cloud
		</div>

		<nav>
			<ul class="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Acerca</a></li>
				<li><a href="#">Contacto</a></li>
				<li><a href="#">Registrar</a></li>
			</ul>
		</nav>
	</header>

	<section class="contenedor form-login">
		<form class="login">
			<span class="titulo-form">Iniciar sesión</span>

			<div class="campo">
				<label for="txtEmail">Email</label>
				<input type="email" name="txtEmail" class="input input-login" id="txtEmail">	
			</div>
			
			<div class="campo">
				<label for="txtPassword">Password</label>
				<input type="password" name="txtPassword" class="input input-login" id="textPassword">	
			</div>
			
			<div class="campo">
				<input type="submit" name="btnLogin" value="Ingresar" class="btn btn-login" id="btn-login">	
			</div>
			
		</form>
	</section>


	<!-- <footer>
		&copy; Todos los derechos reservados - 2016 | Creado por <a href="https://www.facebook.com/yomar3092" target="_blank">Yomar</a>
	</footer> -->
</body>
</html>