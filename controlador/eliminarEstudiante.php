<?php

include_once '../FACADE/Facade.php';

$idEstudiante = $_GET["id"];
$facade= Facade::getInstance();
$result = $facade->eliminarEstudiante($idEstudiante);

header ("location: ../AdministrarEstudiante.php");


 ?>
