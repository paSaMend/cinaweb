<?php
include_once '../FACADE/Facade.php';
session_start();
if(isset($_SESSION["id"])){
$idCurso=$_POST['idCurso'];
$unidad=$_POST['unidad'];
$tematica=$_POST['tematica'];
$dba=$_POST['dba'];
$estandares=$_POST['estandares'];

$facade= Facade::getInstance();
$result=$facade->registrarPeriodo($idCurso,$unidad,$tematica,$dba,$estandares);
echo $result;
}
else{
	header("location:../index.html");
}
?>
