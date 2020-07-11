
<?php
session_start();
require('../funciones/conexion.php');
require('../funciones/misfunciones.php');

//Verificacion que la session exista, de caso contrario no permitimos el ingreso a la pagina
if(!isset($_SESSION['user'])){
    header('Location: index.php');
}else{
    
}

//validamos que el usuario pulse enviar y los campos no esten vacios
//procedemos a enviar el comentario a la base de datos
if(isset($_POST['enviart'])){
    
    if(!empty($_POST['textcoment'])){
        $coment = $_POST['textcoment'];
        
        if(ingresaComentario($coment)){
            $addOk = "Comentario agregado correctamente";
        }else{
            echo "Algo salio mal";
        }
    }
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Deja tu comentario</title>
</head>
<body>

<div class="cajacomentario">
    <form action="dentro.php" method="POST">
        <textarea name="textcoment" id="" cols="20" rows="5"></textarea>
        <br>
        <input type="submit" value="Enviar Comentario" name="enviart">
        <input type="submit" value="Ver Todos los comentario" name="verc">
    </form>
    <h4>
        <?php
        //Si el comentario se guardo correctamente le indicamos al usuario
        if(isset($addOk)){
            if(!empty($addOk)){
                echo $addOk;
            }
        }
        ?>
    </h4>
</div>

    <div class="muestracomentarios">
        <h3>
        <?php
        if(isset($_POST['verc'])){
            verComentarios();
                
        }

        ?>
        </h3>
    </div>


    
</body>
</html>