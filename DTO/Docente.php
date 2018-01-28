<?php

class Docente
{

  var $idDocente;
	var $nombre;
  var $apellido;
	var $cedula;
  var $telefono;
  var $direccion;
	var $correo;
	var $contrasena;


	function Docente()
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




	function getcedula()
	{
		return $this->cedula;
	}

	/**
	 *
	 * @param newVal
	 */
	function setcedula($newVal)
	{
		$this->cedula = $newVal;
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





	function gettelefono()
	{
		return $this->telefono;
	}

	/**
	 *
	 * @param newVal
	 */
	function settelefono($newVal)
	{
		$this->telefono = $newVal;
	}


  function getdireccion()
	{
		return $this->direccion;
	}

	/**
	 *
	 * @param newVal
	 */
	function setdireccion($newVal)
	{
		$this->direccion = $newVal;
	}

	function getidDocente()
	{
		return $this->idDocente;
	}

	/**
	 *
	 * @param newVal
	 */
	function setidDocente($newVal)
	{
		$this->idDocente = $newVal;
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
}
?>
