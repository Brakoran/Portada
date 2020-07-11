<?php

$bandera = "";

if(isset($_POST['enviar'])){

    if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        $destinatario = 'alexander@duqueg.com';
        
        $carta = "De: $nombre \n";
        $carta .= "Correo: $correo \n";
        $carta .= "Asunto: $asunto \n";
        $carta .= "Mensaje $mensaje";

        if(mail($destinatario, $asunto, $carta)){
            $bandera = 1;
        }else{
            $bandera = 2;
        }

    }else{
        $error = "Debe llenar todos los datos";
    }


}



?>