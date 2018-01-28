<?php
include_once '../FACADE/Facade.php';
session_start();
if(isset($_SESSION["id"])){
$facade= Facade::getInstance();

$idEstudiante = $_POST['estudiante'];
$result=$facade->listarEstudianteEditar($idEstudiante);
echo ($result);
}
else{
	header("location:../index.html");
}
?>
