<?php

class Curso
{

  var $idCurso;
  var $nombreCurso;
  var $grado;
  var $grupoCurso;
  var $idDocente;




	function Curso()
	{
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




  function getnombreCurso()
	{
		return $this->nombreCurso;
	}

	/**
	 *
	 * @param newVal
	 */
	function setnombreCurso($newVal)
	{
		$this->nombreCurso = $newVal;
	}



  function getgrado()
	{
		return $this->grado;
	}

	/**
	 *
	 * @param newVal
	 */
	function setgrado($newVal)
	{
		$this->grado = $newVal;
	}




	function getgrupoCurso()
	{
		return $this->grupoCurso;
	}

	/**
	 *
	 * @param newVal
	 */
	function setgrupoCurso($newVal)
	{
		$this->grupoCurso = $newVal;
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







}
?>
