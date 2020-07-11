
<?php

//Iniciamos la session
session_start();

//Requerimos la conexion
require('../funciones/conexion.php');

//Incluimos las funciones
include('../funciones/misfunciones.php');



//HTML>
//Se incluye el header, con el login dentro del header contenedor y todo el head. 
include('../templates/header.php');



//Creamos una array para guardar nuestro esrrores
$errors = array();


     //Aca Inicia toda la comprobacion Para el registro
    //Verificamos que el usuario de click en Registrarme
    include('../funciones/fregistro.php');

?>

    <div class="contenido">

        <div class="info">
            <img src="../img/amigos.png" alt="">
        </div>

        <div class="formregistro">


            <div class="formur">

                <div class="succes">
                    <h3>
                    <?php include('../funciones/succes.php') ?>
                    </h3>
                </div>

                <div class="errores">
                    <h3>
                    <?php include('../funciones/errores.php'); ?>
                    </h3>
                </div>

                <form action="index.php" method="POST">
                    <label for="rcorreo">Ingrese Su Correo:</label>
                    <br>
                    <input type="email" id="rcorreo" name="rcorreo">
                    <br>
                    <label for="rclave">Ingrese Su Clave:</label>
                    <br>
                    <input type="password" id="rclave" name="rclave">
                    <br>
                    <label for="cclave">Confirme Su Clave:</label>
                    <br>
                    <input type="password" id="cclave" name="cclave">
                    <br>
                    <br>
                    <input type="submit" name="renviar" value="Registrarme">
                </form>
            </div>

        </div>

    </div>

    <?php
    include('../templates/footer.php');
    ?>

<!--Div de cierre de contenedor que se encuentra iniciado en header.php-->
</div>
<!---->    
</body>
</html>