<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script src="../irArriba.js"></script>
  <script src="../js/abrirNav.js" defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../img/favicon.ico">
  <title>Our services</title>
  <!-- LINK CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../css/IndexBlog.css">
  <link rel="stylesheet" type="text/css" href="../css/Servicios.css">
  <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <!-- LINK ICONOS-->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body>
  <header class="hero-blog-index">
    <!-- MENU NAVEGACIÓN -->
    <nav class="menu">
      <label class="logo"><img src="https://i.imgur.com/uGFKsa7.png" alt="logo"> White & Pink Dental</label>
      <ul class="menu_items">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a style="color: white; font-weight: 500;" href="services.php">Services</a></li>
        <li><a href="blog-home-page.php">Blog</a></li>
        <li><a href="our-staff.php">Stuff</a></li>
        <li class="colorear"><a href="find-us.php" class="link-active">Find us</a></li>
      </ul>

      <span class="btn_menu">
        <i class="fa fa-bars"></i>
      </span>
    </nav>
    <div class="divLang">
      <ul class="ulLang">
        <li class="liLang">
          <a href="../servicios.html" class="aLang"><i class="fa-solid fa-globe"></i>ESPAÑOL</a>
        </li>
      </ul>
    </div>
    <section class="menu-blog">
      <div class="hero-textos-blog">
        <h1 class="titulo">Our <span class="titulo-active">Services.</span></h1>
        <p class="copy">Quality knowledge in different ambits.</p>
      </div>
      <img src="https://images.pexels.com/photos/6528907/pexels-photo-6528907.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="mockup-blog-index">
    </section>
  </header>
  <!-- SECTION MAIN -->
  <main>
    <!-- SECTION NUESTROS SERVICIOS -->
    <section class="nuestros-servicios ">
      <div class="contenedor">
        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
          <hr>
          <h2 class="subtitulo">The work we do<span class="point">:</span> </h2>
        </div>
        <div class="contenido-servicios">
          <!-- CARD DE LOS PRODUCTOS -->
          <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
            <div class="card-productos">
              <img src="data:image/jpeg;base64,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">
              <h4>Orthodontics</h4>
              <p>Durable brackets to combat crooked teeth and their problems that can be generated over time. <br><span style="color:#1a1a1a; font-weight: bold;">$5,800.00</span></p>
              <a href="make-an-appointment.php">Make an appointment</a>
            </div>

            <div class="card-productos">
              <img src="https://i.imgur.com/o2K1wOd.jpg">
              <h4>Whitening</h4>
              <p>Whiten that smile with our impeccable instruments. <br><span style="color:#1a1a1a; font-weight: bold;">$3,500.00</span></p>
              <a href="make-an-appointment.php">Make an appointment</a>
            </div>

            <div class="card-productos">
              <img src="data:image/jpeg;base64,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">
              <h4>Molar endodontics</h4>
              <p>To extract dead dental pulp due to cavities or fractures and prevent the tooth from falling out.<span style="color:#1a1a1a; font-weight: bold;"><br>$2,500.00</span></p>
              <a href="make-an-appointment.php">Make an appointment</a>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="800">
            <div class="card-productos">
              <img src="https://dentalinnovation.net/wp-content/uploads/2020/09/bichectomia-angelina-jolie.jpeg">
              <h4>Bichectomy</h4>
              <p> The best and most demanded aesthetic operation among celebrities and aesthetic lovers. <br><span style="color:#1a1a1a; font-weight: bold;">$4,500.00</span></p>
              <a href="make-an-appointment.php">Make an appointment</a>
            </div>

            <div class="card-productos">
              <img src="https://www.propdental.es/wp-content/uploads/2020/12/contraindicaciones-de-las-extraccion-dental.jpg">
              <h4>Tooth extraction</h4>
              <p>For those who have some kind of discomfort or pain, it's for you. <br><span style="color:#1a1a1a; font-weight: bold;">$500.00 - $900.00</span></p>
              <a href="make-an-appointment.php">Make an appointment</a>
            </div>

            <div class="card-productos">
              <img src="http://espaciodentaljaen.com/files/entradas/las-ventajas-de-acudir-a-una-limpieza-bucal-de-maneera-periodica-espacio-dental-ja-n.jpg">
              <h4>Dental cleaning</h4>
              <p>Deep and professional cleaning so that your teeth are sparkling clean.
                <br><span style="color:#1a1a1a; font-weight: bold;">$700.00</span>
              </p>
              <a href="make-an-appointment.php">Make an appointment</a>
            </div>
          </div>
        </div>

      </div>

    </section>
  </main>
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
              <a href="services.html" class="text-white text-decoration-none text-muted">
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