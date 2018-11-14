<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/master1(MOD).css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
    <main>
        <section>
            <div class="conteiner-flex">
                <form class="form form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="reg-form">
                        <fieldset>
                            <h2>Cargá los Productos</h2>
                            <hr>
                            <br>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="nombre">Nombre:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="nombre" value="" placeholder=" Ingrese el nombre del Producto *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="precio">Precio:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="precio" value="" placeholder=" Ingrese el precio del Producto *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="stcok">Stock:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="stock" value="" placeholder=" Ingrese el stock del Producto *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="marca">Marca:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="marca" placeholder=" Ingrese la marca del Producto *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="categoria">Categoría del Producto:</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="categoria">
                                        <option value="1">Indumentaria</option>
                                        <option value="2">Deco-Pet</option>
                                        <option value="3">Juguetes</option>
                                        <option value="4">Tech</option>
                                        <option value="5">Alimentos</option>
                                        <option value="6">Salud e Higiene</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                    <label class="control-label col-md-2" for="foto">Foto del Producto</label>
                                <div class="col-md-10">
                                    <input type="file" name="foto">
                                    <?php if(isset($errores['foto'])) :?>
                                <div class="alert"><p><strong><?= $errores['foto'] ?></strong></p></div>
                                <?php endif; ?>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-auto">
                                    <label class="control-label" for="descripcion">Descripción del Producto</label>
                                </div>
                                <br>
                                <div class="col-md-9">
                                    <textarea name="descripcion" class="form-control"  placeholder="Ingrese la Descripción del Producto"></textarea>
                                </div>
                            </div>
                            <br>
                            <div >
                                <hr>
                                <br>
                                <div class="conteiner-flex col-md-12">
                                <button class="btn form-btn" type="submit">ENVIAR</button>
                                
                                <button class="btn form-btn" type="reset">BORRAR</button>
                                </div>
                            </div>       
                        </fieldset>
                    </div> 
                </form>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>