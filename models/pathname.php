<?php

	function GetFileName($path)/*Permet d'extraire le nom d'un fichier via le chemin*/
    {
      $name=explode("/",$path);
      return $name[sizeof($name)-1];
    }

?>