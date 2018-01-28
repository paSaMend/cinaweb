<?php
    session_start();

   if(isset($_SESSION["idE"])){?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio Sesion</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/form.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body style="background-color: lightgoldenrodyellow">
	<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div class="full-reset logo">
			<span class="hidden-lg hidden-md">CiNaWeb</span>
			<span class="hidden-xs hidden-sm">CiNaWeb</span>

		</div>


		<!--======================================== Links de navegación ========================================-->
		<nav class="full-reset navigation">

			<ul class="full-reset list-unstyled">
        <li><a href="inicioEstudiante.php">Inicio</a></li>
				<li><a href="listarOE.php">OVA</a></li>
				<li><a href="controlador/cerrarSesion.php">Cerrar Sesion</a></li>


			</ul>
		</nav>







		<!--======================================== Boton menu mobil ========================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>







  <!--======================================== Info ========================================-->
  <div class="pruebaInfo">
		<div class="fondo">
  <section class="full-reset" style="padding: 20px 0;">
      <h2 class="text-center titles">Bienvenido  <?php echo $_SESSION["Estudiante"] ?></h2>
    <div class="container">
      <div class="row">
        <section class="col-xs-12 col-sm-8 col-md-9 info-section-ins">
          <!--======================================== Proposito ========================================-->
          <article class="full-reset" id="pp">
            <div class="page-header" style="margin-bottom:40px;">
              <h1><i class="fa fa-info"></i> &nbsp; Primera Parte</h1>
            </div>

            <div class="panel panel-primary">
              <div class="panel-heading lead text-center titles" style="background-color: seagreen;">Listar contenido multimedia interactivo</div>
              <div class="panel-body">
                <p class="lead text-justify">
                Este aplicativo web te permite acceder al contenido multimedia creado y subido por el docente. Adelante navega por las diferentes opciones y hecha un vistaso. Para listar el material disponible en el aplicativo, puedes seleccionar la opcion OVA que se encuentra ubicada en la parte superior derecha de la pantalla <br><br><img src="assets/img/opcionova.jpg"><br><br>o dar click al boton visualizar que se encuentra al finalizar este texto. Una vez allí deberas seleccionar en la lista desplegable el periodo y la tematica que desees consultar estos se muestran en una sola lista  <br><br><img src="assets/img/listaPeriodo.jpg"><br><br>posteriormente debes de seleccionar uno de los subtemas pertenecientes en ese periodo para poder consultar el material publicado por el docente referente a la subtematica seleccionada y presionar sobre el boton listar.<br><br><img src="assets/img/listar.jpg"><br><br>
              </p>
              </div>
            </div>


          </article>

          <!--========================================Inicia como estudiante ========================================-->
          <article class="full-reset" id="sp">
            <div class="page-header" style="margin-bottom:40px;">
              <h1><i class="fa fa-graduation-cap"></i> &nbsp; Segunda Parte</h1>
            </div>
            <br>
            <div class="panel panel-primary">
              <div class="panel-heading lead text-center titles" style="background-color: seagreen;">Visualizar contenido multimedia</div>
              <div class="panel-body">
                <p class="lead text-justify">
                Una vez realizada la primera parte veras en pantalla un listado del contenido multimedia que puedes visualizar posicionate sobre el que quieras y da click en el boton visualizar <br><br><img src="assets/img/visualizar.jpg"><br><br>
              </p>
              </div>
            </div>

          </article>
        </section>
        <!--======================================== Navegacion fija lateral derecha ========================================-->
        <nav class="hidden-xs scroll-navigation-ins">
          <figure class="full-reset">
            <img src="assets/img/logo.png" alt="Logo" class="img-responsive center-box">
          </figure>
          <h4 class="text-center titles">Ayuda </h4>
          <ul class="list-unstyled full-reset">
            <li data-href="#pp">Primera Parte</li>
            <li data-href="#sp">Segunda Parte</li>
          </ul>
        </nav>
      </div>
    </div>
  </section>

    </div>
  </div>
  <!--========================================Fin Info========================================-->


	<!--======================================== Enlaces importantes ========================================-->
	<section class="text-center important-links-index">
		<h2 class="titles">Sitios y enlaces importantes</h2>


		<a href="https://www.mundoprimaria.com/juegos-conocimiento-del-medio/juegos-de-ciencias-naturales-1o-y-2o-de-primaria/" class="open-link-newTab">
			<i class="fa fa-globe"></i>
			<p>MUNDO PRIMARIA</p>
		</a>

		<a href="http://www.enjambre.gov.co/enjambre/" class="open-link-newTab">
			<i class="fa fa-forumbee"></i>
			<p>ENJAMBRE</p>
		</a>

		<a href="http://aprende.colombiaaprende.edu.co/cainicio" class="open-link-newTab">
			<i class="fa fa-laptop"></i>
			<p>COLOMBIA APREND</p>
		</a>

		<a href="#!" class="open-link-newTab">
			<i class="fa fa-download"></i>
			<p>DESCARGAS</p>
		</a>
	</section>
	<!--======================================== Pie de pagina ========================================-->
	<footer class="full-reset footer">
		<div class="full-reset" style="padding: 15px 0;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Visitenos en</h4>
						<p class="text-center">Universidad Francisco De Paula Santander <br>Edificio Aula sur 4to piso</p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Contactenos</h4>
						<p class="text-center">Tele: 313 497 5286<br>Correo Electrónico: pablo.a.s.mendoza@gmail.com</p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles subtitles-footer">Siguenos en</h4>
						<ul class="list-unstyled links-footer">
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-facebook"></i> &nbsp; Facebook</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-twitter"></i> &nbsp; Twitter</a></li>
							<li><a href="#!" class="open-link-newTab"><i class="fa fa-google-plus"></i> &nbsp; Google+</a></li>
						</ul>
					</div>
					<div class="col-xs-12">
							<div class="full-reset footer-copyright"><i class="fa fa-copyright"></i> 2017 Pablo Sanchez - Jesus Gamez</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
<?php
}else{
	header("location:inicioSesion.php");
}
?>
