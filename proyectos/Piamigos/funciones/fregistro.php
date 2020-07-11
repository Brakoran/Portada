<?php

if(isset($_POST['renviar'])){

    $usuarioar = trim($_POST['rcorreo']);
    $contrasenaar = trim($_POST['rclave']);
    $contrasenaarr = trim($_POST['cclave']);

    //Verificamos que los campos no esten vacios
    if(noEstenVacios($usuarioar,$contrasenaar,$contrasenaarr)){
        
        //verificamos que el usuario no exista en la BD
        if(usuarioNoExista($usuarioar)){

            if(contrasenaIguales($contrasenaar,$contrasenaarr)){

                //haseamos la clave
                $hash = hashContrasena($contrasenaarr);
                
                //Registramos los datos previamente comprobados en la base de datos
                if(registroUsuario($usuarioar,$hash)){

                    $resultado = "Registro Exitoso";

                }else{
                    $errors[] = "Ocurrio un error al registrar el usuario";
                }

            }else{
                
                $errors[] = "Las contrasenas no coincide";
            }

        }else{
            $errors[] = "Ese correo ya esta en uso";
        }

    }else{
        $errors[] = "Llene todos los campos";
    }
}

?>