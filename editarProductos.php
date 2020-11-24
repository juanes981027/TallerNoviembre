<?php

include("Basedatos.php");

if(isset($_POST["botonEditar"]))
{

    $nombre=$_POST["nombreEditar"];
    $descripcion=$_POST["descripcionEditar"];

    

    $id=$_GET["id"];

    
    $transaccion=new Basedatos();

    $consultaSQL="UPDATE productos SET nombre='$nombre',descripcion='$descripcion', WHERE codigo='$id'";

    $transaccion->editarDatos($consultaSQL);

    header("location:bodega.php");

   

    
}

?>