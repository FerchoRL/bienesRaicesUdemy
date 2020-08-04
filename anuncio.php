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

	<h1 class="text-center font-weight-bold">Casa en Venta en la Playa</h1>
	<img src="img/destacada.jpg" alt="Imagen anuncio">

	<!-- Main -->
	<main class="contenedor seccion contenido-centrado">
		<div class="resumen-propiedad">
			<p class="precio">3,000,000</p>
			<ul class="iconos-anuncio">
				<li>
					<i class="fas fa-toilet fa-3x" alt="icono wc"></i>
					<p>3</p>
				</li>
				<li>
					<i class="fas fa-car fa-3x" alt="icono wc"></i>
					<p>3</p>
				</li>
				<li>
					<i class="fas fa-bed fa-3x" alt="icono wc"></i>
					<p>3</p>
				</li>
			</ul>
		</div>
		<!-- resumen-propiedad -->
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id eros sed risus efficitur tincidunt. Curabitur sit amet dictum erat, ut fermentum quam. Nullam vitae finibus elit. Suspendisse dictum massa at vehicula lacinia. Aliquam mollis, turpis ac tincidunt egestas, tellus eros efficitur neque, eu fermentum sem eros ut ex. Fusce eget hendrerit sapien. Aenean quam diam, volutpat id turpis id, fringilla luctus diam. Aliquam erat volutpat.

		Fusce congue dapibus massa, vitae dapibus purus dignissim eget. Maecenas dapibus libero est, eget imperdiet lorem volutpat non. Maecenas elementum varius sapien eget pellentesque. Nunc vel tincidunt arcu, quis iaculis elit. Vestibulum quis mauris et turpis sagittis elementum sit amet at libero. Vivamus sodales odio nec tortor viverra luctus. Nam sodales, nisi ac mattis rhoncus, nibh nisi condimentum tellus, iaculis luctus odio libero vitae sem.

		Donec ac varius dolor. Integer tristique placerat risus. Suspendisse vitae sapien finibus, varius leo eu, lobortis ante. Aliquam eu ipsum ipsum. Praesent dignissim ipsum augue, vel pellentesque justo tristique a. Vestibulum eu urna metus. Fusce sapien ex, varius convallis euismod vestibulum, convallis ut sem. Fusce fringilla et enim et hendrerit.
		</p>

		<p>
		Sed dapibus ac dui nec porta. In ante augue, malesuada non pulvinar non, interdum non nibh. Morbi sed sem sagittis, sodales nibh a, ultricies nisi. Proin aliquam molestie mauris, non eleifend dui dictum vitae. Integer iaculis egestas gravida. Aliquam consectetur eros ac risus semper faucibus. Curabitur id ex vestibulum elit feugiat consectetur. Aliquam malesuada, nisl in venenatis tempus, magna arcu placerat lectus, ac egestas ante magna laoreet nulla. Quisque pharetra sodales orci, sit amet auctor ante tempor at. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;

		Maecenas vitae dapibus quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse imperdiet consequat mauris. Nunc at felis eget lacus hendrerit dignissim vel nec mi. Mauris tincidunt dolor nec aliquet facilisis. Ut nec erat ut ante porttitor viverra consectetur quis odio. Cras eu enim commodo massa ornare porttitor ut faucibus sem. Donec eget euismod orci, vel sodales metus. Vivamus eleifend nulla ut odio facilisis, non tempor massa pharetra. In hac habitasse platea dictumst. Duis odio dui, ultricies eu ligula eget, laoreet ornare ipsum. Nunc lacus ligula, tincidunt a aliquam sit amet, ullamcorper id enim. Nullam eget odio tempor quam ullamcorper fringilla nec eget nunc. Morbi auctor in elit ut finibus. Vestibulum sit amet placerat turpis. Vivamus at nibh non nulla scelerisque vulputate quis id nulla.
		</p>
		
	</main>

	<!-- Footer -->
	<?php include 'navbarFooter.php'; ?>

	<!-- If you’re using our compiled JavaScript, don’t forget to include CDN versions of jQuery and Popper.js before it  -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>