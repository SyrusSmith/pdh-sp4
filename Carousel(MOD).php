<?php


?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOGO SHOP</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/master1(MOD).css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- NAVBAR -->
        <div>
            <!-- SAQUÉ bg-dark fixed-top del class name, y cambié navbar-expand-lg por md (Código en línea 4109 a 4149 de bootsrap.css) -->
            <nav class="navbar navbar-expand-md navbar-dark" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top">Dogo</a>
                    <div class="conteiner-flex1">
                        <div class="redes-top">
                            <div class="social-icon">
                                <a href="#">
                                    <img src="img/social-fb.svg" alt="Facebook">
                                </a>
                            </div>
                            <div class="social-icon">
                                <a href="#">
                                    <img src="img/social-ig.svg" alt="Instagram">
                                </a>
                            </div>
                            <div class="social-icon">
                                <a href="#">
                                    <img src="img/social-email.svg" alt="Email">
                                </a>
                            </div>
                        </div>
                    </div>
                
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#"><strong>Login</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#"><strong>Registro</strong></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- CAROUSEL -->
    <section>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/carousel-banner1.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="carousel-title">Título 1</h5>
                        <p>Texto 1</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carousel-banner2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="carousel-title">Título 2</h5>
                        <p>Texto 2</p>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carousel-banner3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="carousel-title">Título 3</h5>
                        <p>Texto 3</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- MAIN -->
    <main>
        <!-- CATEGORÍAS -->
        <section>
            <div class="conteiner-flex">
                <div class="row conteiner-fluid">
                    <article class="col-md-4 col-12">
                        <div class="caption">
                            <div class="item">
                                <a href="#">
                                    <h3>TEXTO 1</h3>
                                    <small>Descripción</small>
                                    <img src="img/almohadon_dogo.jpg" alt="Cama para perro">
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-4 col-12">
                        <div class="caption">
                            <div class="item">
                                <a href="#">
                                    <h3>TEXTO 2</h3>
                                    <small>Descripción</small>
                                    <img src="img/almohadon_dogo.jpg" alt="Cama para perro">
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-4 col-12">
                        <div class="caption">
                            <div class="item">
                                <a href="#">
                                    <h3>TEXTO 3</h3>
                                    <small>Descripción</small>
                                    <img src="img/almohadon_dogo.jpg" alt="Cama para perro">
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- FORM REGISTRO -->
        <section>
            <div class="conteiner-flex">
                <form class="form form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="reg-form">
                        <fieldset>
                            <h2> Creá tu cuenta con nosotros</h2>
                            <br>
                            <br>
                            <div class="form-group">
                                <div class="col-md-auto">
                                    <h4>
                                        <label class="control-label">Datos Personales</label>
                                        <small>* (campos obligatorios)</small>
                                    </h4>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="nombre">Nombre:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="nombre" value="" placeholder=" Nombre *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="apellido">Apellido:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="apellido" value="" placeholder=" Apellido *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="email">e-Mail:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="email" name="email" value="" placeholder=" Corre Electrónico *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="password">Password:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="password" name="password" placeholder=" Elegí tu contraseña *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="cpassword">Confirmá tu password:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="password" name="cpassword" placeholder=" Confirmá tu contraseña *">
                                </div>
                                <?php if(isset($errores['password'])) :?>
                                <div class="alert"><p><strong><?= $errores['password'] ?></strong></p></div>
                                <?php endif; ?>
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label col-md-2" for="dni">DNI:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="dni" value="" placeholder=" DNI">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label col-md-2" for="direccion">Dirección:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="direccion" value="" placeholder=" Dirección">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label col-md-2" for="departamento">Departamento</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="departamento" value="" placeholder=" Piso/Departamento">
                                </div>
                            </div> -->
                            <!-- <div class="form-group">
                                <label class="control-label col-md-2" for="telefono">Teléfono</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="telefono" value="" placeholder=" Teléfono">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label col-md-2" for="localidad">Localidad y Provincia</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="localidad" value="" placeholder=" Localidad">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label col-md-2" for="provincia">Provincia</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="provincia" value="" placeholder=" Provincia">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label col-md-2" for="codiga-postal">Código Postal</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="codigo-postal" value="" placeholder=" Código Postal">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label col-md-2" for="fecha-de-nacimiento">Fecha de Nacimiento</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="fecha-de-nacimiento" value="" placeholder=" Fecha de Nacimiento">
                                </div>
                            </div> -->
                            <br>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="genero" name="genero">Género:</label>
                                <div class="col-md-2">
                                    <input  type="radio" name="genero" value="f">
                                    <label class="control-label col-md-2" for="genero" name="femenino">Femenino</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" name="genero" value="m">
                                    <label class="control-label col-md-2" for="genero" name="masculino">Masculino</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" name="genero" value="o">
                                    <label class="control-label col-md-2" for="genero" name="otro">Otro</label>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <h4>
                                    <label class="control-label" for="avatar">Foto de Perfil</label>
                                </h4>
                                <div class="col-md-10">
                                    <input type="file" name="avatar">
                                    <?php if(isset($errores['avatar'])) :?>
                                    <div class="alert"><p><strong><?= $errores['avatar'] ?></strong></p></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br>
                            <div >
                                <hr>
                                <br>
                                <div class="conteiner-flex">
                                    <div class="form-group">
                                        <div class="col-md-auto">
                                            <label class="control-label" for="newsletter">Quiero suscribirme al newsletter semanal</label>
                                        </div>
                                        <div class="col-md-auto">
                                            <input type="checkbox" name="newsletter">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="conteiner-flex">
                                    <div class="form-group">
                                        <div class="col-md-auto">
                                            <label class="control-label" for="confirm">* Acepto Términos y Condiciones</label>
                                        </div>
                                        <div class="col-md-auto">
                                            <input type="checkbox" name="confirm">
                                        </div>
                                    </div>
                                </div>
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

    <!-- FOOTER -->
    <footer>
        <section>
            <div class="conteiner-flex1">
                <div class="footer">
                    <nav class="footer-nav">
                        <a href="#">Inicio</a>
                        <a href="#">Productos</a>
                        <a href="#">Servicios</a>
                        <a href="#">Contacto</a>
                        <a href="#">Preguntas Frecuentes</a>
                    </nav>
                </div>
                <form class="search-form">
                    <input class="search-box" type="searchbox" placeholder="Buscar...">
                    <button class="btn search-btn">BUSCAR</button>
                </form>
                <div class="footer">
                    <i>2018 Todos los Derechos reservados.</i>
                </div>
                <nav class="footer-nav1">
                    <ul>
                        <li>
                            <a href="#">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Productos</a>
                        </li>
                        <li>
                            <a href="#">Servicios</a>
                        </li>
                        <li>
                            <a href="#">Contacto</a>
                        </li>
                        <li>
                            <a href="#">Preguntas Frecuentes</a>
                        </li>
                        <li>
                            <div class="footer-conteiner-flex">
                                <form class="search-form1">
                                    <input class="search-box" type="searchbox" placeholder="Buscar...">
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="footer-conteiner-flex">
                                <form class="search-form1">
                                    <button class="btn search-btn">BUSCAR</button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="footer1">
                                <i>2018 Todos los Derechos reservados.</i>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>