<div class="contenedor nav-contenedor">
				<div class="logo">
					<h2 class="logo-name"><img src="https://i.imgur.com/uGFKsa7.png" alt="logo"> White & Pink Dental<span class="point">.</span></h2>
				</div>
				<div class="links">
					<a class="colorear">Inicio</a>
					<a href="servicios.html" class="link">Servicios</a>
					<a href="pagina-principal-blog.html" class="link">Blog</a>
					<a href="personal.html" class="link">Personal</a>
					<a href="ubicacion.html" class="link link-active">Dónde estamos</a>
				</div>
			</div>

      boton coloreado color = #FE5587

      .nav-hero{
	background: white;
	color: #3F3038;
	height: 70px;
	border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-contenedor{
	display: flex;
	align-items: center;
	justify-content: space-between;
	height: inherit;
	padding: 0;
}
.logo-name{
	font-size: 24px;
}

.colorear{
	background-color: #FE5587;
	border-radius: 4px;
	padding: 6px;
	color: white;
	text-decoration: none;
}

.link{
	display: inline-block;
	color: inherit;
	text-decoration: none;
	font-weight: 300;
	padding: 10px;
}
.link-active{
	color: #FE5587;
	font-weight: 700;
}
.point{
	color: #FE5587;
}