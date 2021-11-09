<?php
   require_once("db/db.php");
   require_once("controllers/materiales_controller.php");
   $controller = new materiales_controller; 
   
   if(!empty($_POST['action']) && $_POST['action'] == 'agregar'){
      $controller->nuevoRegistro();
      exit;
   }

   if(!empty($_POST['action']) && $_POST['action'] == 'crear'){
      $controller->crear($_POST);
      exit;
   }

   if(!empty($_POST['action']) && $_POST['action'] == 'eliminar'){
      $controller->eliminar($_POST);
      exit;
   }

   $controller->ver();


?>
 