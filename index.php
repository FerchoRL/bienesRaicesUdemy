<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta >
	<link rel="stylesheet" href="css/normalize.css">
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

	<header class="site-header-inicio">
		<!-- Include navbar file using php -->
		<?php include 'navbarHeader.php' ?>
		<div class="contenedor">
			<h1>Venta de Casas y Departamentos exclusivos de lujo</h1>
		</div>
	</header>
	
	<!-- Use a section when the first child is a head and when change of section-->
	<!-- Mas sobre nosotros section -->
	
	<section class="contenedor seccion">
		<h2 class="text-center font-weight-bold">Mas sobre nosotros</h2>
		<div class="iconos-nosotros">
			<div class="icono-hijo">
				<img src="img/icono1.svg" alt="Icono seguridad">
				<h3>Seguridad</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non inventore laborum maiores, labore ea officia fugiat atque accusamus porro sint, laboriosam explicabo quibusdam minima earum distinctio sed ducimus sapiente? Sint!</p>
			</div>
			
			<div class="icono-hijo">
				<img src="img/icono2.svg" alt="Icono mejor precio">
				<h3>El mejor precio</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis hic, dolores unde perferendis ipsam doloremque ab eaque, a fuga. Ut laboriosam assumenda eum voluptatum quo ipsum. Possimus, dignissimos dicta tempora!</p>
			</div>
			
			<div class="icono-hijo">
				<img src="img/icono3.svg" alt="Icono a tiempo">
				<h3>A tiempo</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quo animi expedita aspernatur excepturi eos distinctio qui, incidunt omnis libero molestias minus, fugiat vitae illo maiores. Ab eveniet, accusamus vitae.</p>
			</div>
		</div>
	</section>

	<!-- Use main tag when is the main information of the web page -->
	<!-- Casas y Depas en Venta main -->
	
	<main class="contenedor seccion">
		<h2 class="text-center font-weight-bold">Casas y Depas en venta</h2>

		<div class="contenedor-anuncios">
			<div class="anuncio">
				<img src="img/anuncio1.jpg" alt="Anuncio casa en el lago">
				<div class="contenido-anuncio">
					<h3>Casa de Lujo en el lago</h3>
					<p>Casa en el lago con excelente vista, acabados de lujo a excelente precio</p>
					<p>3,000,0000</p>
					<a href="#">Ver propiedad</a>
				</div>
			</div>

			<div class="anuncio">
				<img src="img/anuncio2.jpg" alt="Anuncio casa de lujo">
				<div class="contenido-anuncio">
					<h3>Casa Terminados de Lujo</h3>
					<p>Casa con diseño moderno, asi como tecnologia inteligente y amueblada</p>
					<p>2,000,0000</p>
					<a href="#">Ver propiedad</a>
				</div>
			</div>

			<div class="anuncio">
				<img src="img/anuncio3.jpg" alt="Anuncio casa con alberca">
				<div class="contenido-anuncio">
					<h3>Casa con Alberca</h3>
					<p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
					<p>3,000,0000</p>
					<a href="#">Ver propiedad</a>
				</div>
			</div>
		</div>

		<a href="anuncios.php">Ver todas</a>

	</main>

	<section>
		<h2>Encuentra la casa de tus sueños</h2>
		<p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
		<a href="contacto.php">Contactanos</a>
	</section>

	<!-- Nuestro blog section -->
	<section>
		<h3>Nuestro Blog</h3>
		<!-- Use article when have a section like a blog -->
		
		<article>
			<img src="img/blog1.jpg" alt="Imagen blog terraza">
			<h4>Terraza en el techo de tu casa</h4>
			<p>Escrito el: <em>7/20/2020</em> por: <em>Admin</em></p>
			<p>Consejos para construir una terraza en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
		</article>

		<article>
			<img src="img/blog2.jpg" alt="Imagen blog decoracion">
			<h4>Guia para la decoracion de tu hogar</h4>
			<p>Escrito el: <em>7/20/2020</em> por: <em>Admin</em></p>
			<p>Maximiza el espacio en tu hogar con este guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
		</article>

	</section>

	<section>
		<h3>Testimoniales</h3>
		<!-- blockquote funciona para los testimoniales -->
		
		<blockquote>El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas</blockquote>

		<p>Fernando Ramila</p>
	</section>

	<!-- Footer -->
	<?php include 'navbarFooter.php'; ?>

	<!-- If you’re using our compiled JavaScript, don’t forget to include CDN versions of jQuery and Popper.js before it  -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>