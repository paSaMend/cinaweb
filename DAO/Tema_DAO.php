<?php



include_once ('../otros/conexion.php');
include_once ('../DTO/Tema.php');
class Tema_DAO {
    //put your code here
     private $bd;

    function __construct() {
       $this->bd = conexion::getInstance();
    }





    public function ListarTema(Tema $Tema) {

        $idDocente =$Tema->getidDocente();
        $cad="";
        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");

              $sql="SELECT nombreTema, idTema FROM Tema WHERE idDocente = ?";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($idDocente));
              while($res=$resultado->fetch(PDO::FETCH_ASSOC)){
                   $cad.="<option value='".$res['idTema']."'>".$res['nombreTema']."</option>";
              }

              return $cad;




        }catch(Exception $e){

          die('error: '. $e->getMessage());
        }

    }

    public function listarTemasPorPeriodos(Periodo $periodo) {

        $idUnidad =$periodo->getidUnidad();
        $cad="";
        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");

              $sql="SELECT * FROM tema WHERE idUnidad = ?";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($idUnidad));
              while($res=$resultado->fetch(PDO::FETCH_ASSOC)){
                   $cad.="<option value='".$res['idTema']."'>".$res['nombre']."</option>";
              }

              return $cad;




        }catch(Exception $e){

          die('error: '. $e->getMessage());
        }

    }



    public function registrarTema(Tema $Tema) {

        $nombre = $Tema->getnombre();
        $idUnidad = $Tema->getidUnidad();


        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");
              $sql="insert into Tema (nombre,idUnidad) values(?,?)";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($nombre,$idUnidad));
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
