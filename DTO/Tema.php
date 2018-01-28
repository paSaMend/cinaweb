<?php

class Tema
{

  var $idTema;
  var $nombre;
  var $idUnidad;





	function Tema()
	{
	}


  function getidTema()
	{
		return $this->idTema;
	}

	/**
	 *
	 * @param newVal
	 */
	function setidTema($newVal)
	{
		$this->idTema = $newVal;
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








}
?>
