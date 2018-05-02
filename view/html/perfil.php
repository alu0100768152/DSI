<?php
require '/opt/lampp/htdocs/dsi/conexion.php';

?>


<!DOCTYPE html>
<meta charset="utf-8">
<html lang="es">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    
    <!--Add STW.css-->
    <link media="screen" href="../css/DSI.css" type="text/css" rel="stylesheet">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  </head>
  <body class="grey darken-4 odyssey">
    <!-- Menu Navegador -->
    <nav>
      <div class="nav-wrapper black center-on-small-only">
        <a href="inicio.html" class="brand-logo">Stewie</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"> 
            <i class="material-icons">menu</i></a>           
            <ul role=”menubar” class="right hide-on-med-and-down">
              <li><a href="STWjuegos.html">Juegos</a></li>
              <li><a href="destacados.html">Destacados</a></li>
              <li><a href="noticias.html">Noticias</a></li>
              <li><a href="gameplays.html">Gameplays</a></li>
              <li><a href="perfil.html">Perfil</a></li>
              <li><a href="about_us.html">About us</a></li>
              <li><a href="#">Salir</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li role=”menuitem”><a href="STWjuegos.html" tabindex="-1">Inicio</a></li>
            <li role=”menuitem”><a href="destacados.html" tabindex="-1">Destacados</a></li>
            <li role=”menuitem”><a href="noticias.html" tabindex="-1">Noticias</a></li>
            <li role=”menuitem”><a href="gameplays.html" tabindex="-1">Gameplays</a></li>
            <li role=”menuitem”><a href="perfil.html" tabindex="-1">Perfil</a></li>
            <li role=”menuitem”><a href="about_us.html" tabindex="-1">About us</a></li>
            <li role=”menuitem”><a href="#" tabindex="-1">Salir</a></li>
          </ul>
        </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col s12"> 
          <div class="card-panel foro">
            <div class="central">

              <!-- Informacion Central -->

              <h3 class="center grey-text text-darken-2"><strong tabindex="0">Perfil del usuario:</strong></h3><hr><br>
                <div class="center-align">
                 <img src="../img/¡¡RELLENAR!!.png" class="circle" src="cool_pic.jpg">
                </div> 
               <!-- <span class="title">JAVIER ANTONIO GONZÁLEZ HERNÁNDEZ</span>
                <p><b>Correo:</b> javier@stw.hol.es</p>-->
                
              <ul class="collection">
                <li class="collection-item avatar">
              
                  <span class="title">NOMBRE:</span>
                  <p><b>NOMBRE_PERSONA </p>
                </li>
                <li class="collection-item avatar">
                  <!--<img src="#" alt="imagen alumno angel" class="circle">-->
                  <span class="title">APELLIDOS:</span>
                  <p>APELLIDO_PERSONA</p>
                </li>
                <li class="collection-item avatar">
                  <!--<img src="#" alt="imagen alumno cristian" class="circle">-->
                  <span class="title">CORREO:</span>
                  <p>micorreo@stw.hol.es</p>
                </li>
                <li class="collection-item avatar">
                  <!--<img src="#" alt="imagen alumno oscar" class="circle">-->
                  <span class="title">NOMBRE DE USUARIO:</span>
                  <p>NOMBRE_USUARIO</p>
                </li>
                
              </ul>
              <table border="1">
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Nombre de usuario</th>
                  <th>email</th>
                </tr>

                <?php
                $db = new Conexion();

                $query = "SELECT nombre, apellido, nombre_usuario, email FROM resgistro_usuario";
                /*while($persona = $db->query($query)->fetch_assoc()){
                  echo $persona['nombre'];
                }*/
                
                //$res = $db->query($query);
                //echo $res;
                $res = $db->query($query);
                $table = '';
                //echo $res;
                while($row = mysqli_fetch_array($res)){
                  $table .= "<tr>";
                  $table .= "<td>$row[nombre] </td>";
                  $table .= "<td>$row[apellido] </td>";
                  $table .= "<td>$row[nombre_usuario] </td>";
                  $table .= "<td>$row[email] </td>";
                  $table .= "<tr>";
                }

                echo $table;
                ?>
              </table>      
      		</div>     
        </div>
      </div>
    </div>
  </div> 
  
  <footer class="page-footer grey darken-4">
    <div class="container">
      <div class="footer-copyright">
        <div class="container">
          <b>ADDRESS</b> 500 Terry Francois Street San Francisco, CA 94158
          <div class="grey-text text-lighten-4 right"><b>TEL</b> 123-456-7890</div>
        </div>
      </div>
    </div>
  </footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav();
      });
    </script>
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>   
    <script type="text/javascript" src="../js/javascript.js"></script>
  </body>
</html>
      