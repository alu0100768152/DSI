<?php
    include '../model/conexion.php';
    
    $NOMBRE=$_POST['nombre'];
    $APELLIDOS=$_POST['apellidos'];
    $USUARIO=$_POST['nombre-usuario'];
    $CORREO=$_POST['email'];
    $CONTRASEÑA=$_POST['password'];

    if( isset ($_POST['nombre']) && !empty ($_POST['nombre']) &&
        isset ($_POST['apellidos']) && !empty ($_POST['apellidos']) &&
        isset ($_POST['nombre-usuario']) && !empty ($_POST['nombre-usuario']) &&
        isset ($_POST['email']) && !empty ($_POST['email']) &&
        isset ($_POST['password']) && !empty ($_POST['password']))
    {
        // mysql_select_db(dsi,$ENLACE_BD) or die ("ERROR: No se pudo acceder a la BD");

        mysqli_query($ENLACE_BD,"INSERT INTO registro_usuario VALUES('$NOMBRE','$APELLIDOS','$USUARIO','$CORREO','$CONTRASEÑA')");
        echo "Datos Enviados Correctamente";
    }
    else{
        echo "Error al enviar los datos";
    }
?>