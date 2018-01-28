<?php
include_once '../FACADE/Facade.php';
session_start();
if(isset($_SESSION["id"])){
$facade= Facade::getInstance();
$result=$facade->listarCursos($_POST['id']);
echo $result;
}
else{
	header("location:../index.html");
}
?>
