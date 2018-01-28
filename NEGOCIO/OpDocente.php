<?php


include_once '../DTO/Docente.php';
include_once '../DAO/Docente_DAO.php';
include_once '../DTO/Estudiante.php';
include_once '../DAO/Estudiante_DAO.php';
include_once '../DTO/Curso.php';
include_once '../DAO/Curso_DAO.php';
include_once '../DTO/Periodo.php';
include_once '../DAO/Periodo_DAO.php';
include_once '../DTO/Tema.php';
include_once '../DAO/Tema_DAO.php';
include_once '../DTO/Ova.php';
include_once '../DAO/Ova_DAO.php';

class OpDocente{
function validarLogin($usuario,$password,$tipo)
{
  if ($tipo=="1") {
      $docente=new Docente();
      $docenteDAO=new Docente_DAO();
      $docente->setcorreoElectronico($usuario);
      $docente->setcontrasena($password);
      $resultado=$docenteDAO->Login($docente);
      if($resultado){
          return $resultado;
      }
      else {
          return false;
      }

  }

   if ($tipo=="2") {
      $estudiante = new Estudiante();
      $estudianteDAO=new Estudiante_DAO();
      $estudiante->setcorreoElectronico($usuario);
      $estudiante->setcontrasena($password);
      $resultado=$estudianteDAO->Login($estudiante);
      if($resultado){
          return $resultado;
      }
      else {
          return false;
      }

  }
}


function registrarCurso($nombre,$grado,$grupo,$idUsuario)
{
  $curso = new Curso();
  $cursoDAO = new Curso_DAO();
  $curso->setnombreCurso($nombre);
  $curso->setgrado($grado);
  $curso->setgrupoCurso($grupo);
  $curso->setidDocente($idUsuario);
  $result=$cursoDAO->registrarCurso($curso);

  if($result!=true){
      echo 'Error al registrar Curso';
  }
  else {
      echo 'Registro Exitoso';
  }
}


function registrarEstudiante($curso,$nombre,$apellido,$di,$nombreR,$telefonoR,$password,$correo)
{
  $estudiante = new Estudiante();
  $estudianteDAO = new Estudiante_DAO();
  $estudiante->setidCurso($curso);
  $estudiante->setnombre($nombre);
  $estudiante->setapellido($apellido);
  $estudiante->setdocumentoIdentidad($di);
  $estudiante->setnombreResponsable($nombreR);
  $estudiante->settelefonoResponsable($telefonoR);
  $estudiante->setcontrasena($password);
  $estudiante->setcorreoElectronico($correo);
  $result=$estudianteDAO->registrarEstudiante($estudiante);

  if($result!=true){
      echo 'Error al registrar estudiante';
  }
  else {
      echo 'Registro Exitoso';
  }
}


function editarEstudiante($curso,$nombre,$apellido,$di,$nombreR,$telefonoR,$password,$correo,$idEstudiante)
{
  $estudiante = new Estudiante();
  $estudianteDAO = new Estudiante_DAO();
  $estudiante->setidEstudiante($idEstudiante);
  $estudiante->setidCurso($curso);
  $estudiante->setnombre($nombre);
  $estudiante->setapellido($apellido);
  $estudiante->setdocumentoIdentidad($di);
  $estudiante->setnombreResponsable($nombreR);
  $estudiante->settelefonoResponsable($telefonoR);
  $estudiante->setcontrasena($password);
  $estudiante->setcorreoElectronico($correo);
  $result=$estudianteDAO->editarEstudiante($estudiante);

  if($result!=true){
      echo 'Error al editar Estudiante';
  }
  else {
      echo 'Estudiante editado';
  }
}






function listarEstudiantesTabla($idusuario)
{

      $curso=new Curso();
      $cursoDAO=new Curso_DAO();
      $curso->setidDocente($idusuario);
      $result=$cursoDAO->ListarCursos($curso);



      $tabla = "";
      while($cursos=$result->fetch(PDO::FETCH_ASSOC)){


        $estudianteDAO=new Estudiante_DAO();
        $resultado=$estudianteDAO->ListarEstudiantes($cursos['idCurso']);


      while($estudiantes=$resultado->fetch(PDO::FETCH_ASSOC))
      {

        if($cursos['idCurso']==$estudiantes['idCurso'])
        {
        $editar = '<a  data-id=\"'.$estudiantes['idEstudiante'].'\"\"type=\"button\" onclick=\"ListarEstudiantes('.$estudiantes['idEstudiante'].')\" data-toggle=\"modal\" data-target=\"#modalEEstudiante\" data-placement=\"top\" title=\"Editar\" class=\"editar btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
        $eliminar = '<a href=\"controlador/eliminarEstudiante.php?id='.$estudiantes['idEstudiante'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminar este estudiante?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

        $tabla.='{
              "Curso":"'.$cursos['nombreCurso'].'",
              "Nombre":"'.$estudiantes['nombre'].'",
              "Apellido":"'.$estudiantes['apellido'].'",
              "Documento":"'.$estudiantes['documentoIdentidad'].'",
              "Responsable":"'.$estudiantes['nombreResponsable'].'",
              "Telefono":"'.$estudiantes['telefonoResponsable'].'",
              "Correo":"'.$estudiantes['correoElectronico'].'",
              "Acciones":"'.$editar.$eliminar.'"
            },';
        }
      }

      }

            $tabla = substr($tabla,0, strlen($tabla) - 1);

            return $tabla;



}




function OvaTabla($idusuario)
{

  $curso=new Curso();
  $cursoDAO=new Curso_DAO();
  $curso->setidDocente($idusuario);
  $result=$cursoDAO->ListadoGeneralOVA($curso);
    $tabla = "";
    while($general=$result->fetch(PDO::FETCH_ASSOC))
    {

      $eliminar = '<a href=\"controlador/eliminarOVA.php?idOva='.$general['idOva'].'&'.'OVA='.$general['OVA'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminar esta ova?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

    $tabla.='{
          "Curso":"'.$general['curso'].'",
          "Periodo":"'.$general['unidad'].'",
          "Tema":"'.$general['tematica'].'",
          "subTema":"'.$general['subTema'].'",
          "OVA":"'.$general['OVA'].'",
          "Acciones":"'.$eliminar.'"
        },';
    }


        $tabla = substr($tabla,0, strlen($tabla) - 1);

        return $tabla;



}






function listadoGeneral($idusuario)
{

      $curso=new Curso();
      $cursoDAO=new Curso_DAO();
      $curso->setidDocente($idusuario);
      $result=$cursoDAO->ListadoGeneral($curso);
        $tabla = "";
        while($general=$result->fetch(PDO::FETCH_ASSOC))
        {

        $tabla.='{
              "Curso":"'.$general['curso'].'",
              "Grupo":"'.$general['grupo'].'",
              "PeriodoN":"'.$general['periodo'].'",
              "Tematica":"'.$general['tematica'].'",
              "SubTema":"'.$general['subtema'].'"
            },';
        }





