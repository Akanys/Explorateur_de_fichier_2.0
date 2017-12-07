<?php
    
    if(isset($_GET['rename'])&&!empty($_GET['rename'])&&isset($_GET['pathren'])&&!empty($_GET['pathren'])&&isset($_GET['en'])&&!empty($_GET['en']))
    {
    if(!file_exists($_GET['pathren'].'/'.$_GET['rename']))
    {
        Erreur('Fichier '.$_GET['rename'].' Introuvable ...');
        exit;
     }
    
    if(file_exists($_GET['pathren'].'/'.$_GET['en']))
    {
        Erreur('Un fichier porte deja le nom : '.$_GET['en'].' ...');
        exit;
        }
     if(!@rename($_GET['pathren'].'/'.$_GET['rename'],$_GET['pathren'].'/'.$_GET['en'])){
         Erreur('Erreur pour renommer '.$_GET['rename'].' en '.$_GET['en']);
         exit;
    }
      header('location:?dir='.$_GET['pathren']);
    }

    if(isset($_GET['download'])&&!empty($_GET['download'])&&file_exists($_GET['download'])&&is_file($_GET['download']))/*Telecharge un fichier*/
    {
      download($_GET['download']);/*....*/
    }
    
?>