<?php

$BASE_URL = "http://localhost/Explorer/";

if (!isset($_GET['route']) || empty($_GET['route']))
{
   $route = 'home';
}

else {
   $route = $_GET['route'];
}    

switch ($route) {
   case 'home':
       include("controllers/ExplorerController.php");
       break;

   default:
       include("views/404.php");
       break;
}

?>