            $tabla = substr($tabla,0, strlen($tabla) - 1);

            return $tabla;



}





function listarEstudianteEditar($idEstudiante)

{

      $cad="";

      $estudiante=new Estudiante();
      $estudianteDAO=new Estudiante_DAO();
      $estudiante->setidEstudiante($idEstudiante);
      $result=$estudianteDAO->listarEstudianteE($estudiante);
      $estudianteE=$result->fetch(PDO::FETCH_ASSOC);


      $cad.="




       <div class='form-group'>

                 <p>Nombre:</p>
                 <input type='hidden' class='form-control' id=idEst value=".$estudianteE['idEstudiante'].">
                 <input type='text' class='form-control' placeholder='Digite el/los nombre del estudiante' id='nombreE' value=".$estudianteE['nombre'].">
                  <span class='input-group-btn'></span>
        </div>

        <div class='form-group'>
                  <p>Apellido:</p>
                  <input type='text' class='form-control' placeholder='Digite el/los apellido del estudiante' id='apellidoE' value=".$estudianteE['apellido']." >
                   <span class='input-group-btn'></span>
         </div>

         <div class='form-group'>
                   <p>Documento de Identidad:</p>
                   <input type='text' class='form-control' placeholder='Digite el documentro de identidad del estudiante' id='diE' value=".$estudianteE['documentoIdentidad']." >
                    <span class='input-group-btn'></span>
          </div>

          <div class='form-group'>
                    <p>Nombre del Padre de Familia:</p>
                    <input type='text' class='form-control' id='nombreRE' placeholder='Digite el nombre del padre o persona responsable del estudiante' value=".$estudianteE['nombreResponsable']." >
                    <span class='input-group-btn'></span>
           </div>

         <div class='form-group'>
                   <p>Telefono Responsable:</p>
                   <input type='text' class='form-control' id='telefonoRE' placeholder='Digite el telefono de la pérsona responsable del estudiante' value=".$estudianteE['telefonoResponsable']." >
                   <span class='input-group-btn'></span>
          </div>

          <div class='form-group'>
                    <p>Contrasena:</p>
                    <input type='password' class='form-control' id='passwordE' placeholder='Digite la contrasena que desea asignarle al estudiante' value=".$estudianteE['contrasena']." >
                    <span class='input-group-btn'></span>
           </div>

           <div class='form-group'>
                     <p>Correo Electronico:</p>
                     <input type='email' class='form-control' id='correoE' placeholder='Digite el correo electronico asociado al estudiante' value=".$estudianteE['correoElectronico'].">
                     <span class='input-group-btn'></span>
            </div>
";


       return $cad;

}










