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
              <img src="assets/img/curso.png" alt="IMG" class="img-responsive img-rounded">
              <div class="caption">
                <h3 class="text-center">Registrar Curso</h3>
                <p class="text-center"><a class="btn btn-primary" role="button" data-toggle="modal" data-target="#modalCurso">Registrar Curso</a></p>
              </div>
            </div>
        </article>

        <!--======================================== Articulo 2 ========================================-->
        <article class="col-xs-12 col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="assets/img/calendario.png" alt="IMG" class="img-responsive img-rounded">
              <div class="caption">
                <h3 class="text-center">Periodo</h3>
                <p class="text-center"><a class="btn btn-primary" role="button"  data-toggle="modal" data-target="#modalPeriodo">Registrar Periodo</a></p>
              </div>
            </div>
        </article>
        <!--======================================== Articulo 3 ========================================-->
        <article class="col-xs-12 col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="assets/img/agenda.png" alt="IMG" class="img-responsive img-rounded">
              <div class="caption">
                <h3 class="text-center">Temas</h3>
                  <p class="text-center"><a class="btn btn-primary" role="button" data-toggle="modal" data-target="#modalTema">Registrar Tema</a></p>         </div>
            </div>
        </article>
        </div>
      </div>
  </section>
</section>
</div>

  <!--========================================Fin Info========================================-->

  <!--========================================Tabla General========================================-->
  <div class="container" style="padding:0px;">
  <section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
    <section class="events-ins">
    <div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h2 class="text-center titles">Listado de cursos sus periodos y los temas de cada periodo</h2>
        <br>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <table id="tablageneral" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Curso</th>
                <th>Grupo</th>
                <th>PeriodoN</th>
                <th>Tematica</th>
                <th>SubTema</th>

            </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
            <tr>
              <th>Curso</th>
              <th>Grupo</th>
              <th>Periodo N</th>
              <th>Tematica</th>
              <th>SubTema</th>

            </tr>
            </tfoot>
        </table>
    </div>
  </div>
  </section>
  </section>
  </div>

  <!--========================================Fin Tabla General========================================-->

  <!--========================================Modal registrar Curso========================================-->

  <div class="modal fade" data-backdrop="static"  tabindex="-1" id="modalCurso" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
 <div class="modal-content">

   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
     <h4 class="modal-title" id="exampleModalLabel" style="color:black;">Registrar Curso</h4>
   </div>
   <div class="modal-body">
     <form>




        <div class="form-group">
                  <p>Nombre:</p>
                  <input type="text" class="form-control" id="nombre" placeholder="Digite el nombre que desea asignar al curso">
                   <span class="input-group-btn"></span>
         </div>

         <div class="form-group">
                   <p>Grupo:</p>
                   <select class="form-control" id="grado">
                      <option>primero</option>
                      <option>segundo</option>
                      <option>tercero</option>
                      <option>cuarto</option>
                      <option>quinto</option>
                   </select>
          </div>

         <div class="form-group">
                   <p>Grupo:</p>
                   <select class="form-control" id="grupo">
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
                      <option>D</option>
                      <option>E</option>
                      <option>F</option>
                   </select>
          </div>





       </form>
        </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
     <a type="button" class="btn btn-primary" onclick="registrarCurso();" >Guardar</a>
   </div>
    </div>
     </div>
      </div>

  <!--========================================Modal registrar Curso========================================-->







  <!--========================================Modal registrar Periodo========================================-->

  <div class="modal fade" data-backdrop="static" id="modalPeriodo"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
 <div class="modal-content">
  <script>setTimeout ("ListarCurso('<?php echo $_SESSION["id"] ?>')", 5);</script>
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
     <h4 class="modal-title" id="exampleModalLabel" style="color:black;">Registrar Periodo</h4>
   </div>
   <div class="modal-body">
     <form>
          <div class="form-group">
                <p>Curso:</p>

                <select class="form-control" id="ListaC">
                </select>
         </div>

         <div class="form-group">
                   <p>Unidad:</p>
                   <select class="form-control" id="unidad" required>
                      <option>I</option>
                      <option>II</option>
                      <option>III</option>
                      <option>VI</option>
                   </select>
          </div>


          <div class="form-group">
                    <p>Tematica General:</p>
                    <input type="text" class="form-control" placeholder="Digite la tematica a tratar durante el periodo" id="tematica" required>
                     <span class="input-group-btn"></span>
           </div>


          <div class="form-group">
                    <p>Derechos Basicos de Aprendizaje:</p>
                    <input type="text" class="form-control" placeholder="Digite los DBA separados por una coma EJ 1,2,3" id="DBA" required>
                     <span class="input-group-btn"></span>
           </div>


           <div class="form-group">
                     <p>Estandares:</p>
                     <input type="text" class="form-control" placeholder="Digite los estandares separados por una coma EJ 1,2,3" id="estandares" required>
                      <span class="input-group-btn"></span>
            </div>






       </form>
        </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
     <a type="button" class="btn btn-primary" onclick="registrarPeriodo();" >Guardar</a>
   </div>
    </div>
     </div>
      </div>

  <!--========================================Modal registrar Periodo========================================-->





  <!--========================================Modal registrar Tema========================================-->

  <div class="modal fade" data-backdrop="static"  tabindex="-1" id="modalTema" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
 <div class="modal-content">
   <script>setTimeout ("ListarCursoT('<?php echo $_SESSION["id"] ?>')", 5);</script>
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
     <h4 class="modal-title" id="exampleModalLabel" style="color:black;">Registrar Tema</h4>
   </div>
   <div class="modal-body">
     <form>

       <div class="form-group">
             <p>Curso:</p>

             <select class="form-control" id="ListaCT" data-live-search="true" onclick="listarPeriodosPorCursoDocente()">
             </select>
      </div>

      <div class="form-group">
            <p>Periodo:</p>

            <select class="form-control" id="ListaP">
            </select>
     </div>


        <div class="form-group">
                  <p>Nombre:</p>
                  <input type="text" class="form-control" id="nombreT"  placeholder="Digite el nombre del tema a impartir en el periodo seleccionado">
                   <span class="input-group-btn"></span>
       </div>







       </form>
        </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
     <a type="button" class="btn btn-primary" onclick="registrarTema();" >Guardar</a>
   </div>
    </div>
     </div>
      </div>

  <!--========================================Modal registrar Tema========================================-->


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
						<p class="text-center">Universidad Francisco De Paula Santander <br>Edificio Aula norte 4to piso</p>
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
