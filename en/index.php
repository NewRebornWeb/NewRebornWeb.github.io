<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="../irArriba.js"></script>
	<script src="../js/abrirNav.js" defer></script>
	<link rel="icon" href="../img/favicon.ico">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>White & Pink Dental</title>
	<!-- LINK CSS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/Doctores.css">
	<link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<!-- LINK ICONOS-->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

	<?php include("../php/suscribirse.php")	?>
	<header class="hero">
		<!-- MENU NAVEGACIÓN -->
		<nav class="menu">
			<label class="logo"><img src="https://i.imgur.com/uGFKsa7.png" alt="logo"> White & Pink Dental</label>
			<ul class="menu_items">
				<li class="active"><a style="color: white; font-weight: 500;" href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="blog-home-page.php">Blog</a></li>
				<li><a href="our-staff.php">Staff</a></li>
				<li class="colorear"><a href="find-us.php" class="link-active">Find us</a></li>
			</ul>

			<span class="btn_menu">
				<i class="fa fa-bars"></i>
			</span>
		</nav>
		<div class="divLang">
			<ul class="ulLang">
				<li class="liLang">
					<a href="../index.php" class="aLang"><i class="fa-solid fa-globe"></i>ESPAÑOL</a>
				</li>
			</ul>
		</div>
		<section class="contenedor hero-main">
			<div class="hero-textos">
				<h1 class="titulo">The Best <span class="titulo-active">Dental Clinic.</span></h1>
				<p class="copy" style="color: whitesmoke; text-shadow: 2px 2px 2px black;">The best option to invest in your oral health.</p>
				<a href="make-an-appointment.php" class="cta" style="box-shadow: 0px 10px 10px -6px black;">Book a consultation</a>
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
					<h2 class="subtitulo">Our offers<span class="point">.</span> </h2>
					<p class="copy-section">Check our special offers that we prepare for you.</p>
				</div>
				<article class="contenedor-card" data-aos="fade-left" data-aos-duration="500">
					<!-- ------ -->
					<div class="Galeria-Fotografica">
						<div class="item">
							<img src="https://i.imgur.com/0VYOTrq.jpg" class="item-img">
							<div class="item-text">
								<h3>Whitening</h3>
								<p>From <span style="text-decoration: 3px line-through red;">$3,250.00</span> to $1,500.00</p>
							</div>
						</div>
						<div class="item">
							<img src="https://i.imgur.com/FhtSI4e.jpg" class="item-img">
							<div class="item-text">
								<h3>Dental Cleaning</h3>
								<p>2 x $700.00</p>
							</div>
						</div>
						<div class="item">
							<img src="https://i.imgur.com/cSvGGae.jpg" class="item-img">
							<div class="item-text">
								<h3>Dental Resins</h3>
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
				<h2 class="subtitulo">Our blog<span class="point">.</span> </h2>
				<p class="copy-section">Explore our various posts and learn more about your teeth.</p>
			</div>
			<article class="contenedor-bg" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
				<!-- ---------- -->
				<div class="card">
					<div class="cards-text">
						<h3 class="card-titulo"> · Tooth decay<span class="point">.</span></h3>
						<p class="card-date">November 17th, 2021</p>
						<p class="card-copy">Cavities are permanently damaged areas on the surface of the teeth that develop into small openings or holes. Cavities occur due to a combination of factors, including bacteria in the mouth, frequent snacking, sugary drinks, and poor dental cleaning... </p>
						<a href="tooth-decay.php" class="card-btn">Read more</a>
					</div>
				</div>
				<div class="background">
					<img src="https://clinicadentalalcala.com/wp-content/uploads/2014/12/1.jpg" class="background-img" class="background-img">
					<div class="background-text">
						<h3 class="background-titulo">Routine cavities check</h3>
					</div>
				</div>
				<!-- ---------- -->
				<div class="card">
					<div class="cards-text">
						<h3 class="card-titulo"> · Buccal ulcers<span class="point">.</span></h3>
						<p class="card-date">November 17th, 2021</p>
						<p class="card-copy">Although mostly harmless, canker sores can be extremely uncomfortable and make it difficult to eat, drink and brush your teeth... </p>
						<a href="dental-ulcers.php" class="card-btn">Read more</a>
					</div>
				</div>
				<div class="background">
					<img src="https://professional.sunstargum.com/content/dam/sunstar-europe/gum/lifestyle/woman/woman-mouth-close-up/Woman-with-mouth-ulcer.jpg/_jcr_content/renditions/cq5dam.cropped.1360.763.jpeg" class="background-img">
					<div class="background-text">
						<h3 class="background-titulo">Lip ulcer problem</h3>
					</div>
				</div>
				<!-- ---------- -->
				<div class="card">
					<div class="cards-text">
						<h3 class="card-titulo"> · Crooked teeth<span class="point">.</span></h3>
						<p class="card-date">November 17th, 2021</p>
						<p class="card-copy">Crooked teeth are teeth that erupt crooked, turned or tilted, and therefore cause a dental malocclusion. There are several reasons why teeth can grow crooked... </p>
						<a href="crooked-teeth.php" class="card-btn">Read more</a>
					</div>
				</div>
				<div class="background">
					<img src="https://odontotecks.com/wp-content/uploads/2017/08/problemas-de-dientes-chuecos.jpg" class="background-img">
					<div class="background-text">
						<h3 class="background-titulo" style="color: black">Typical case of crooked teeth</h3>
					</div>
				</div>
				<a href="blog-home-page.php" class="card-btn" style="margin: 40px 25% 0 25%; margin-bottom: -50px;">Visit Blog</a>
			</article>
		</section>
		<!-- SECTION NUESTROS CLIENTES -->
		<section class="testimonio" data-aos="fade-up">
			<div class="contenedor" style="margin-bottom: -100px;">
				<hr>
				<h2 class="subtitulo">Satisfied customers<span class="point">.</span> </h2>
				<p class="copy-section">Every day more people trust us for their dental health.</p>
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
			<form method="POST" action="#subscribed" class="container">
				<hr>
				<div class="d-flex flex-column align-items-center justify-content-center">
					<div class="title text-centerpt-3 pb-5">
						<h2 class="position-relative d-inline-block ms-4" id="subscribed">Subscribe</h2>
					</div>

					<p class="text-center text-muted">Don't miss out on valuable information about discounts, promotions and much more from White &amp; Pink Dental &copy;. Click the button below to start being part of the WP Dental family.</p>
					<div class="input-group mb-3 mt-3">
						<input type="email" name="correo" class="form-control" placeholder="Enter your email.." required value="<?php $userEmail = "";
																																																										echo $userEmail ?>" pattern="[a-zA-Z0-9._]{1,254}@(gmail|hotmail|live|outlook|yahoo|alumnos|.udg)+(\.)(com|gob|mx|net)" title="Write a valid e-mail. Example: xxxx@gmail.com">
						<button class="btn btn-primary" name="suscribir" type="submit" style="box-shadow: 0px 0px 0.5px 0.5px black;">Begin</button>
					</div>
				</div>
				<?php
				$userEmail = "";
				if (isset($_POST['suscribir'])) {
					$userEmail = $_POST['correo'];
					if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
						$subject = "Subscription successful!";
						$message = "Hello $userEmail, thanks for subscribe!. By subscribing you will have weekly notifications about news, newsletter and more. We hope you enjoy our services! Greetings.";
						$sender = "From: White & Pink Dental Crew © - lfernandomc16@gmail.com";
				?>
						<?php
						if ($contador == 0) {
							mail($userEmail, $subject, $message, $sender);
						?><div class="alert alert-success" role="alert">
								<strong><?php if ($contador == 0) {
													print "Succesfully subscribed";
												} ?></strong>
							</div>
						<?php
						} else {
						?><div class="alert alert-danger" role="alert">
								<strong><?php print "You are already subscribed"; ?></strong>
							</div>
						<?php
						}
						$userEmail = "";
					} else {
						?>
						<div class="alert alert-danger" role="alert">
							<strong>Invalid e-mail: <?php echo $userEmail ?>!</strong>
						</div>
				<?php
					}
				}
				?>
			</form>
		</section>
		<span class="ir-arriba icon-arrow-up2">↑</span>
		<a href="https://api.whatsapp.com/send?phone=523221170846&text=Hello! I want assistance." class="btn-wsp" target="_blank"><i class="fab fa-whatsapp"></i></a>
	</main>
	<footer class="bg-dark py-5">
		<div class="container">
			<div class="row text-white g-4">
				<div class="col-md-6 col-lg-3">
					<a class="text-uppercase text-decoration-none brand text-white" href="index.php">White & Pink Dental &copy;</a>
					<p class="text-white text-muted mt-3">The best option to invest in your oral health.</p>
					<img src="https://i.imgur.com/vidg8Ci.png" style="width: auto; height: 125px;" class="iconoFooter">
				</div>

				<div class="col-md-6 col-lg-3">
					<h5 class="fw-light">Links</h5>
					<ul class="list-unstyled">
						<li class="my-3">
							<a href="index.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Home
							</a>
						</li>
						<li class="my-3">
							<a href="services.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Services
							</a>
						</li>
						<li class="my-3">
							<a href="blog-home-page.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Blog
							</a>
						</li>
						<li class="my-3">
							<a href="our-staff.php" class="text-white text-decoration-none text-muted">
								<i class="fas fa-chevron-right me-1"></i>Staff
							</a>
						</li>
					</ul>
				</div>

				<div class="col-md-6 col-lg-3">
					<h5 class="fw-light mb-3">Find us</h5>
					<div class="d-flex justify-content-start align-items-start my-2 text-muted">
						<span class="me-3">
							<i class="fas fa-map-marked-alt"></i>
						</span>
						<span class="fw-light">
							<a href="https://www.google.com/maps/dir/20.6840134,-105.2077802/20.6543903,-105.2254639/@20.672498,-105.2338262,14z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0" target="_blank" class="fw-light" style="color: #666f77;">Avenida Grandes Lagos 303 Local 28 48312 Puerto Vallarta, Jalisco, Mexico</a>
						</span>
					</div>
					<div class="d-flex justify-content-start align-items-start my-2 text-muted">
						<span class="me-3">
							<i class="fas fa-clock"></i>
						</span>
						<span class="fw-light">
							°Monday to Friday - 9:00 a.m. to 2:00 p.m. | 4:00 p.m. to 8:00 p.m. <br>°Saturday - 9:00 a.m. to 2:00 p.m. <br>°Sunday - Closed
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
					<h5 class="fw-light mb-3">Social media</h5>
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
	<div style="background-color: black; color:gray; text-align: center;">Copyright &copy; 2022 - White & Pink Dental | All rights reserved |
		<a href="privacy-policy.php" class="fw-light" style="color: #666f77;"> Privacy Policy</a>
	</div>
	<!-- Isotope js-->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
	<!-- Bootstrap js -->
	<script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<!-- Jquery -->
	<script src="../js/jquery-3.6.0.js"></script>
	<!-- custom js -->
	<script src="../js/script.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>