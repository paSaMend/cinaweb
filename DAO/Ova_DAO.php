<?php



include_once ('../otros/conexion.php');
include_once ('../DTO/Ova.php');
class Ova_DAO {
    //put your code here
     private $bd;

    function __construct() {
       $this->bd = conexion::getInstance();
    }







    public function ListarOvaTema(Ova $Ova) {

        $idTema =$Ova->getidTema();

        try{
          $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $pdo->exec("SET CHARACTER SET utf8");

          $sql="SELECT * FROM Ova WHERE idTema = ?";
          $resultado=$pdo->prepare($sql);
          $resultado->execute(array($idTema));
          return $resultado;


        }catch(Exception $e){

          die('error: '. $e->getMessage());
        }

    }




    public function EliminarOva(Ova $Ova) {
        $idOva = $Ova->getidOva();
      try{
            $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET CHARACTER SET utf8");

            $sql="DELETE FROM Ova WHERE idOva = ?";
            $resultado=$pdo->prepare($sql);
            $resultado->execute(array($idOva));

            return $resultado;


  

      }catch(Exception $e){

        die('error: '. $e->getMessage());
      }




    }


    public function registrarOva(Ova $Ova) {

        $nombre = $Ova->gettematicaOva();
        $idTema = $Ova->getidTema();


        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");
              $sql="insert into Ova (tematicaOva,idTema) values(?,?)";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($nombre,$idTema));
              return $resultado;
            }catch(Exception $e){

              die('error: '. $e->getMessage());
              exit();
            }



    }


    public function getArray($result){
        return ($this->bd->getArray($result));
    }
   public function getObject($result){
        return ($this->bd->getObject($result));
    }


}