function eliminarEstudiante($idEstudiante){
  $Estudiante = new Estudiante();
  $EstudianteDao = new Estudiante_DAO();
  $Estudiante->setidEstudiante($idEstudiante);
  $result = $EstudianteDao->eliminarEstudiante($Estudiante);
  echo "Estudiante eliminado";
}


function registrarTema($periodo,$nombre)
{
  $tema = new Tema();
  $temaDAO = new Tema_DAO();
  $tema->setnombre($nombre);
  $tema->setidUnidad($periodo);
  $result=$temaDAO->registrarTema($tema);

  if($result!=true){
      echo 'Error al registrar Tema';
  }
  else {
      echo 'Registro Exitoso';
  }
}



function registrarOva($curso,$periodo,$tema,$nombre,$zip)
{
  $ova = new Ova();
  $ovaDAO = new Ova_DAO();
  $resp=$this->crearFichero($nombre);

  $ova->setidTema($tema);
  $ova->settematicaOva($nombre);
  $result=$ovaDAO->registrarOva($ova);
  if($resp=="creado"){
  if($result!=true){
      return 'Error al registrar Tema';
  }
  else {
      return 'Registro Exitoso';
  }
}else{
  return 'El ova que intenta crear ya existe';
}
}


function crearFichero($nombre){
$carpeta=htmlspecialchars($nombre);
$ruta=htmlspecialchars("OVA/");
$directorio=$ruta.$carpeta;

if(!file_exists('../OVA/'.$carpeta)){
  $crear=mkdir('../OVA/'.$carpeta, 0777, true);
  return $msg="creado";

}else{
  return $msg ="nocreado";
}
}


function extraerZip($zip,$nombre){
  //comprobamos si se ha recibido el nombre del ZIP
  if ($_FILES[$zip]["name"])
  {
      //obtenemos datos de nuestro ZIP
      $nombre = $_FILES[$zip]["name"];
      $ruta = $_FILES[$zip]["tmp_name"];
      $tipo = $_FILES[$zip]["type"];


      // --> AQUÍ INCLUIR ALGUNA DE LAS TRES FUNCIONALIDADES <--
      $zip = new ZipArchive;
     //en la función open se le pasa la ruta de nuestro archivo (alojada en carpeta temporal)
     if ($zip->open($ruta) === TRUE)
     {
       //función para extraer el ZIP, le pasamos la ruta donde queremos que nos descomprima
       $zip->extractTo('../OVA/'.$nombre);
       $zip->close();
     }
  }
}




function eliminarOVA($idOVA,$ruta){
  $Ova = new Ova();
  $OvaDao = new Ova_DAO();
  $Ova->setidOva($idOVA);
  $result = $OvaDao->EliminarOva($Ova);
  echo "Ova eliminado";
}



  function listarOva($curso,$periodo,$tema)

  {

        $cad="";

        $ova=new Ova();
        $ovaDAO=new Ova_DAO();
        $ova->setidTema($tema);
        $result=$ovaDAO->listarOvaTema($ova);
        return $result;
  }












function registrarPeriodo($idCurso,$unidad,$tematica,$dba,$estandares)
{
  $periodo = new Periodo();
  $periodoDAO = new Periodo_DAO();
  $periodo->setidCurso($idCurso);
  $periodo->setnumeroUnidad($unidad);
  $periodo->settematica($tematica);
  $periodo->setDBA($dba);
  $periodo->setestandares($estandares);
  $result=$periodoDAO->registrarPeriodo($periodo);

  if($result!=true){
      echo 'Error al registrar periodo';
  }
  else {
      echo 'Registro Exitoso';
  }
}




function ListarCursos($idUsuario)
{
      $curso=new Curso();
      $cursoDAO=new Curso_DAO();
      $curso->setidDocente($idUsuario);
      $resultado=$cursoDAO->ListarCurso($curso);
      return $resultado;
}


function listarPeriodosPorCursoDocente($idCurso){
     return $this->listarPeriodosPorCurso($idCurso);
}


function listarPeriodosPorCurso($idCurso)
{
      $cad="";
      $curso=new Curso();
      $periodoDAO=new Periodo_DAO();
      $curso->setidCurso($idCurso);
      $resultado=$periodoDAO->ListarPeriodosPorCurso($curso);
      return $resultado;


}





function listarTemasPorPeriodos($idPeriodo)
{
      $cad="";
      $periodo=new Periodo();
      $temaDAO=new Tema_DAO();
      $periodo->setidUnidad($idPeriodo);
      $resultado=$temaDAO->listarTemasPorPeriodos($periodo);
      return $resultado;


}





}









?>
