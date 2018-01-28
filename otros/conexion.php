<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion2
 *
 * @author pablo
 */
class conexion {

//    private $servidor = "localhost";
//    private $usuario = "<r></r>oot";
//    private $constrasena = "";
//    private $bd = "ufps_85";
//
  //  private $servidor = "localhost";
  //  private $usuario = "fertilcacao";
  //  private $constrasena ="12345";
  //  private $bd ="ayd";

   private $servidor = "localhost";
   private $usuario = "root";
   private $constrasena ="";
   private $bd ="cinaweb";

//
//    private $servidor = "sandbox2.ufps.edu.co";
//    private $usuario = "ufps_27";
//    private $constrasena = "ufps_er";
//    private $bd = "ufps_27";
//


//    private $servidor = "localhost";
//    private $usuario = "root";
//    private $constrasena = "";
//    private $bd = "ufps_27";
//
////    private $conexion = "";
//
 //   private $servidor = "localhost"; //"localhost o 161.18.233.43";
//    private $usuario = "root";//"root o certiret
 //   private $constrasena = "Soporte";
 //  private $bd = "inmobiliariaCelisBD";
//
//
//
//    private $servidor = "localhost"; //"localhost o 161.18.233.43";
//    private $usuario = "root";//"root o certiret
//    private $constrasena = "";
//    private $bd = "gymbd";
//    gymbdgymbd


//
//    private $servidor = "localhost";
//    private $usuario = "sejib_sejib";
//    private $constrasena = "manuel620316";
//    private $bd = "sejib_sejib";
//

    private $conexion;
    static $_instance;

    function __construct() {
        $this->conection();
    }


    /**
     * Metodo para realizar la conexión a la BD
     */
    public function conection() {
        if ($this->conexion == null || $this->conexion == "") {

                $this->conexion = new mysqli($this->servidor, $this->usuario, $this->constrasena, $this->bd);
                /* comprobar la conexión */
                if ($this->conexion->connect_errno) {
                    printf("Falló la conexión: %s\n", $this->conexion->connect_error);
                    exit();
                }

        }
        else {
            if (!mysqli_ping($this->conexion)) {
                $this->conexion=null;
                $this->conection();
            }
        }
    }

    private function __clone(){ }



   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }

    /**
     * Metodo para ejecutar la Consulta SQL
     * @param type $consulta consulta a realizar
     * @return type Devuelve el contenido de la consulta en caso de estar bien,
     * de lo contrario mostrara el error correspondiente
     */
    public function ejecutarConsultaSQL($consulta) {
          if (!mysqli_ping($this->conexion)) {
                $this->conexion=null;
                $this->conection();
            }
        $result = mysqli_query($this->conexion, $consulta);
        if ($result === FALSE) {
            die(mysqli_error($this->conexion));
            return FALSE;
        }

        return $result;
    }

    /**
     * Metodo para consultar datos y devolver en Arrat
     * @param type $result datos de consulta
     * @return type array
     */
    public function getArray($result) {
        return mysqli_fetch_array($result);
    }

    public function getObject($result) {
        return mysqli_fetch_object($result);
    }

    public function getCantidadFilas($result) {
        return mysqli_num_rows($result);
    }



    public function desconnetar() {
        mysqli_close($this->conexion);
    }

    public function GetIdInsertado() {
        mysql_insert_id();
    }
}
