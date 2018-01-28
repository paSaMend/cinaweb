<?php
include_once '../FACADE/Facade.php';
session_start();
 if(isset($_SESSION["id"])){
$curso=$_POST['ListaCT'];
$periodo=$_POST['ListaP'];
$tema=$_POST['ListaT'];
$nombre2=$_POST['nombreO'];
$zip="hola";
$facade= Facade::getInstance();
$result=$facade->registrarOva($curso,$periodo,$tema,$nombre2,$zip);
if($result==="Registro Exitoso"){
if ($_FILES["zip_file"]["name"])
{
    //obtenemos datos de nuestro ZIP
    $nombre = $_FILES["zip_file"]["name"];
    $ruta = $_FILES["zip_file"]["tmp_name"];
    $tipo = $_FILES["zip_file"]["type"];


    // --> AQUÍ INCLUIR ALGUNA DE LAS TRES FUNCIONALIDADES <--
    $zip = new ZipArchive;
   //en la función open se le pasa la ruta de nuestro archivo (alojada en carpeta temporal)
   if ($zip->open($ruta) === TRUE)
   {
     //función para extraer el ZIP, le pasamos la ruta donde queremos que nos descomprima
     $zip->extractTo('../OVA/'.$nombre2);
     $zip->close();
   }
   echo '<script>
   alert("El ova fue registrado correctamente");
   window.location.href="../AdministrarOva.php";
   </script>';

}
}
}
else{
	header("location:../index.html");
}



?>
