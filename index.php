<?php
   require_once("db/db.php");
   require_once("controllers/materiales_controller.php");
   $controller = new materiales_controller; 
   
   if(!empty($_POST['action']) && $_POST['action'] == 'agregar'){
      $controller->nuevoRegistro();
   }

   if(!empty($_POST['action']) && $_POST['action'] == 'crear'){
      $controller->crear($_POST);
   }

   $controller->ver();


?>
 