<?php 

//1. Incluir el archivo BaseDatos
include("Basedatos.php");

//2. Reciba el id a eliminar

$id=$_GET["id"];



//3. Sacar copia de la clase

$transaccion = new Basedatos();

// //4. Crear una consulta SQL para eliminar datos

$consultaSQL="DELETE FROM productos WHERE codigo='$id'";

// //5. Ejecutar el metodo eliminarDatos

$transaccion->eliminarDatos($consultaSQL);

header("location:bodega.php");


?>