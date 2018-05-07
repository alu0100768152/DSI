<?php
    //require '/opt/lampp/htdocs/dsi/model/conexion.php'; //Oscar
    require 'C:\xampp\htdocs\dsi\model\conexion.php'; //Cristian
?>

<!DOCTYPE html>
<meta charset="utf-8">
<html lang="es">
  <head>
    <!-- Le decimos al navegador que la página web está optimizada para moviles-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    
    <link media="screen" href="../css/DSI.css" type="text/css" rel="stylesheet">
    
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

              <h3 class="center grey-text text-darken-2"><strong tabindex="0">Artículos</strong></h3><hr><br>
              <h5 class="grey-text text-darken-2"><strong tabindex="0">Crear un Artículo:</strong></h5><hr><br>
              <form name="articulo" method="post" action="add_articulo.php">
                <input type="text" name="titulo" placeholder="Titulo del artículo" id="titulo">
                <input type="text" name="contenido" placeholder="Contenido del artículo" id="contenido">
                <input class="left btn waves-effect waves-light  indigo darken-3" type="submit" value="Añadir">

                <!-- <i class="material-icons right">send</i> -->
                </button>
              </form>
              <br/>
              <br/>
              <h5 class="center grey-text text-darken-2"><strong tabindex="0">Artículos Publicados:</strong></h5><hr><br>
              <ul class="collection">
              <?php
                $db = new Conexion();

                $query = "SELECT titulo, contenido FROM articulo";
                
                $res = $db->query($query);
                $table = '';
                
                while($row = mysqli_fetch_array($res)){
                  $table .= "<li>";
                  $table .= "<u>$row[titulo]</u> <br/>";
                  $table .= "$row[contenido]";
                  $table .= "</li><br/>";
                }

                echo $table;
                ?>
                </ul>

            </div>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav();
      });
    </script>
    <script type="text/javascript" src="../js/javascript.js"></script>
  </body>
</html>
      