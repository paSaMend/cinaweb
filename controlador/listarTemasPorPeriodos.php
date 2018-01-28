<?php
include_once '../FACADE/Facade.php';
session_start();

$facade= Facade::getInstance();
$result=$facade->listarTemasPorPeriodos($_POST['idPeriodo']);

echo $result;


?>
