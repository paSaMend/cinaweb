<?php
include_once '../FACADE/Facade.php';
session_start();

 $usuario=$_POST['correo'];
 $password= md5($_POST['password']);
 $tipo=$_POST['tipo'];

$facade= Facade::getInstance();
$result=$facade->validarLogin($usuario, $password, $tipo);

if($result!=false){
     switch ($tipo) {
            case 1:
         $_SESSION['Docente'] =$result['nombre'];
         $_SESSION['rol'] = 'Docente';
         $_SESSION['id'] = $result['idDocente'];

             echo '<script type="text/javascript">
        window.location="../inicioDocente.php"
        </script>';
                break;

            case 2:
        $_SESSION['Estudiante'] =$result['estudiante'];
        $_SESSION['rol'] = 'Estudiante';
        $_SESSION['idE'] = $result['idEstudiante'];
        $_SESSION['idCurso'] = $result['idCurso'];
        $_SESSION['curso'] = $result['curso'];
        $_SESSION['grupo'] = $result['grupo'];
        $_SESSION['grado'] = $result['grado'];
                 echo '<script type="text/javascript">
        window.location="../inicioEstudiante.php"
        </script>';
                  break;


        }

}
else {
	header("location:../inicioSesion.php");


}
?>
