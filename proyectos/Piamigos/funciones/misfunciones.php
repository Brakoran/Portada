<?php

function noEstenVacios($usuarioar,$contrasenaar,$contrasenaarr){

    if(!empty($usuarioar) && !empty($contrasenaar) && !empty($contrasenaarr)){

        return TRUE;
    }else{
        return FALSE;
    }
}

//--


function usuarioNoExista($usuarioar){

    global $mysqli;

    $sql = "SELECT id FROM usuarios where correo=?";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s",$usuarioar);
    $stmt->execute();
    $stmt->store_result();
    $numRows = $stmt->num_rows;

    if($numRows >0){
        return FALSE;

    }else{
        return TRUE;
    }


}

//--

function contrasenaIguales($contrasenaar,$contrasenaarr){

    if(strcmp($contrasenaar,$contrasenaarr) == 0){

        return TRUE;

    }else{
        return FALSE;
    }
    
}

//--

function hashContrasena($contrasenaarr){
    $hash = password_hash($contrasenaarr,PASSWORD_DEFAULT);
    return $hash;
}

//--

function registroUsuario($usuarioar,$hash){

    global $mysqli;

    $correov = $usuarioar;
    $clav = $hash;
    $id = NULL;
    $ultimaC = NULL;

    $sql = "INSERT INTO usuarios(correo,clave) VALUES (?,?)";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss",$correov,$clav);

    if($stmt->execute()){
        $stmt->close();
        
       // $sql = "INSERT INTO comentarios(correo) VALUES (?)";
      //  $stmt = $mysqli->prepare($sql);
       // $stmt->bind_param("s",$correov);
       // $stmt->execute();
       // $stmt->close();
        return TRUE;

    }else{

        $stmt->close();
        return FALSE;
    }

}

//--

function loginNoVacio($usuario,$clave){

    if(!empty($usuario) && !empty($clave)){
        return TRUE;

    }else{
        return FALSE;
    }

}

//--

function login($user,$clav){
    global $mysqli;

    $sql = "SELECT id, clave FROM usuarios WHERE correo=?";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s",$user);
    $stmt->execute();
    $stmt->store_result();

    //creamos una variable para almacenar el numero de filas
    $numRows = $stmt->num_rows;

    //verificamos que el numero de filas en la variable sea mayor a 0, 
    //para verificar que halla traido algun campo.
    if($numRows > 0){
        $stmt->bind_result($ido,$cla);
        $stmt->fetch();

        
        //validamos la claves hasheadas
        if(password_verify($clav,$cla)){
            
            
            //la clave fueron correctas
            $_SESSION['user'] = $user;

            $lastSession = lastSession($ido);
            header('Location: ../paginas/dentro.php');

        }else{
            
            return "Clave incorrecta";
        }

    }else{
        
        return "No se encontro ese usuario";
    }

}

//--

function lastSession($ido){

    global $mysqli;

    $stmt = $mysqli->prepare("UPDATE usuarios SET ultimaConexion=NOW() WHERE id=?");

    $stmt->bind_param("i",$ido);

    if($stmt->execute()){
        if($stmt->affected_rows > 0){
            $stmt->close();
            return TRUE;

        }else{
            $stmt->close();
            return FALSE;
        }
    }else{
        $stmt->close();
        return FALSE;
    }

}

//--

function ingresaComentario($coment){

    global $mysqli;

     $corre = $_SESSION['user'];
     
     $sql = "INSERT INTO comentarios(correo,comentario) VALUES (?,?)";
     $stmt = $mysqli->prepare($sql);
     $stmt->bind_param("ss",$corre,$coment);

   if($stmt->execute()){
        $stmt->close();
       return TRUE;
   }else{
        $stmt->close();
       return FALSE;
   }

}

//-- 

function verComentarios(){

    global $mysqli;
    $corre = $_SESSION['user'];

    $sql = "SELECT comentario,correo FROM comentarios";
    $numero = $mysqli->query($sql);


    if($numero->num_rows > 0){
        
        while($comentariokk = $numero->fetch_assoc()){
            
            echo $comentariokk['correo']." dice: "."<br>".$comentariokk['comentario'];
            echo "<br>";
            echo "<br>";
            echo "<hr>";



        }

        
        
    }
    

}



?>