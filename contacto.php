<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta >
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/all.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Bienes Raices</title>
</head>
<!--=====================================
=            Section comment            =

comm-html-section + tab = insert comment section
======================================-->



<!--====  End of Section comment  ====-->

<body>

	<header>
		<!-- Include navbar file using php -->
		<?php include 'navbarHeader.php' ?>
	</header>

	
	<h1 class="font-weight-bold text-center">Contacto</h1>
	<img src="img/destacada3.jpg" alt="Imagen Principal">

	<!-- Main -->
	<main class="contenedor seccion">
		<h2 class="text-center font-weight-bold" >Llena el formulario de contacto</h2>
		<form>
			<div class="form-group">
				<legend>Informacion Personal</legend>
				<label for="inputName">Nombre completo</label>
				<input class="form-control" type="text" placeholder="Ingresa tu nombre" id="inputName">
				<label for="inputEmail">Email address</label>
				<input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Ingresa tu Email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				<label for="inputCellphone">Telefono</label>
				<input class="form-control" type="tel" placeholder="Ingresa tu telefono" id="inputCellphone">
				<label for="textAreMessage">Mensaje</label>
				<textarea class="form-control" id="textAreMessage" rows="3"></textarea>
			</div>

			<!-- Informacion propiedad -->
			
			<div class="form-group">
				<legend>Informacion sobre propiedad</legend>
				<label for="buyOptions">Vende o Compra</label>
				<select id="buyOptions" class="custom-select">
					<option selected disabled="true">Seleccione</option>
					<option value="1">Vende</option>
					<option value="2">Compra</option>
				</select>
				<label for="inputAmount">Cantidad</label>
				<input class="form-control" type="number" min="0" id="inputAmount">
			</div>

			<!-- Informacion contacto -->
			

			<div class="form-group">
				<legend>Contacto</legend>
				<p>Como desea ser contactado: </p>
				<div class="form-check-contacto">
					<divx class="form-check">
						<input class="form-check-input" type="radio" name="radiosContacto" id="radioTelefono" value="option1" checked>
						<label class="form-check-label" for="radioTelefono">
							Telefono
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="radiosContacto" id="radioMensaje" value="option2">
						<label class="form-check-label" for="radioMensaje">
							Mensaje
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="radiosContacto" id="radioMail" value="option3">
						<label class="form-check-label" for="radioMail">
							Correo
						</label>
					</div>
				</div>
				<p>Si eligio telefono, elija la fecha y hora</p>
				<label for="inputDate">Fecha: </label>
				<input class="form-control" type="date" id="inputDate">
				<label for="inputTime">Hora: </label>
				<input class="form-control" type="time" id="inputTime" min="09:00" max="18:00">
			</div>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</main>

	<!-- Footer -->
	<?php include 'navbarFooter.php'; ?>

	<!-- If you’re using our compiled JavaScript, don’t forget to include CDN versions of jQuery and Popper.js before it  -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>