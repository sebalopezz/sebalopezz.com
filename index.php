<!DOCTYPE html>
<html>
<head>
	<!-- SEO -->
		<title> Sebastian López | Desarrollador </title>
		<meta charset="UTF-8">
		<meta name="description" content="Soy Sebastian Lopez, soy desarrollador web y estudiante de Ingeniería en Sistemas de Información en la Universidad Tecnológica Nacional. Me gusta leer y emprender nuevos proyectos. Aquí podras encontrar reflexiones sobre los libros que leo y algunos posts relacionados con desarrollo y tecnología. Espero que lo disfruten.">
		<meta name="keywords" content="Blog, Desarrollo web, HTML, CSS, Javascript, Bootstrap, Tecnología, Reflexiones, Libros, Lecturas, Proyectos">
		<meta name="author" content="Sebastian Lopez">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- External resources -->
		<?php include_once('layouts/external-resources.php'); ?>
</head>
<body>
	<?php include_once('layouts/navbar.php'); ?>

	<div class="hero-header">
		<div class="hero-header-text">
			<img src="/media/foto-perfil.jpg" class="rounded-circle header-foto-perfil" alt="Sebastian Lopez" height="80" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
			<h1 data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300"> Sebastian López </h1>
			<h5 data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500"> Soy desarrollador web y estudiante de Ingeniería en Sistemas de Información </h5>
		</div>
	</div>

	<div class="container my-5 text-center">
		<h1 class="text-center"> Blog </h1>
		<hr class="mb-4">
		<div class="row">
			<div class="col-md-9 mb-3">
				<div style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9)),url(/media/blog-1.jpg);" class="item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
					<a class="titulo-img" href="http://youtube.com"> Hola</a>
				</div>
			</div>
			<div class="col-md-3 mb-3">
				<div style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9)),url(/media/blog-2.jpg);" class="item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
					<a class="titulo-img" href="http://youtube.com"> Hola</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 mb-3">
				<div style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9)),url(/media/blog-3.jpg);" class="item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
					<a class="titulo-img" href="http://youtube.com"> Hola</a>
				</div>
			</div>
			<div class="col-md-9 mb-3">
				<div style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9)),url(/media/blog-4.jpg);" class="item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700" >
					<a class="titulo-img" href="http://youtube.com"> Hola</a>
				</div>
			</div>
		</div>

		<button type="button" class="btn btn-outline-dark mt-4 px-4 btn-ver-mas" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500"> VER MÁS </button>
	</div>

</body>
</html>



