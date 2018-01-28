<?php

include_once '../FACADE/Facade.php';

$idOVA = $_GET["idOva"];
$path = "../OVA/".$_GET["OVA"];
$facade= Facade::getInstance();
$result = $facade->eliminarOVA($idOVA,$path);
removeDirectory($path);

function removeDirectory($path)
{
    $path = rtrim( strval( $path ), '/' ) ;

    $d = dir( $path );

    if( ! $d )
        return false;

    while ( false !== ($current = $d->read()) )
    {
        if( $current === '.' || $current === '..')
            continue;

        $file = $d->path . '/' . $current;

        if( is_dir($file) )
            removeDirectory($file);

        if( is_file($file) )
            unlink($file);
    }

    rmdir( $d->path );
    $d->close();
    header ("location: ../crudOVA.php");
    return true;
}



 ?>
