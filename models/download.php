<?php

	function download($file)/*Fonction download permer de telecharger un fichier*/
    {
      $name=GetFileName($file);/*Extraie le nom via la fonction GetFileName*/
    /*
    Modifie l'header forcer le telechargement au client , au  fichier desirer
    */
      header('Content-disposition: attachment; filename='.$name);/*Indique le nom*/
      header('Content-Type: application/force-download');/*Indique le type*/
      header('Content-Length: '.filesize($file));/*Indique la taille pour permet au client de savoir le % de telechargement Ceci n'est pas obligatoire .*/
      header('Pragma: no-cache');
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0, public');
      header('Expires: 0');
      readfile($file); /*Lit le fichier */
      exit; /*On Quit pour ne rien envoyez d'autre*/
    }


?>