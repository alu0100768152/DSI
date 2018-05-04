<?php
    require '/opt/lampp/htdocs/dsi/model/conexion.php';
    
    $TITULO=$_POST['titulo'];
    $CONTENIDO=$_POST['contenido'];
   

    if( isset ($_POST['titulo']) && !empty ($_POST['titulo']) &&
        isset ($_POST['contenido']) && !empty ($_POST['contenido']))
    {
        // mysql_select_db(dsi,$ENLACE_BD) or die ("ERROR: No se pudo acceder a la BD");
        $db = new Conexion();
        $query = "INSERT INTO `articulo`(`titulo`, `contenido`) VALUES ('$TITULO','$CONTENIDO')";
        $db->query($query);
        //echo $query;
        if ($db->affected_rows < 0){
            header("location: noticias.php?error=Hubo un problema");
        }else{
            header("location: noticias.php");
        }
        
    }
    else{
        echo "Error al enviar los datos";
    }
?>