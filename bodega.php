<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="design\style.css">

    <title>Document</title>

</head>
<body background="img\new-fondo1lateral.jpg">

    <?php

        include("Basedatos.php");

        //. Crear objeto clase BD
        $transaccion=new Basedatos();

        //2. crear la conslta
        $consultaSQL="SELECT codigo, nombre, marca, precio, descripcion, imagen FROM productos WHERE 1";

        //3. utilizar el metodo consultar datos 
        $productos=$transaccion->consultarDatos($consultaSQL);

       

    ?>

   <div id="container" style="color: #2cc297;">

        <div id="navbar">
            <div class="row" >
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="admin.php" style="color: #2cc297;">Manage your store software</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="admin.php"style="color: #2cc297;">Registrar</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="bodega.php"style="color: #2cc297;">Bodega</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row" id="productos">
            <div class="col">
                <div>
                    <h1 style="color: #2cc297;">
                        Productos
                    </h1>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach($productos as $producto):?>

                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="<?php echo($producto["imagen"])?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($producto["nombre"])?></h5>
                            <p class="card-text"><?php echo($producto["descripcion"])?></p>
                            <a href="eliminarProductos.php?id=<?php echo($producto["codigo"])?>" class="btn btn-danger">Eliminar</a>  
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["codigo"])?>">
                                Editar
                            </button>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="editar<?php echo($producto["codigo"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edicion de producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                        <form action="editarProductos.php?id=<?php echo($producto["codigo"])?>" method="POST">
                                            <div class="form-group">
                                                <label>Nombre:</label>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion:</label>                                            
                                                <textarea class="form-control" name="descripcionEditar" id="exampleFormControlTextarea1" rows="3"><?php echo($producto["descripcion"])?></textarea>
                                            </div>                                        
                                            <button type="submit" name="botonEditar" class="btn btn-info">Editar</button>
                                        </form>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    
                </div>
            <?php endforeach?>
        </div>
        <footer id="footerbodega">
            <div class="row">
                <div class="col">
                <h1>
                Contact us
                </h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur accusantium nihil provident quam optio enim assumenda ex beatae praesentium porro voluptatum deleniti ad, mollitia modi, voluptatem sit ipsam cupiditate iste.

                </div>
                <div class="col">
                    <h1>Visit our social networks</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, magni! Fugiat deserunt repudiandae dolor beatae nam quae qui in illum nisi omnis vel quasi hic voluptatibus quod, amet, sit tempore.


                </div>
                <div class="col">
                    <h1>
                        Enjoy the best quality and explore our other products

                    </h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aliquam obcaecati velit, vitae, laborum iste illo deleniti ducimus unde fuga est veritatis iusto doloribus? Tempora deleniti dignissimos rerum esse suscipit?

                </div>
            </div>
        </footer>
    </div> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>