<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../img/favicon.ico">
	<script src="../js/abrirNav.js" defer></script>
	<title> Agendar Cita</title>
	<!-- LINK CSS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/AgendarCita.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<!-- LINK ICONOS-->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="../irArriba.js"></script>
</head>

<body>

	<?php include("../php/suscribirse.php"); ?>
	<?php include("../php/agendarCita.php"); ?>
	<nav class="menu">
		<label class="logo"><img src="https://i.imgur.com/uGFKsa7.png" alt="logo"> White & Pink Dental</label>
		<ul class="menu_items" style="z-index: 1;">
			<li><a href="index.php">Home</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="blog-home-page.php">Blog</a></li>
			<li><a href="our-staff.php">Staff</a></li>
			<li class="colorear"><a href="find-us.php" class="link-active">Find us</a></li>
		</ul>

		<span class="btn_menu">
			<i class="fa fa-bars"></i>
		</span>
	</nav>
	<div class="formResponsivo" style="background: pink; border-style: solid; border-color: #ce3c72;">
		<div class="divLang">
			<ul class="ulLang">
				<li class="liLang">
					<a style="background-color: #696969cb;" href="../agendar-cita.php" class="aLang"><i class="fa-solid fa-globe"></i>ESPAÑOL</a>
				</li>
			</ul>
		</div>
		<div data-aos="fade-down">
			<div class="background">
				<div class="hero-textos-blog">
					<h1 class="titulo" style="text-align: right;">Contact us <span class=" titulo-active">Now.</span></h1>
				</div>
				<img src="https://blog.lemontech.com/wp-content/uploads/2021/05/agenda-para-abogados.jpg" class="background-img" style="margin-left: 220px;">
			</div>
			<div class="contenedor" style="margin-bottom: -100px;">
				<h2 class="subtitulo">
					<hr>Schedule an appointment with <span class="point">Us!</span>
				</h2>
				<p class="copy-section">Complete the following form below, make your consult about how you want to be contacted and we will contact you during our business hours.</p>
			</div>
		</div>
		<form method="post" class="wrapper" action="#scheduled-appointment" style="margin-bottom: 70px;" data-aos="fade-up">
			<div class="titulo" id="scheduled-appointment">
				Book Your Appointment
			</div>
			<div class="form">
				<div class="input_field">
					<label>First name</label>
					<input type="text" class="input" name="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,48}" title="First name empty/not valid (too short or long)." autocomplete="off" required>
				</div>
				<div class="input_field">
					<label>Last name</label>
					<input type="text" class="input" name="apellido" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Last name empty/not valid. Too short or long." autocomplete="off" required>
				</div>
				<div class="input_field">
					<label>Gender</label>
					<div class="custom_select">
						<select name="sexo" required>
							<option selected disabled value>-select-</option>
							<option name="Hombre" value="Hombre">Male</option>
							<option name="Mujer" value="Mujer">Female</option>
						</select>
					</div>
				</div>
				<div class="input_field">
					<label>E-mail</label>
					<input type="email" class="input" name="correo" pattern="[a-zA-Z0-9._]{1,254}@(gmail|hotmail|live|outlook|yahoo|alumnos|.udg)+(\.)(com|gob|mx|net)" title="Put a valid e-mail. Example: xxxx@gmail.com" autocomplete="off" required>
				</div>
				<div class="input_field">
					<label>Phone number</label>
					<input type="text" class="input" name="tel" pattern="\([0-9]{3}\)[ -][0-9]{3}[ -][0-9]{4}" title="A valid phone number consist in 3 digits between bracket, a space or hyphen (-), followed by the next 3 digits, a space or hyphen (-), and 4 more digits. e.g. (322) 123-1234" maxlength="14" autocomplete="off" required>
				</div>
				<div class="input_field">
					<label>Desired date</label>
					<input type="date" class="input" name="fechaConsulta" title="Add the desired date of you consult (according to business hours)." autocomplete="off" required>
				</div>
				<div class="input_field">
					<label>Reason for consultation</label>
					<textarea class="textarea" name="consulta" title="This field cannot be empty and only 300 characters are allowed." required minlength="1" maxlength="300"></textarea>
				</div>
				<div class="input_field">
					<a class="btn" href="#formCita"><input type="submit" value="Send" class="btn" name="btnAgendar"></a>
				</div>

				<div class="input_field">
					<a class="btn" href="index.php"><input type="button" class="btn" value="Home"></a>
				</div>

			</div>
			<?php
			if (isset($_POST['btnAgendar'])) {
				if ($contadorCita == 0) {
			?><div class="alert alert-success" style="margin-top: 20px;" role="alert">
						<strong><?php if ($contadorCita == 0) {
											print "Thanks $nombre, your appointment has been scheduled!";
										} ?></strong>
					</div>
				<?php
				} else {
				?><div class="alert alert-danger" style="margin-top: 20px;" role="alert">
						<strong><?php print "$nombre, you already have an appointment scheduled!"; ?></strong>
					</div>
			<?php
				}
			}
			?>
		</form>
	</div>
	<section id="suscribete" class="py-5">
		<form action="#subscribed" method="POST" class="container">
			<hr>
			<div class="d-flex flex-column align-items-center justify-content-center">
				<div class="title text-centerpt-3 pb-5">
					<h2 class="position-relative d-inline-block ms-4" id="subscribed">Subscribe</h2>
				</div>

				<p class="text-center text-muted">Don't miss out on valuable information about discounts, promotions and much more from White &amp; Pink Dental &copy;. Click the button below to start being part of the WP Dental family.</p>
				<div class="input-group mb-3 mt-3">
					<input type="email" name="correo" class="form-control" placeholder="Enter your email.." required value="<?php $userEmail = "";
																																																									echo $userEmail ?>" pattern="[a-zA-Z0-9._]{1,254}@(gmail|hotmail|live|outlook|yahoo|alumnos|.udg)+(\.)(com|gob|mx|net)" title="Write a valid e-mail. Example: xxxx@gmail.com">
					<button class="btn btn-primary" href="suscribete" name="suscribir" type="submit" style="box-shadow: 0px 0px 0.5px 0.5px black;">Begin</button>
				</div>
			</div>
			<?php
			$subject = "Subscription successful!";
			$message = "Hello $userEmail, thanks for subscribe!. By subscribing you will have weekly notifications about news, newsletter and more. We hope you enjoy our services! Greetings.";
			$sender = "From: White & Pink Dental Crew © - lfernandomc16@gmail.com";
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