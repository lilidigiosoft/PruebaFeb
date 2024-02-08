<?php
require_once("config.php");//ROOT
require_once("controlador/index.php");

if(isset($_GET['m']))://BUSCA LA VARIABLE
  
     if(method_exists(modeloController,$_GET['m']))

        modeloController::{$_GET['m']}();
     endif;   
else
     modeloController::index();

endif