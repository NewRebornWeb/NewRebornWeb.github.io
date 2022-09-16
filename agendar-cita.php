<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/favicon.ico">
	<script src="js/abrirNav.js" defer></script>
	<title> Agendar Cita</title>
	<!-- LINK CSS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/AgendarCita.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<!-- LINK ICONOS-->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="irArriba.js"></script>
</head>

<body>

	<?php include("php/suscribirse.php"); ?>
	<?php include("php/agendarCita.php"); ?>
	<nav class="menu">
		<label class="logo"><img src="https://i.imgur.com/uGFKsa7.png" alt="logo"> White & Pink Dental</label>
		<ul class="menu_items" style="z-index: 1;">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="servicios.html">Servicios</a></li>
			<li><a href="pagina-principal-blog.html">Blog</a></li>
			<li><a href="personal.html">Personal</a></li>
			<li class="colorear"><a href="ubicacion.html" class="link-active">Dónde estamos</a></li>
		</ul>

		<span class="btn_menu">
			<i class="fa fa-bars"></i>
		</span>
	</nav>
	<div class="formResponsivo" style="background: pink; border-style: solid; border-color: #ce3c72;">
		<div class="divLang">
			<ul class="ulLang">
				<li class="liLang">
					<a style="background-color: #696969cb;" href="en/make-an-appointment.php" class="aLang"><i class="fa-solid fa-globe"></i>ENGLISH</a>
				</li>
			</ul>
		</div>
		<div data-aos="fade-down">
			<div class="background">
				<div class="hero-textos-blog">
					<h1 class="titulo" style="text-align: right;">Contáctanos <span class=" titulo-active">Ahora.</span></h1>
				</div>
				<img src="https://blog.lemontech.com/wp-content/uploads/2021/05/agenda-para-abogados.jpg" class="background-img" style="margin-left: 220px;">
			</div>
			<div class="contenedor" style="margin-bottom: -100px;">
				<h2 class="subtitulo">
					<hr><span class="point">¡</span>Agenda una cita con nosotros<span class="point">!</span>
				</h2>
				<p class="copy-section">Llena el formulario de abajo, realiza tu consulta como deseas ser contactado y nos pondremos en contacto contigo durante nuestras horas de trabajo.</p>
			</div>
		</div>
		<form method="post" class="wrapper" action="#cita-agendada" style="margin-bottom: 70px;" data-aos="fade-up">
			<div class="titulo" id="cita-agendada">
				Agendar Cita
			</div>
			<div class="form">
				<div class="input_field">
					<label>Nombre(s)</label>
					<input type="text" class="input" name="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,48}" title="Nombre vacío/no válido (demasiado corto o largo)." autocomplete="off" required>
				</div>
				<div class="input_field">
					<label>Apellidos</label>
					<input type="text" class="input" name="apellido" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Apellido(s) vacío(s)/no válido(s). Demasiado corto o largo." autocomplete="off" required>
				</div>
				<div class="input_field">
					<label>Sexo</label>
					<div class="custom_select">
						<select name="sexo" required>
							<option selected disabled value>-selecciona-</option>
							<option name="Hombre" value="Hombre">Masculino</option>
							<option name="Mujer" value="Mujer">Femenino</option>
						</select>
					</div>
				</div>
				<div class="input_field">
					<label>Correo</label>
					<input type="email" class="input" name="correo" pattern="[a-zA-Z0-9._]{1,254}@(gmail|hotmail|live|outlook|yahoo|alumnos|.udg)+(\.)(com|gob|mx|net)" title="Escribe un correo electrónico válido. Ejemplo: xxxx@gmail.com" autocomplete="off" required>
				</div>
				<div class="input_field">
					<label>Número celular</label>
					<input type="text" class="input" name="tel" pattern="\([0-9]{3}\)[ -][0-9]{3}[ -][0-9]{4}" title="Un número telefónico válido consiste en 3 digitos entre paréntesis, un espacio o guión (-), seguido de los 3 digitos siguientes, un espacio o guión (-), y 4 digitos más. e.g. (322) 123-1234" maxlength="14" autocomplete="off" required>
				</div>
				<div class="input_field">
					<label>Fecha deseada</label>
					<input type="date" class="input" name="fechaConsulta" title="Agrega la fecha deseada de tu consulta (de acuerdo al horario de trabajo)." autocomplete="off" required>
				</div>
				<div class="input_field">
					<label>Motivo de la consulta</label>
					<textarea class="textarea" name="consulta" title="No puede estar vacío este campo y solo se permiten 300 caracteres." required minlength="1" maxlength="300"></textarea>
				</div>
				<div class="input_field">
					<a class="btn"><input type="submit" value="Agendar Cita" class="btn" id="enviarCita" name="btnAgendar"></a>
				</div>

				<div class="input_field">
					<a class="btn" href="index.php"><input type="button" class="btn" value="Inicio"></a>
				</div>

			</div>
			<?php
			if (isset($_POST['btnAgendar'])) {
				if ($contadorCita == 0) {
					mail("lfernandomc16@gmail.com", $subject, $message, $sender);
			?><div class="alert alert-success" style="margin-top: 20px;" role="alert">
						<strong><?php if ($contadorCita == 0) {
											echo $SUS;
										} ?></strong>
					</div>
				<?php
				} else {
				?><div class="alert alert-danger" style="margin-top: 20px;" role="alert">
						<strong><?php echo $YASUS; ?></strong>
					</div>
			<?php
				}
			}
			?>
		</form>
	</div>
	<section id="suscribete" class="py-5">
		<form action="#suscrito" method="POST" class="container">
			<hr>
			<div class="d-flex flex-column align-items-center justify-content-center">
				<div class="title text-centerpt-3 pb-5">
					<h2 class="position-relative d-inline-block ms-4">Suscríbete</h2>
				</div>

				<p class="text-center text-muted">No te pierdas de información valiosa sobre descuentos, promociones y mucho más de parte de White &amp; Pink Dental &copy;. Dar clic al botón de abajo para comenzar a ser parte de la familia WPDental.</p>
				<div class="input-group mb-3 mt-3">
					<input type="email" name="correo" id="suscrito" class="form-control" placeholder="Ingresa tu correo..." required value="<?php $userEmail = "";
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
	<a href="https://api.whatsapp.com/send?phone=523221170846&text=Hola! Quiero asistencia." class="btn-wsp" target="_blank"><i class="fab fa-whatsapp"></i></a>
	<span class="ir-arriba icon-arrow-up2">↑</span>
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
	<div style="background-color: black; color:gray; text-align: center;">Copyright &copy; 2022 - White & Pink Dental |
		Todos los derechos reservados |
		<a href="politica-de-privacidad.html" class="fw-light" style="color: #666f77;"> Política de privacidad</a>
	</div>
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