<?php

class Basedatos
{
    public $usuarioBD="root";
    public $passwordBD="";

    public function __construct()
    {
        
    }

    public function conectarBD()
    {
        try
        {
            $datosBD="mysql:host=localhost;dbname=tallernoviembre";

            $conexionBD=new PDO($datosBD,$this->usuarioBD,$this->passwordBD);

            return($conexionBD);
            
        }
        catch(PDOException $error)
        {
            echo($error->getMessage());
            
        }

    }

    public function agregarDatos($consultaSQL)
    {

        //1. Se debe establecer una conexion a BD
        $conexionBD=$this->conectarBD();

        //2. Preparar la consulta para insertar datos
        $consultaAgregarDatos=$conexionBD->prepare($consultaSQL);
        //3. Ejecutar la consulta
        
        $resultado=$consultaAgregarDatos->execute();
        //4. Validar la operacion
        if($resultado)
        {
            echo("Exito insertando los datos");
        }
        else
        {
            echo("Error insertando los datos");
        }

        



    }

    public function consultarDatos($consultaSQL)
    {
        //1. Se debe establecer una conexion a BD
        $conexionBD=$this->conectarBD();

        //2. Preparar la consulta para insertar datos
        $consultaBuscarDatos=$conexionBD->prepare($consultaSQL);

        //3. Indicar el metodo para traer los datos
        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);
        //4. sE EJECUTA LA CONSULTA
        $resultado=$consultaBuscarDatos->execute();

        //5. Retorne los datos consultados
        return ($consultaBuscarDatos->fetchAll());

    }


    public function eliminarDatos($consultaSQL)
    {
        //1. Se debe establecer una conexion a BD
        $conexionBD=$this->conectarBD();

        //2. Preparar la consulta para insertar datos
        $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);
        //3. Ejecutar la consulta
        
        $resultado=$consultaEliminarDatos->execute();
        //4. Validar la operacion
        if($resultado)
        {
            echo("Exito eliminando los datos");
        }
        else
        {
            echo("Error eliminando los datos");
        }

    }

    public function editarDatos($consultaSQL)
    {

        //1. Se debe establecer una conexion a BD
        $conexionBD=$this->conectarBD();

        //2. Preparar la consulta para insertar datos
        $consultaEditarDatos=$conexionBD->prepare($consultaSQL);
        //3. Ejecutar la consulta
        
        $resultado=$consultaEditarDatos->execute();
        //4. Validar la operacion
        if($resultado)
        {
            echo("Exito editando los datos");
        }
        else
        {
            echo("Error editando los datos");
        }

        



    }


}

?>