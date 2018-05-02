<?php

    $USUARIO=$_POST['nombre-usuario'];
    $CONTRASEÑA=$_POST['password'];

    if( isset ($_POST['nombre-usuario']) && !empty ($_POST['nombre-usuario']) &&
        isset ($_POST['password']) && !empty ($_POST['password']))
    {
        $ENLACE_BD = mysqli_connect("localhost","root","","dsi") or die("ERROR: No se conectó a la BD");
        // mysql_select_db(dsi,$ENLACE_BD) or die ("ERROR: No se pudo acceder a la BD");

        $VERIFICA = mysqli_query($ENLACE_BD,"SELECT * FROM registro_usuario WHERE Usuario = $USUARIO AND = Contraseña  = $CONTRASEÑA");
        if (mysqli_result::fetch_assoc($VERIFICA,0)){
            echo "Inicio de sesión correcto";
        }
        else{
            echo "Error en el inicio de sesión";
        }
    }
    else{
        echo "Error del sistema";
    }
?>