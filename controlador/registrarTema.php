<?php
include_once '../FACADE/Facade.php';
session_start();
if(isset($_SESSION["id"])){

$periodo=$_POST['periodo'];
$nombre=$_POST['nombre'];
$facade= Facade::getInstance();
$result=$facade->registrarTema($periodo,$nombre);
echo $result;
}
else{
	header("location:../index.html");
}
?>
