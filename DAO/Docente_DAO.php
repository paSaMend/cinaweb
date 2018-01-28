<?php



include_once ('../otros/conexion.php');
include_once ('../DTO/Docente.php');
class Docente_DAO {
    //put your code here
     private $bd;

    function __construct() {
       $this->bd = conexion::getInstance();
    }


      public function Login(Docente $docente) {
        $correo = $docente->getcorreoElectronico();
        $contrasena = $docente->getcontrasena();
        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");
              try{
              $sql="SELECT * FROM Docente WHERE correoElectronico = ? AND contrasena = ?";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($correo,$contrasena));
              $res=$resultado->fetch(PDO::FETCH_ASSOC);

              return $res;
            }catch(Exception $e){
              echo "errores en la base de datos" .$e->getMessage();
            }



        }catch(Exception $e){

          die('error: '. $e->getMessage());
        }







    }


    public function getArray($result){
        return ($this->bd->getArray($result));
    }
   public function getObject($result){
        return ($this->bd->getObject($result));
    }


}
