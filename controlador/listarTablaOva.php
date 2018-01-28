<?php
include_once '../FACADE/Facade.php';
session_start();
if(isset($_SESSION["id"])){
$idusuario= $_SESSION['id'];


$facade= Facade::getInstance();
$result=$facade->OvaTabla($idusuario);
	echo '{"data":['.$result.']}';
}
	else{
		header("location:../index.html");
	}
?>
