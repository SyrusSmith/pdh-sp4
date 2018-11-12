<?php
 
?>

    <main class="main-form">    
        <section class="form">
            <form class="datoss" action="" method="POST" enctype="multipart/form-data">
                <div align="center">
                    <fieldset class="reg-form">
                        <h2> Creá tu cuenta con nosotros</h2>
                        <br>
                    
                        <label for="nombre"></label>
                        <input class="form-input" type="text" name="nombre" value="" placeholder=" Nombre *">
                        
                        <br>
                        <label for="apellido"></label>
                        <input class="form-input" type="text" name="apellido" value="" placeholder=" Apellido *">
                        
                        <br>
                        <label for="email"></label>
                        <input class="form-input" type="email" name="email" value="" placeholder=" Corre Electrónico *">
                        
                                                    
                        <h4><label for="password"></label></h4>
                        <br>
                        <input class="form-input" type="password" name="password" placeholder=" Elegí tu contraseña *">
                        <br>
                        <input class="form-input" type="password" name="cpassword" placeholder=" Confirmá tu contraseña *">
                        <?php if(isset($errores['password'])) :?>
                        <div class="alert"><p><strong><?= $errores['password'] ?></strong></p></div>
                        <?php endif; ?>

                        <br>
                        <label for="dni"></label>
                        <input class="form-input" type="text" name="dni" value="" placeholder=" DNI">
                        

                        <br>
                        <label for="direccion"></label>
                        <input class="form-input" type="text" name="direccion" value="" placeholder=" Dirección">
                        

                        <br>
                        <label for="departamento"></label>
                        <input class="form-input" type="text" name="departamento" value="" placeholder=" Piso/Departamento">
                        

                        <br>
                        <label for="telefono"></label>
                        <input class="form-input" type="text" name="telefono" value="" placeholder=" Teléfono">
                        

                        <br>
                        <label for="localidad"></label>
                        <input class="form-input" type="text" name="localidad" value="" placeholder=" Localidad">
                        

                        <br>
                        <label for="provincia"></label>
                        <input class="form-input" type="text" name="provincia" value="" placeholder=" Provincia">
                        

                        <br>
                        <label for="codiga-postal"></label>
                        <input class="form-input" type="text" name="codigo-postal" value="" placeholder=" Código Postal">
                        
                        <br>
                        <label for="fecha-de-nacimiento"></label>
                        <input class="form-input" type="text" name="fecha-de-nacimiento" value="" placeholder=" Fecha de Nacimiento">
                        

                        <br>
                        <h6 align=left>
                            <i>* (campos obligatorios)</i>
                        </h6>
                        <br>
                        <label for="genero" name="genero">Género:</label>
                        <br>
                        <br>
                        <input type="radio" name="genero" value="f">
                        <label for="genero" name="femenino">Femenino</label>
                        
                        <input type="radio" name="genero" value="m">
                        <label for="genero" name="masculino">Masculino</label>
                        
                        <input type="radio" name="genero" value="o">
                        <label for="genero" name="otro">Otro</label>
                        <br>
                        <br>
                        <h4>
                            <label for="avatar">Foto de Perfil</label>
                        </h4>
                        <br>
                        <input type="file" name="avatar">
                        <?php if(isset($errores['avatar'])) :?>
                        <div class="alert"><p><strong><?= $errores['avatar'] ?></strong></p></div>
                        <?php endif; ?>
                        
                        
                        <br>
                        <br>
                        <h4>
                            <label for="animals">¿Qué animales te gustan?</label>
                        </h4>
                        <br>
                        <label for="animals" name="gatos">Gatos</label>
                        <input type="checkbox" name="gatos">
                        <label for="animals" name="perros">Perros</label>
                        <input type="checkbox" name="perros">
                        <label for="animals" name="aves">Aves</label>
                        <input type="checkbox" name="aves">
                        <label for="animals" name="reptiles">Reptiles</label>
                        <input type="checkbox" name="reptiles">
                        <label for="animals" name="peces">Peces</label>
                        <input type="checkbox" name="peces">
                    
                        <div align="center">
                            <br>
                            <hr>
                            
                            <label for="newsletter">Quiero suscribirme al newsletter semanal</label>
                            <input type="checkbox" name="newsletter">
                            <br>
                            
                            <label for="confirm">* Acepto Términos y Condiciones</label>
                            <input type="checkbox" name="confirm">
                            <hr>
                            <br>
                            
                            <button class="btn" type="submit">ENVIAR</button>
                            <button class="btn" type="reset">BORRAR</button>
                        </div>       
                    </fieldset>
                </div> 
                <br>
            </form>
        </section>
    </main>
    <footer>
        <nav class="footer-nav">
            <a href="?pagina=main">Inicio</a>
            <a href="?pagina=catalogo">Productos</a>
            <a href="?pagina=servicios">Servicios</a>
            <a href="?pagina=contacto">Contacto</a>
            <a href="?pagina=frecuentes">Preguntas Frecuentes</a>
        </nav>
        <i>2018 Todos los Derechos reservados.</i>
    </footer>
</body>
</html>
