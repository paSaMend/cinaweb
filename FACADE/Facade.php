<?php

include_once '../NEGOCIO/OpDocente.php';
class Facade
{

	private $OpDocente;
	static $_instance;

	function __construct() {
       $this->OpDocente =new OpDocente();
   }

   private function __clone(){ }

   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }



	 	function validarLogin($usuario,$password,$tipo){
         return $this->OpDocente->validarLogin($usuario,$password,$tipo);
		}

		function registrarCurso($nombre,$grado,$grupo,$idUsuario)
		{
			return $this->OpDocente->registrarCurso($nombre,$grado,$grupo,$idUsuario);
		}


		function registrarEstudiante($curso,$nombre,$apellido,$di,$nombreR,$telefonoR,$password,$correo)
		{
			return $this->OpDocente->registrarEstudiante($curso,$nombre,$apellido,$di,$nombreR,$telefonoR,$password,$correo);
		}

		function editarEstudiante($curso,$nombre,$apellido,$di,$nombreR,$telefonoR,$password,$correo,$idEstudiante)
		{
			return $this->OpDocente->editarEstudiante($curso,$nombre,$apellido,$di,$nombreR,$telefonoR,$password,$correo,$idEstudiante);
		}



		function listarEstudianteEditar($idEstudiante)
		{
			return $this->OpDocente->listarEstudianteEditar($idEstudiante);
		}


		function listarEstudiantesTabla($idusuario){

			   return $this->OpDocente->listarEstudiantesTabla($idusuario);
		}



		function listadoGeneral($idusuario){

			   return $this->OpDocente->listadoGeneral($idusuario);
		}



		function eliminarEstudiante($idEstudiante){

				return $this->OpDocente->eliminarEstudiante($idEstudiante);
		}



		function registrarTema($periodo,$nombre)
		{
			return $this->OpDocente->registrarTema($periodo,$nombre);
		}

		function registrarOva($curso,$periodo,$tema,$nombre,$zip)
		{
			return $this->OpDocente->registrarOva($curso,$periodo,$tema,$nombre,$zip);
		}



		function listarOva($curso,$periodo,$tema)
		{
			return $this->OpDocente->listarOva($curso,$periodo,$tema);
		}







		function registrarPeriodo($idCurso,$unidad,$tematica,$dba,$estandares)
		{
			return $this->OpDocente->registrarPeriodo($idCurso,$unidad,$tematica,$dba,$estandares);
		}



		function listarPeriodosPorCursoDocente($idUsuario){
         return $this->OpDocente->listarPeriodosPorCursoDocente($idUsuario);
    }



		function listarTemasPorPeriodos($idPeriodo){
         return $this->OpDocente->listarTemasPorPeriodos($idPeriodo);
    }

		function eliminarOVA($idOVA,$ruta){
         return $this->OpDocente->eliminarOVA($idOVA,$ruta);
    }




		function OvaTabla($idusuario){
         return $this->OpDocente->OvaTabla($idusuario);
    }







		function listarCursos($idUsuario){
			   return $this->OpDocente->listarCursos($idUsuario);
		}

  }//finalizar la clase
?>
