<?php



include_once ('../otros/conexion.php');
include_once ('../DTO/Estudiante.php');
class Estudiante_DAO {
    //put your code here
     private $bd;

    function __construct() {
       $this->bd = conexion::getInstance();
    }


      public function Login(Estudiante $estudiante) {

        $correo = $estudiante->getcorreoElectronico();
        $contrasena = $estudiante->getcontrasena();
        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");
              try{
              $sql="select c.nombreCurso as curso,c.grupoCurso as grupo,c.grado as grado, e.nombre as estudiante,e.idEstudiante as idEstudiante, e.idCurso as idCurso from estudiante e inner join curso c on e.idCurso=c.idCurso WHERE correoElectronico = ? AND contrasena = ?";
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


    public function registrarEstudiante(Estudiante $Estudiante) {

        $curso = $Estudiante->getidCurso();
        $nombre = $Estudiante->getnombre();
        $apellido = $Estudiante->getapellido();
        $di = $Estudiante->getdocumentoIdentidad();
        $nombreR = $Estudiante->getnombreResponsable();
        $telefonoR = $Estudiante->gettelefonoResponsable();
        $password = $Estudiante->getcontrasena();
        $correo = $Estudiante->getcorreoElectronico();


        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");
              $sql="insert into Estudiante (nombre,apellido,documentoIdentidad,nombreResponsable,telefonoResponsable,contrasena,idCurso,correoElectronico) values(?,?,?,?,?,md5(?),?,?)";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($nombre,$apellido,$di,$nombreR,$telefonoR,$password,$curso,$correo));
              return $resultado;
            }catch(Exception $e){

              die('error: '. $e->getMessage());
              exit();
            }



    }



    public function editarEstudiante(Estudiante $Estudiante) {
        $idEstudiante = $Estudiante->getidEstudiante();
        $curso = $Estudiante->getidCurso();
        $nombre = $Estudiante->getnombre();
        $apellido = $Estudiante->getapellido();
        $di = $Estudiante->getdocumentoIdentidad();
        $nombreR = $Estudiante->getnombreResponsable();
        $telefonoR = $Estudiante->gettelefonoResponsable();
        $password = $Estudiante->getcontrasena();
        $correo = $Estudiante->getcorreoElectronico();


        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");
              $sql="update estudiante set nombre= ?, apellido= ?, documentoIdentidad= ?, nombreResponsable= ?, telefonoResponsable= ?, contrasena= ?, idCurso= ?,correoElectronico= ? where idEstudiante= ?";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($nombre,$apellido,$di,$nombreR,$telefonoR,$password,$curso,$correo,$idEstudiante));
              return $resultado;
            }catch(Exception $e){

              die('error: '. $e->getMessage());
              exit();
            }



    }







    public function ListarEstudiantes($idCurso) {



        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");

              $sql="SELECT * FROM estudiante WHERE idCurso = ?";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($idCurso));

              return $resultado;




        }catch(Exception $e){

          die('error: '. $e->getMessage());
        }

    }



    public function EliminarEstudiante(Estudiante $Estudiante) {
        $idEstudiante = $Estudiante->getidEstudiante();
      try{
            $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET CHARACTER SET utf8");

            $sql="DELETE FROM estudiante WHERE idEstudiante = ?";
            $resultado=$pdo->prepare($sql);
            $resultado->execute(array($idEstudiante));

            return $resultado;




      }catch(Exception $e){

        die('error: '. $e->getMessage());
      }




    }


    public function ListarEstudianteE(Estudiante $Estudiante) {

              $idEstudiante=$Estudiante->getidEstudiante();
              try{
                    $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $pdo->exec("SET CHARACTER SET utf8");

                    $sql="SELECT * FROM estudiante WHERE idEstudiante = ?";
                    $resultado=$pdo->prepare($sql);
                    $resultado->execute(array($idEstudiante));

                    return $resultado;




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
