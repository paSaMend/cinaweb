<?php



include_once ('../otros/conexion.php');
include_once ('../DTO/Curso.php');
class Curso_DAO {
    //put your code here
     private $bd;

    function __construct() {
       $this->bd = conexion::getInstance();
    }





    public function ListarCurso(Curso $Curso) {

        $idDocente =$Curso->getidDocente();
        $cad="";
        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");

              $sql="SELECT nombreCurso, idCurso, grado FROM curso WHERE idDocente = ?";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($idDocente));
              while($res=$resultado->fetch(PDO::FETCH_ASSOC)){
                   $cad.="<option value='".$res['idCurso']."'>".$res['nombreCurso'].'/'.$res['grado']."</option>";
              }

              return $cad;




        }catch(Exception $e){

          die('error: '. $e->getMessage());
        }

    }



    public function ListadoGeneral(Curso $Curso) {

        $idDocente =$Curso->getidDocente();

        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");

              $sql="select c.nombreCurso as curso,c.grupoCurso as grupo,p.numeroUnidad as periodo,p.tematica as tematica,t.nombre as subtema from curso c inner join periodo p on c.idCurso=p.idCurso inner join tema t on t.idUnidad=p.idUnidad where idDocente=?";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($idDocente));
              return $resultado;



        }catch(Exception $e){

          die('error: '. $e->getMessage());
        }

    }



    public function ListadoGeneralOVA(Curso $Curso) {

        $idDocente =$Curso->getidDocente();

        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");

              $sql="select c.nombreCurso as curso,p.numeroUnidad as unidad,p.tematica as tematica,t.nombre as subTema,o.tematicaOVA as OVA,o.idOva as idOva from curso c inner join periodo p on c.idCurso=p.idCurso inner join tema t on p.idUnidad = t.idUnidad inner join ova o on o.idTema = t.idTema where c.idDocente=?";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($idDocente));
              return $resultado;



        }catch(Exception $e){

          die('error: '. $e->getMessage());
        }

    }




    public function ListarCursos(Curso $Curso) {

        $idDocente =$Curso->getidDocente();
        $cad="";
        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");

              $sql="SELECT nombreCurso, idCurso FROM curso WHERE idDocente = ?";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($idDocente));

              return $resultado;




        }catch(Exception $e){

          die('error: '. $e->getMessage());
        }

    }






    public function registrarCurso(Curso $Curso) {

        $nombreCurso = $Curso->getnombreCurso();
        $grado = $Curso->getgrado();
        $grupoCurso = $Curso->getgrupoCurso();
        $idDocente= $Curso->getidDocente();

        try{
              $pdo = new PDO('mysql:host=localhost;dbname=cinaweb', "root", "");
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $pdo->exec("SET CHARACTER SET utf8");
              $sql="insert into curso (nombreCurso,grupoCurso,idDocente,grado) values(?,?,?,?)";
              $resultado=$pdo->prepare($sql);
              $resultado->execute(array($nombreCurso,$grupoCurso,$idDocente,$grado));
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
