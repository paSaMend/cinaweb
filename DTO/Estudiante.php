<?php

class Estudiante
{

  var $idEstudiante;
	var $nombre;
  var $apellido;
	var $documentoIdentidad;
  var $nombreResponsable;
  var $telefonoResponsable;
  var $idCurso;
	var $correo;
	var $contrasena;


	function Estudiante()
	{
	}





	function getnombre()
	{
		return $this->nombre;
	}

	/**
	 *
	 * @param newVal
	 */
	function setnombre($newVal)
	{
		$this->nombre = $newVal;
	}




  function getapellido()
	{
		return $this->apellido;
	}

	/**
	 *
	 * @param newVal
	 */
	function setapellido($newVal)
	{
		$this->apellido = $newVal;
	}




	function getdocumentoIdentidad()
	{
		return $this->documentoIdentidad;
	}

	/**
	 *
	 * @param newVal
	 */
	function setdocumentoIdentidad($newVal)
	{
		$this->documentoIdentidad = $newVal;
	}

	function getcorreoElectronico()
	{
		return $this->correo;
	}

	/**
	 *
	 * @param newVal
	 */
	function setcorreoElectronico($newVal)
	{
		$this->correo = $newVal;
	}





	function getnombreResponsable()
	{
		return $this->nombreResponsable;
	}

	/**
	 *
	 * @param newVal
	 */
	function setnombreResponsable($newVal)
	{
		$this->nombreResponsable = $newVal;
	}


  function gettelefonoResponsable()
	{
		return $this->telefonoResponsable;
	}

	/**
	 *
	 * @param newVal
	 */
	function settelefonoResponsable($newVal)
	{
		$this->telefonoResponsable = $newVal;
	}

	function getidEstudiante()
	{
		return $this->idEstudiante;
	}

	/**
	 *
	 * @param newVal
	 */
	function setidEstudiante($newVal)
	{
		$this->idEstudiante = $newVal;
	}






   	function getcontrasena()
	{
		return $this->contrasena;
	}

	/**
	 *
	 * @param newVal
	 */
	function setcontrasena($newVal)
	{
		$this->contrasena = $newVal;
	}

  function getidCurso()
{
 return $this->idCurso;
}

/**
*
* @param newVal
*/
function setidCurso($newVal)
{
 $this->idCurso = $newVal;
}
}
?>
