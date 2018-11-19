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
            <div class="container">
                <div class="row my-2">
                    <div class="col-lg-8 order-lg-2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                            </li>
                        </ul>
                        <div class="tab-content py-4">
                            <div class="tab-pane active" id="profile">
                                <h3 class="mb-3">Perfil de Usuario</h3>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- <h6><strong>Sobre mi:</strong></h6>
                                        <p>
                                            Web Designer, UI/UX Engineer
                                        </p>
                                        <h6><strong>Hobbies:</strong></h6>
                                        <p>
                                            Indie music, skiing and hiking. I love the great outdoors.
                                        </p> -->
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <div class="tab-pane" id="edit">
                                <form role="form">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nombre:</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="nombre" value="Nombre" placeholder="<?value?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Apellido:</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="apellido" value="Apellido" placeholder="<?value?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Email:</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" name="email" value="email@gmail.com" placeholder="<?value?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Dirección:</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="direccion" value="Dirección" placeholder="<?value?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Ciudad</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" name="ciudad" value="Ciudad" placeholder="<?value?>">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Zona Horaria</label>
                                        <div class="col-lg-9">
                                            <select id="user_time_zone" class="form-control" size="0">
                                                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                                <option value="Alaska">(GMT-09:00) Alaska</option>
                                                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                <option value="Arizona">(GMT-07:00) Arizona</option>
                                                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Username:</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="username" value="username" placeholder="<?value?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Password:</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" name="password" value="password" placeholder="<?value?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Confirmación de Password:</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" name="cpassword" value="password" placeholder="<?value?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="conteiner-flex col-md-8">
                                            <button class="btn form-btn" type="submit">ENVIAR</button>
                                            <button class="btn form-btn" type="reset">BORRAR</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1 text-center">
                        <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                        <h6 class="mt-2">Upload a different photo</h6>
                        <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input">
                            <span class="custom-file-control">Choose file</span>
                        </label>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>