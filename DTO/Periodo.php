<?php

class Periodo
{

  var $idUnidad;
	var $numeroUnidad;
  var $tematica;
  var $idCurso;
	var $DBA;
  var $estandares;



	function Periodo()
	{
	}


  function gettematica()
	{
		return $this->tematica;
	}

	/**
	 *
	 * @param newVal
	 */
	function settematica($newVal)
	{
		$this->tematica = $newVal;
	}




	function getidUnidad()
	{
		return $this->idUnidad;
	}

	/**
	 *
	 * @param newVal
	 */
	function setidUnidad($newVal)
	{
		$this->idUnidad = $newVal;
	}




  function getnumeroUnidad()
	{
		return $this->numeroUnidad;
	}

	/**
	 *
	 * @param newVal
	 */
	function setnumeroUnidad($newVal)
	{
		$this->numeroUnidad = $newVal;
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

	function getDBA()
	{
		return $this->DBA;
	}

	/**
	 *
	 * @param newVal
	 */
	function setDBA($newVal)
	{
		$this->DBA = $newVal;
	}





	function getestandares()
	{
		return $this->estandares;
	}

	/**
	 *
	 * @param newVal
	 */
	function setestandares($newVal)
	{
		$this->estandares = $newVal;
	}



}
?>
