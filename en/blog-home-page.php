<!DOCTYPE html>
<html lang="en">

<head>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="../irArriba.js"></script>
	<script src="../js/abrirNav.js" defer></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../img/favicon.ico">
	<title>Dental blog page</title>
	<!-- LINK CSS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/IndexBlog.css">
	<link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/BarraBuscar.css">
	<!-- LINK ICONOS-->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<header class="hero-blog-index">
		<!-- MENU NAVEGACIÓN -->
		<nav class="menu">
			<label class="logo"><img src="https://i.imgur.com/uGFKsa7.png" alt="logo"> White & Pink Dental</label>
			<ul class="menu_items">
				<li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li class="active"><a style="color: white; font-weight: 500;" href="blog-home-page.php">Blog</a></li>
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
					<a href="../pagina-principal-blog.html" class="aLang"><i class="fa-solid fa-globe"></i>ESPAÑOL</a>
				</li>
			</ul>
		</div>
		<section class="menu-blog">
			<div class="hero-textos-blog">
				<h1 class="titulo">Our <span class="titulo-active">Dental Blog.</span></h1>
				<p class="copy">The best option to inform you about your dental health.</p>
			</div>
			<img src="https://images.pexels.com/photos/4269694/pexels-photo-4269694.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="mockup-blog-index">
		</section>
	</header>
	<!-- SECTION MAIN -->
	<main>
		<!-- SECTION NUESTRO BLOG -->
		<section class="temas-blog contenedor">
			<div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
				<hr>
				<h2 class="subtitulo">Our blog<span class="point">.</span> </h2>
				<p class="copy-section">Explore our various posts and learn more about your teeth.</p>
			</div>
			<div class="flexsearch" style="margin-bottom: 50px;" data-aos="fade-up">
				<div class="flexsearch--wrapper">
					<form class="flexsearch--form" action="" method="get" role="search">
						<div class="flexsearch--input-wrapper">
							<input class="flexsearch--input" name="q" type="text" placeholder="Search...">
						</div>
						<input class="flexsearch--submit" type="submit" value="&#10140;">
					</form>
				</div>
			</div>
			<div class="gcse-searchresults-only"></div>
			<div class="padre-videos-iframe" data-aos="fade-up">
				<iframe width="850" height="480" style="margin-bottom: 80px;" src="https://www.youtube.com/embed/B5PtkI0kw0k?start=78" title="Dental informative video." frameborder="0" allow="accelerometer; autoplay=true; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
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
				<div class="card">
					<div class="cards-text">
						<h3 class="card-titulo"> · Dental erosion<span class="point">.</span></h3>
						<p class="card-date">November 17th, 2021</p>
						<p class="card-copy">Dental erosion is the progressive and irreversible loss of dental hard tissue caused by a chemical process of acid dissolution that does not involve bacteria. It is a type of dental wear of multifactorial origin and... </p>
						<a href="dental-erosion.php" class="card-btn">Read more...</a>
					</div>
				</div>
				<div class="background">
					<img src="https://www.abadendentistas.com/wp-content/uploads/2021/04/erosion-dental.jpg" class="background-img">
					<div class="background-text" id="soon">
						<h3 class="background-titulo">Example of eroded teeth</h3>
					</div>
				</div>
				<div class="card">
					<div class="cards-text">
						<h3 class="card-titulo"> · Coming soon<span class="point">.</span></h3>
						<p class="card-date">XXX</p>
						<p class="card-copy">More informative articles on oral health coming soon... </p>
						<a href="#soon" class="card-btn">In building</a>
					</div>
				</div>
				<div class="background">
					<img src="https://www.elfinanciero.com.mx/resizer/fBB5oKla6lVmz6_B0C2_fLRdaG4=/1440x810/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/elfinanciero/TYDKSTNAORGC3AE2AJFLLZEE3Y.jpg" class="background-img">
					<div class="background-text">
						<h3 class="background-titulo"><b style="color: black;">Developing</b></h3>
					</div>
				</div>
			</article>
		</section>
		<a href="https://api.whatsapp.com/send?phone=523221170846&text=Hello! I want assistance." class="btn-wsp" target="_blank"><i class="fab fa-whatsapp"></i></a>
	</main>
	<span class="ir-arriba icon-arrow-up2">↑</span>
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
	<script async src="https://cse.google.com/cse.js?cx=8ddfe964ae3a5228f"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>