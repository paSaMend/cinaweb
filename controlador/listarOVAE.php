<?php
 include_once '../FACADE/Facade.php';
    session_start();



   if(isset($_SESSION["idE"])){
     $curso=$_POST['idCur'];
     $periodo=$_POST['ListaPE'];
     $tema=$_POST['ListaT'];
     $facade= Facade::getInstance();
     $result=$facade->listarOva($curso,$periodo,$tema);


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio Sesion</title>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/form.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="../js/modernizr.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>
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
        <li><a href="../inicioEstudiante.php">Inicio</a></li>
        <li><a href="../listarOE.php">OVA</a></li>
        <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>


			</ul>
		</nav>







		<!--======================================== Boton menu mobil ========================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>



  <!--======================================== Info ========================================-->
  <div class="container" style="padding:0px;">
  <section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
  <section class="events-ins">
    <div class="container-fluid">
      <h2 class="text-center titles">Listado de OVAS por tema del curso y periodo seleccionado</h2>
      <br>

      <h3 class="text-center">selecciona una de las siguientes OVA para visualizarlo</h3>
      <br>
      <div class="row">
        <!--======================================== Articulo 1 ========================================-->
        <?php   while($ovas=$result->fetch(PDO::FETCH_ASSOC)){?>
        <article class="col-xs-12 col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="../assets/img/ova.jpg" alt="IMG" class="img-responsive img-rounded">
              <div class="caption">
                <input id="idOVA"  type="hidden" value=<?php echo $ovas["idOVA"]?>>
                <h3 class="text-center"><?php echo $ovas["tematicaOVA"] ?></h3>
                <p class="text-justify"></p>
                <p class="text-center"><a href="../OVA/<?php echo $ovas["tematicaOVA"]?>" class="btn btn-primary" role="button"  target="_blank">Visualizar</a></p>
              </div>
            </div>
        </article>
      <?php }

      ?>
      </div>
    </div>
  </section>
</section>
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
	header("location:../index.html");
}
?>
