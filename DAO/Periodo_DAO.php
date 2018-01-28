<?php



include_once ('../otros/conexion.php');
include_once ('../DTO/Periodo.php');
class Periodo_DAO {
    //put your code here
     private $bd;

    function __construct() {
       $this->bd = conexion::getInstance();
    }





    public function ListarPeriodosPorCurso(Curso $curso) {

        $idCurso =$curso->getidCurso();
        $cad="";
        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");

              $sql="SELECT * FROM Periodo WHERE idCurso = ?";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($idCurso));
              while($res=$resultado->fetch(PDO::FETCH_ASSOC)){
                   $cad.="<option value='".$res['idUnidad']."'>".$res['numeroUnidad'].'-'.$res['Tematica']."</option>";
              }

              return $cad;




        }catch(Exception $e){

          die('error: '. $e->getMessage());
        }

    }





    public function registrarPeriodo(Periodo $Periodo) {

        $numeroUnidad = $Periodo->getnumeroUnidad();
        $tematica = $Periodo->gettematica();
        $idCurso = $Periodo->getidCurso();
        $dba = $Periodo->getDBA();
        $estandares= $Periodo->getestandares();
        $cad="";
        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");
              $sql="insert into Periodo (numeroUnidad,tematica,idCurso,DBA,Estandares) values(?,?,?,?,?)";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($numeroUnidad,$tematica,$idCurso,$dba,$estandares));
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
