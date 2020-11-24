<?php

include("Basedatos.php");

if(isset($_POST["boton"]))
{

    //1. Recibir los datos
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $imagen=$_POST["imagen"];
    $descripcion=$_POST["descripcion"];
    
    

    $transaccion=new Basedatos();

    

    //3. Crear una consulta SQL para agregar datos
    $consultaSQL="INSERT INTO productos(nombre, marca, precio, imagen, descripcion) VALUES ('$nombre','$marca','$precio','$imagen','$descripcion')";

    //4. Utilizar metodo agregarDatos();
    $transaccion->agregarDatos($consultaSQL);

    header("location:bodega.php");
   
}



?>