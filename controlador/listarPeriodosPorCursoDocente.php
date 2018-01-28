<?php
include_once '../FACADE/Facade.php';
session_start();
$facade= Facade::getInstance();
$result=$facade->listarPeriodosPorCursoDocente($_POST['idCurso']);

echo $result;
?>
