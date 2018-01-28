<?php

class Ova
{

  var $idOva;
  var $tematicaOva;
  var $idTema;





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




	function gettematicaOva()
	{
		return $this->tematicaOva;
	}

	/**
	 *
	 * @param newVal
	 */
	function settematicaOva($newVal)
	{
		$this->tematicaOva = $newVal;
	}



  function getidOva()
  {
    return $this->idOva;
  }

  /**
   *
   * @param newVal
   */
  function setidOva($newVal)
  {
    $this->idOva = $newVal;
  }











}
?>
