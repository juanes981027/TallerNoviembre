<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="design\style.css">
    
    <title>Administracion</title>
</head>
<body background="img\new-fondo1lateral.jpg">

    <div id="container" >
        <div id="navbar">
            <div class="row" >
                <div class="col">
                    <nav class="navbar navbar-expand-sm navbar-light">
                        <a class="navbar-brand" href="admin.php" style="color: #2cc297;">Manage your store software</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="admin.php" style="color: #2cc297;">Registrar <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="bodega.php" style="color: #2cc297;">Bodega</a>
                            </li>
                            
                            
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <a class="nav-link" href="#" style="color: #2cc297;">Register</a>
                        </div>  
                    </div>
                    <div class="col">
                        <div>
                            <a class="nav-link" href="#" style="color: #2cc297;">Log in</a>
                        </div> 
                            
                    </div>
                </div>
                
            </div>
        </div>

        
        <div class="mx-auto" style="width: 60%" id="form">
            
            <div class="row" >
                <div class="col align-self-center">
                    <div>
                        <h1 id="formtitle" style="color:  #2cc297;">
                            Administracion de productos
                        </h1>
                    </div>
                </div>
                
                <div class="col">

                    <div >

                        <form action="agregarProductos.php" method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" id="nombreProducto" name="nombre" placeholder="Nombre del producto">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="marcaProducto" name="marca" placeholder="Marca del producto" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <input type="number" class="form-control" id="precioProducto" name="precio" placeholder="Precio del producto" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="imagen" placeholder="URL de la foto" >
                            </div>

                            <div class="form-group"></div>
                                <textarea name="descripcion" id="" cols="60" rows="4" placeholder="Descripcion del producto"></textarea>
                            </div>

                            
                            <button type="submit" class="btn btn-primary" name="boton">Registrar</button>
                        </form>
            
                    </div>

                </div>
            </div>
            
        </div>
        
        <div style="color: #2cc297;" id="footeradmin">
            <div class="row" >
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
        </div>
    </div>
    
</body>
</html>