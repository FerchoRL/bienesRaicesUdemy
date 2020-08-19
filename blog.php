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

	<!-- Main -->
	<main class="contenedor seccion">
		<h1 class="text-center font-weight-bold">Nuestro Blog</h1>

		<!-- Use article when have a section like a blog -->
			
		<article class="entrada-blog">
			<div class="imagen-blog">
				<img src="img/blog1.jpg" alt="Imagen blog terraza">
			</div>
			<div class="texto-entrada">
				<a href="entrada.php">
					<h4>Terraza en el techo de tu casa</h4>
				</a>
				<p>Escrito el: <em>7/20/2020</em> por: <em>Admin</em></p>
				<p>Consejos para construir una terraza en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
			</div>
		</article>

		<article class="entrada-blog">
			<div class="imagen-blog">
				<img src="img/blog2.jpg" alt="Imagen blog decoracion">
			</div>
			<div class="texto-entrada">
				<a href="entrada.php">
					<h4>Guia para la decoracion de tu hogar</h4>
				</a>
				<p>Escrito el: <em>7/20/2020</em> por: <em>Admin</em></p>
				<p>Maximiza el espacio en tu hogar con este guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
			</div>
		</article>

		<article class="entrada-blog">
			<div class="imagen-blog">
				<img src="img/blog3.jpg" alt="Imagen blog decoracion">
			</div>
			<div class="texto-entrada">
				<a href="entrada.php">
					<h4>Guia para la decoracion de tu hogar</h4>
				</a>
				<p>Escrito el: <em>7/20/2020</em> por: <em>Admin</em></p>
				<p>Maximiza el espacio en tu hogar con este guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
			</div>
		</article>

		<article class="entrada-blog">
			<div class="imagen-blog">
				<img src="img/blog4.jpg" alt="Imagen blog decoracion">
			</div>
			<div class="texto-entrada">
				<a href="entrada.php">
					<h4>Guia para la decoracion de tu hogar</h4>
				</a>
				<p>Escrito el: <em>7/20/2020</em> por: <em>Admin</em></p>
				<p>Maximiza el espacio en tu hogar con este guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
			</div>
		</article>
	</main>

	<!-- Footer -->
	<?php include 'navbarFooter.php'; ?>

	<!-- If you’re using our compiled JavaScript, don’t forget to include CDN versions of jQuery and Popper.js before it  -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>