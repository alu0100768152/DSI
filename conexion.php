<?php
    
    class Conexion extends Mysqli{

        public function __construct(){
            parent::__construct("localhost","root","","dsi2");
            $this->set_charset('utf8');
            $this->connect_errno ? die("ERROR: No se conectó a la BD") : header ("location: view/html/gameplays.html");
        }
    }
    
    
    
    //$ENLACE_BD = mysqli_connect("localhost","root","","dsi") or die("ERROR: No se conectó a la BD");
?>