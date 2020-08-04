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
		<h1 class="text-center font-weight-bold">Conoce Sobre Nosotros</h1>
		<div class="contenido-nosotros">
			<div>
				<img src="img/nosotros.jpg" alt="Imagen sobre nosotros">
			</div>
			<div class="texto-nosotros">
				<blockquote>25 Años de Experiencia</blockquote>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis dicta qui aliquid, et temporibus sunt neque dolorum voluptatem ipsum adipisci, eveniet nam animi fugit, autem modi cumque debitis libero nesciunt?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius molestias minus harum at quod doloribus sed ullam inventore possimus tenetur ipsa laboriosam saepe, alias expedita, modi nostrum nemo! Exercitationem, deleniti.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laudantium qui tempore provident amet commodi, in, aspernatur veniam id possimus, sint numquam totam necessitatibus voluptatum tempora. Sed architecto, nobis quisquam!
				</p>

			</div>
		</div>
	</main>

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

	<!-- Footer -->
	<?php include 'navbarFooter.php'; ?>

	<!-- If you’re using our compiled JavaScript, don’t forget to include CDN versions of jQuery and Popper.js before it  -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>