<?php
    session_start();

   if(isset($_SESSION["id"])){?>
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
  <!--CSS-->
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

  <!--Javascript-->




  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="js/modernizr.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>

  <script src="js/operaciones.js"></script>



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
        <li><a href="inicioDocente.php">Inicio</a></li>
				<li><a href="AdministrarEstudiante.php">Estudiantes</a></li>
				<li><a href="AdministrarCurso.php">Cursos</a></li>
				<li><a href="AdministrarOva.php">OVA</a></li>
				<li><a href="controlador/cerrarSesion.php">Cerrar Sesion</a></li>


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
      <br>


      <br>
      <div class="row" style="display: flex; justify-content: center; align-items: center;">
        <!--======================================== Articulo 1 ========================================-->
        <article class="col-xs-12 col-sm-6 col-md-4" style="">
          <div class="thumbnail">
              <img src="assets/img/ae.png" alt="IMG" class="img-responsive img-rounded">
              <div class="caption">
                <h3 class="text-center">Estudiantes</h3>
                <p class="text-center"><a class="btn btn-primary" role="button" data-toggle="modal" data-target="#modalEstudiante">Registrar</a></p>
              </div>
            </div>
        </article>
        </div>
      </div>
  </section>
</section>
</div>

<!--========================================Fin Info========================================-->






<!--========================================Tabla Estudiante========================================-->
<div class="container" style="padding:0px;">
<section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
  <section class="events-ins">
  <div class="container">
  <div class="col-md-8 col-md-offset-2">
      <h2 class="text-center titles">Listado de estudiantes por curso que se encuentran registrados en el sistema</h2>
      <br>
  </div>
  <div class="col-md-8 col-md-offset-2">
      <table id="tablaestudiantes" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
          <tr>
              <th>Curso</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Documento</th>
              <th>Responsable</th>
              <th>Telefono</th>
              <th>Correo</th>
              <th>Acciones</th>

          </tr>
          </thead>
          <tbody>

          </tbody>
          <tfoot>
          <tr>
            <th>Curso</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Responsable</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones</th>

          </tr>
          </tfoot>
      </table>
  </div>
</div>
</section>
</section>
</div>

<!--========================================Fin Tabla Estudiante========================================-->


  <!--========================================Modal registrar Estudiante========================================-->

  <div class="modal fade"  data-backdrop="static" id="modalEstudiante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
 <div class="modal-content">
   <script>setTimeout ("ListarCurso('<?php echo $_SESSION["id"] ?>')", 5);</script>
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
     <h4 class="modal-title" id="exampleModalLabel" style="color:black;">Registrar Estudiante</h4>
   </div>
   <div class="modal-body">
     <form>


       <div class="form-group">
             <p>Curso:</p>

             <select class="form-control" id="ListaC">
             </select>
      </div>

        <div class="form-group">
                  <p>Nombre:</p>
                  <input type="text" class="form-control" placeholder="Digite el/los nombre del estudiante" id="nombre">
                   <span class="input-group-btn"></span>
         </div>

         <div class="form-group">
                   <p>Apellido:</p>
                   <input type="text" class="form-control" placeholder="Digite el/los apellido del estudiante" id="apellido" >
                    <span class="input-group-btn"></span>
          </div>

          <div class="form-group">
                    <p>Documento de Identidad:</p>
                    <input type="text" class="form-control" placeholder="Digite el documento de identidad del estudiante" id="di" >
                     <span class="input-group-btn"></span>
           </div>

           <div class="form-group">
                     <p>Nombre del Padre de Familia:</p>
                     <input type="text" class="form-control" id="nombreR" placeholder="Digite el nombre del padre o persona responsable del estudiante" >
                     <span class="input-group-btn"></span>
            </div>

          <div class="form-group">
                    <p>Telefono Responsable:</p>
                    <input type="text" class="form-control" id="telefonoR" placeholder="Digite el telefono de la pérsona responsable del estudiante" >
                    <span class="input-group-btn"></span>
           </div>

           <div class="form-group">
                     <p>Contrasena:</p>
                     <input type="password" class="form-control" id="password" placeholder="Digite la contrasena que desea asignarle al estudiante" >
                     <span class="input-group-btn"></span>
            </div>

            <div class="form-group">
                      <p>Correo Electronico:</p>
                      <input type="email" class="form-control" id="correo" placeholder="Digite el correo electronico asociado al estudiante" >
                      <span class="input-group-btn"></span>
             </div>



       </form>
        </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
     <a type="button" class="btn btn-primary" onclick="registrarEstudiante();" >Guardar</a>
   </div>
    </div>
     </div>
      </div>

  <!--========================================Modal registrar Estudiante========================================-->




<!--========================================Modal Editar Estudiante========================================-->

<div class="modal fade"  data-backdrop="static" id="modalEEstudiante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
<div class="modal-content">
 <script>setTimeout ("ListarCursoT('<?php echo $_SESSION["id"] ?>')", 5);</script>
 <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
   <h4 class="modal-title" id="exampleModalLabel" style="color:black;">Registrar Estudiante</h4>
 </div>
 <div class="modal-body">
   <form>


     <div class="form-group">
           <p>Curso:</p>

           <select class="form-control" id="ListaCT">
           </select>
    </div>


    <div id="EditEst">
    </div>

     </form>
      </div>
 <div class="modal-footer">
   <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
   <a type="button" class="btn btn-primary" onclick="editarEstudiantes();" >Guardar</a>
 </div>
  </div>
   </div>
    </div>



<!--========================================Modal Editar Estudiante========================================-->


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
