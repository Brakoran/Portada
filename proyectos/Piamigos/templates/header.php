<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <title>Piamigos</title>
</head>
<body>

<div class="contenedor">
    <div class="cabeza">

        <div class="logo">
            <a href="../paginas/index.php"><img src="../img/logo.png" alt=""></a>
        </div>

        <div class="formularioen">
        <form action="index.php" method="POST">
            <label for="icorreo">Correo: </label>
            <input type="email" name="icorreo" id="icorreo">
            <label for="iclave">Clave: </label>
            <input type="password" name="iclave" id="iclave">
            <input type="submit" name="enviar" value="Ingresar">
        </form>
        </div>

        <?php

           $errorsLogin = array();
        
            if(isset($_POST['enviar'])){
                $user = trim($_POST['icorreo']);
                $clav = trim($_POST['iclave']);

                if(loginNoVacio($user,$clav)){

                    $errorsLogin[] = login($user,$clav);

                }else{
                   $errorsLogin[] = "Ingrese su clave y contrasena";     
                }
            }

        ?>

        <h3>
        <?php
        if(isset($errorsLogin)){
            if(!empty($errorsLogin)){
                foreach($errorsLogin as $errorl){
                    echo $errorl;
                }
            }
        }else{
        }
        ?>
        </h3>



    </div>
 
    
