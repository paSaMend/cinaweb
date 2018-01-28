<?php
include_once '../FACADE/Facade.php';
session_start();
if(isset($_SESSION["id"])){
$curso=$_POST['curso'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$di=$_POST['di'];
$nombreR=$_POST['nombreR'];
$telefonoR=$_POST['telefonoR'];
$password=$_POST['password'];
$correo=$_POST['correo'];
$facade= Facade::getInstance();
$result=$facade->registrarEstudiante($curso,$nombre,$apellido,$di,$nombreR,$telefonoR,$password,$correo);
echo $result;
}
else{
	header("location:../index.html");
}
?>
