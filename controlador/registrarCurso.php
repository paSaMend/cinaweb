<?php
include_once '../FACADE/Facade.php';
session_start();
if(isset($_SESSION["id"])){
$nombre=$_POST['nombre'];
$grado=$_POST['grado'];
$grupo=$_POST['grupo'];
$idUsuario= $_SESSION['id'];
$facade= Facade::getInstance();
$result=$facade->registrarCurso($nombre,$grado,$grupo,$idUsuario);
echo $result;
}
else{
	header("location:../index.html");
}

?>
