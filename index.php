<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="irArriba.js"></script>
	<script src="js/abrirNav.js" defer></script>
	<link rel="icon" href="img/favicon.ico">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>White & Pink Dental</title>
	<!-- LINK CSS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/Doctores.css">
	<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<!-- LINK ICONOS-->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

	<?php include("php/suscribirse.php")	?>
	<header class="hero">
		<!-- MENU NAVEGACIÓN -->
		<nav class="menu">
			<label class="logo"><img src="https://i.imgur.com/uGFKsa7.png" alt="logo"> White & Pink Dental</label>
			<ul class="menu_items">
				<li class="active"><a style="color: white; font-weight: 500;" href="index.php">Inicio</a></li>
				<li><a href="servicios.html">Servicios</a></li>
				<li><a href="pagina-principal-blog.html">Blog</a></li>
				<li><a href="personal.html">Personal</a></li>
				<li class="colorear"><a href="ubicacion.html" class="link-active">Dónde estamos</a></li>
			</ul>

			<span class="btn_menu">
				<i class="fa fa-bars"></i>
			</span>
		</nav>
		<div class="divLang">
			<ul class="ulLang">
				<li class="liLang">
					<a href="en/index.php" class="aLang"><i class="fa-solid fa-globe iLang"></i>ENGLISH</a>
				</li>
			</ul>
		</div>
		<section class="contenedor hero-main">
			<div class="hero-textos">
				<h1 class="titulo">La mejor <span class="titulo-active">Clínica Dental.</span></h1>
				<p class="copy" style="color: whitesmoke; text-shadow: 2px 2px 2px black;">La mejor opción para invertir en tu salud bucal.</p>
				<a href="agendar-cita.php" class="cta" style="box-shadow: 0px 10px 10px -6px black;">Agendar cita</a>
			</div>
			<img src="https://i.imgur.com/ximhTSt.png" class="mockup">
		</section>
	</header>
	<!-- SECTION MAIN -->
	<main>
		<!-- SECTION OFERTAS -->
		<section class="ofertas">
			<div class="contenedor">
				<div data-aos="fade-up">
					<hr>
					<h2 class="subtitulo">Nuestas ofertas<span class="point">.</span> </h2>
					<p class="copy-section">Checa nuestras ofertas especiales que preparamos para ti.</p>
				</div>
				<article class="contenedor-card" data-aos="fade-left" data-aos-duration="500">
					<!-- ------ -->
					<div class="Galeria-Fotografica">
						<div class="item">
							<img src="https://i.imgur.com/0VYOTrq.jpg" class="item-img">
							<div class="item-text">
								<h3>Blanqueamiento</h3>
								<p>De <span style="text-decoration: 3px line-through red;">$3,250.00</span> a $1,500.00</p>
							</div>
						</div>
						<div class="item">
							<img src="https://i.imgur.com/FhtSI4e.jpg" class="item-img">
							<div class="item-text">
								<h3>Limpieza Dental</h3>
								<p>2 x $700.00</p>
							</div>
						</div>
						<div class="item">
							<img src="https://i.imgur.com/cSvGGae.jpg" class="item-img">
							<div class="item-text">
								<h3>Resinas Dentales</h3>
								<p>$550.00</p>
							</div>
						</div>
					</div>

				</article>
			</div>
		</section>
		<!-- SECTION NUESTRO BLOG -->
		<section class="temas-blog contenedor">
			<div data-aos="fade-up">
				<hr>
				<h2 class="subtitulo">Nuestro blog<span class="point">.</span> </h2>
				<p class="copy-section">Explora nuestras diversas publicaciones y aprende más sobre tus dientes.</p>
			</div>
			<article class="contenedor-bg" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
				<!-- ---------- -->
				<div class="card">
					<div class="cards-text">
						<h3 class="card-titulo"> · Caries<span class="point">.</span></h3>
						<p class="card-date">17 de Noviembre 2021</p>
						<p class="card-copy">Las caries son zonas dañadas de forma permanente en la superficie de los dientes que se convierten en pequeñas aberturas u orificios. Las caries se producen a causa de una combinación de factores, como bacterias en la boca, ingesta frecuente de tentempiés, bebidas azucaradas y limpieza dental deficiente... </p>
						<a href="caries.html" class="card-btn">Leer más</a>
					</div>
				</div>
				<div class="background">
					<img src="https://clinicadentalalcala.com/wp-content/uploads/2014/12/1.jpg" class="background-img" class="background-img">
					<div class="background-text">
						<h3 class="background-titulo">Revisión de caries</h3>
					</div>
				</div>
				<!-- ---------- -->
				<div class="card">
					<div class="cards-text">
						<h3 class="card-titulo"> · Úlceras<span class="point">.</span></h3>
						<p class="card-date">17 de Noviembre 2021</p>
						<p class="card-copy">Aunque en su mayoría son inofensivas, las úlceras bucales pueden ser extremadamente
							incómodas y hacer que comer, beber y lavarse los dientes se dificulte... </p>
						<a href="ulceras.html" class="card-btn">Leer más</a>
					</div>
				</div>
				<div class="background">
					<img src="https://professional.sunstargum.com/content/dam/sunstar-europe/gum/lifestyle/woman/woman-mouth-close-up/Woman-with-mouth-ulcer.jpg/_jcr_content/renditions/cq5dam.cropped.1360.763.jpeg" class="background-img">
					<div class="background-text">
						<h3 class="background-titulo">Problema de úlcera en el labio</h3>
					</div>
				</div>
				<!-- ---------- -->
				<div class="card">
					<div class="cards-text">
						<h3 class="card-titulo"> · Dientes chuecos<span class="point">.</span></h3>
						<p class="card-date">17 de Noviembre 2021</p>
						<p class="card-copy">Los dientes chuecos son los dientes que erupcionan torcidos, girados o inclinados, y que por tanto provocan una maloclusión dental. Existen varias razones por las que los dientes pueden crecer torcidos... </p>
						<a href="dientes-chuecos.html" class="card-btn">Leer más</a>
					</div>
				</div>
				<div class="background">
					<img src="https://odontotecks.com/wp-content/uploads/2017/08/problemas-de-dientes-chuecos.jpg" class="background-img">
					<div class="background-text">
						<h3 class="background-titulo" style="color: black">Caso común de dientes chuecos</h3>
					</div>
				</div>
				<a href="pagina-principal-blog.html" class="card-btn" style="margin: 40px 25% 0 25%; margin-bottom: -50px;">Visitar Blog</a>
			</article>
		</section>
		<!-- SECTION NUESTROS CLIENTES -->
		<section class="testimonio" data-aos="fade-up">
			<div class="contenedor" style="margin-bottom: -100px;">
				<hr>
				<h2 class="subtitulo">Clientes satisfechos<span class="point">.</span> </h2>
				<p class="copy-section">Cada día más personas confían en nosotros para su salud dental.</p>
				<!-- -------------------------- -->
				<div class="contenedor-testimonio">
					<div class="testimonio-card">
						<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flia.araugo%2Fposts%2F10160114274282788&show_text=true&width=350" width="350" height="186" style="text-decoration: none; overflow:hidden;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
					</div>
				</div>
				<!-- -------------------------- -->
				<div class="contenedor-testimonio">
					<div class="testimonio-card">
						<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faaron.aguirreperez.1%2Fposts%2F2693937107492125&show_text=true&width=350" width="350" height="186" style="text-decoration: none; overflow:hidden;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
					</div>
				</div>
				<!-- -------------------------- -->
				<div class="contenedor-testimonio">
					<div class="testimonio-card">
						<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D2020195858040229%26id%3D100001495041245&show_text=true&width=350" width="350" height="186" style="text-decoration: none; overflow:hidden;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
					</div>
				</div>


			</div>
			</div>
		</section>
		<!-- SECTION EMAIL DEL CLIENTE-->
		<section id="suscribete" class="py-5">
			<form action="#suscrito" method="POST" class="container">
				<hr>
				<div class="d-flex flex-column align-items-center justify-content-center">
					<div class="title text-centerpt-3 pb-5">
						<h2 class="position-relative d-inline-block ms-4" id="suscrito">Suscríbete</h2>
					</div>

					<p class="text-center text-muted">No te pierdas de información valiosa sobre descuentos, promociones y mucho más de parte de White &amp; Pink Dental &copy;. Dar clic al botón de abajo para comenzar a ser parte de la familia WPDental.</p>
					<div class="input-group mb-3 mt-3">
						<input type="email" name="correo" class="form-control" placeholder="Ingresa tu correo..." required value="<?php $userEmail = "";
																																																											echo $userEmail ?>" pattern="[a-zA-Z0-9._]{1,254}@(gmail|hotmail|live|outlook|yahoo|alumnos|.udg)+(\.)(com|gob|mx|net)" title="Escribe un correo electrónico válido. Ejemplo: xxxx@gmail.com">
						<button class="btn btn-primary" name="suscribir" type="submit" style="box-shadow: 0px 0px 0.5px 0.5px black;">Comenzar</button>
					</div>
				</div>
				<?php
				$userEmail = "";
				if (isset($_POST['suscribir'])) {
					$userEmail = $_POST['correo'];
					if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
						$subject = "Suscripción Realizada!";
						$message = "Hola $userEmail, gracias por suscribirte!. Al suscribirte tendrás cada semana notificaciones sobre noticias, novedades, boletín informativo y más. ¡Esperamos que disfrutes de nuestros servicios!. Saludos.";
						$sender = "De: Equipo White & Pink Dental © - lfernandomc16@gmail.com";
				?>
						<?php
						if ($contador == 0) {
							mail($userEmail, $subject, $message, $sender);
						?><div class="alert alert-success" role="alert">
								<strong><?php if ($contador == 0) {
													print $SUS;
												} ?></strong>
							</div>
						<?php
						} else {
						?><div class="alert alert-danger" role="alert">
								<strong><?php print $YASUS; ?></strong>
							</div>
						<?php
						}
						$userEmail = "";
					} else {
						?>
						<div class="alert alert-danger" role="alert">
							<strong>¡Email Inválido: <?php echo $userEmail ?>!</strong>
						</div>
				<?php
					}
				}
				?>
			</form>
		</section>
		<span class="ir-arriba icon-arrow-up2">↑</span>
	</main>
	<a href="https://api.whatsapp.com/send?phone=523221170846&text=Hola! Quiero asistencia." class="btn-wsp" target="_blank"><i class="fab fa-whatsapp"></i></a>
	<footer class="bg-dark py-5">
		<div class="container">
			<div class="row text-white g-4">
				<div class="col-md-6 col-lg-3">
					<a class="text-uppercase text-decoration-none brand text-white" href="index.php">White & Pink Dental &copy;</a>
					<p class="text-white text-muted mt-3">La mejor opción para invertir en tu salud dental.</p>
					<img src="https://i.imgur.com/vidg8Ci.png" style="width: auto; height: 125px;" class="iconoFooter">
				</div>

				<div class="col-md-6 col-lg-3">
					<h5 class="fw-light">Links</h5>
					<ul class="list-unstyled">
						<li class="my-3">
							<a href="index.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Inicio
							</a>
						</li>
						<li class="my-3">
							<a href="servicios.html" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Servicios
							</a>
						</li>
						<li class="my-3">
							<a href="pagina-principal-blog.html" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Blog
							</a>
						</li>
						<li class="my-3">
							<a href="personal.html" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Personal
							</a>
						</li>
					</ul>
				</div>

				<div class="col-md-6 col-lg-3">
					<h5 class="fw-light mb-3">Encuéntranos</h5>
					<div class="d-flex justify-content-start align-items-start my-2 text-muted">
						<span class="me-3">
							<i class="fas fa-map-marked-alt"></i>
						</span>
						<span class="fw-light">
							<a href="https://www.google.com/maps/dir/20.6840134,-105.2077802/20.6543903,-105.2254639/@20.672498,-105.2338262,14z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0" target="_blank" class="fw-light" style="color: #666f77;">Avenida Grandes Lagos 303 Local 28 48312 Puerto Vallarta, Jalisco, México</a>
						</span>
					</div>
					<div class="d-flex justify-content-start align-items-start my-2 text-muted">
						<span class="me-3">
							<i class="fas fa-clock"></i>
						</span>
						<span class="fw-light">
							°Lunes a Viernes - 9:00 a.m. a 2:00 p.m. | 4:00 p.m. a 8:00 p.m. <br>°Sábado - 9:00 a.m. a 2:00 p.m. <br>°Domingo - Cerrado
						</span>
					</div>
					<div class="d-flex justify-content-start align-items-start my-2 text-muted">
						<span class="me-3">
							<i class="fas fa-phone-alt"></i>
						</span>
						<span class="fw-light">
							<a href="tel:322 224 1758" class="fw-light" style="color: #666f77;">322 224 1758</a>
						</span>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<h5 class="fw-light mb-3">Síguenos</h5>
					<div>
						<ul class="list-unstyled d-flex">
							<li>
								<a href="https://www.facebook.com/dentalwhitelinepv" class="text-white text-decoration-none text-muted fs-4 me-4" target="_blank">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/whiteandpink.dental/" class="text-white text-decoration-none text-muted fs-4 me-4" target="_blank">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="https://api.whatsapp.com/send?phone=523221170846&app=facebook&entry_point=page_cta&fbclid=IwAR3g7ltELvHFM8mWuMfHv2ARQQubeVLJ3vAIaVBJR_Aokg13GlOAeb_b2Xw" class="text-white text-decoration-none text-muted fs-4 me-4" target="_blank">
									<i class="fab fa-whatsapp"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div style="background-color: black; color:gray; text-align: center;">Copyright &copy; 2022 - White & Pink Dental | Todos los derechos reservados |
		<a href="politica-de-privacidad.html" class="fw-light" style="color: #666f77;"> Política de privacidad</a>
	</div>
	<!-- Isotope js-->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
	<!-- Bootstrap js -->
	<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<!-- Jquery -->
	<script src="js/jquery-3.6.0.js"></script>
	<!-- custom js -->
	<script src="js/script.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>