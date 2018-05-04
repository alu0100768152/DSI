<?php
    //require '/opt/lampp/htdocs/dsi/model/conexion.php'; //Oscar
    require 'C:\xampp\htdocs\dsi\model\conexion.php'; //Cristian
    
    $NOMBRE=$_POST['nombre'];
    $APELLIDOS=$_POST['apellidos'];
    $USUARIO=$_POST['nombre_usuario'];
    $CORREO=$_POST['email'];
    $CONTRASEÑA=$_POST['password'];

    if( isset ($_POST['nombre']) && !empty ($_POST['nombre']) &&
        isset ($_POST['apellidos']) && !empty ($_POST['apellidos']) &&
        isset ($_POST['nombre_usuario']) && !empty ($_POST['nombre_usuario']) &&
        isset ($_POST['email']) && !empty ($_POST['email']) &&
        isset ($_POST['password']) && !empty ($_POST['password']))
    {
        // mysql_select_db(dsi,$ENLACE_BD) or die ("ERROR: No se pudo acceder a la BD");
        $db = new Conexion();
        $query = "INSERT INTO `resgistro_usuario`(`nombre`, `apellido`, `nombre_usuario`, `email`, `password`) VALUES('$NOMBRE','$APELLIDOS','$USUARIO','$CORREO','$CONTRASEÑA')";
        $db->query($query);
        //echo $query;
        
    }
    else{
        echo "Error al enviar los datos";
    }
?>