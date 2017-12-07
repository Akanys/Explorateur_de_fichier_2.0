<?php
    
    if(isset($_GET['delete'])&&!empty($_GET['delete'])&&file_exists($_GET['delete'])&&is_file($_GET['delete']))/*Supprimé un fichier ...*/
    {  
      if(!@unlink($_GET['delete']))
      {
            Erreur('Erreur l\ors de la suppresion de '.$_GET['delete'].'');
            exit;
      }
      header('location:'.$_SERVER['HTTP_REFERER']);
    }
    
?>