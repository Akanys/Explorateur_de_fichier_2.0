<?php
	if(!isset($_GET['rename'])&&!isset($_GET['pathren'])&&!isset($_GET['en'])&&!isset($_GET['upload'])&&!isset($_POST['pathupload'])&&!isset($_GET['touch'])&&!isset($_GET['download'])&&/*Verifie si rien n'est appellé*/
    !isset($_GET['delete'])&&!isset($_GET['path'])&&!isset($_GET['dir'])&&!isset($_FILES['fichier'])&&!isset($_GET['mkdir'])&&!isset
    ($_GET['pathmkdir']))
    {
        header('location:?dir='.$DEFAULT);
    }

    if(isset($_GET['upload'])&&isset($_POST)&&!file_exists($_POST['pathupload'].$_FILES['fichier']['name']))
    {
    $tmp_file = $_FILES['fichier']['tmp_name'];
    $name_file = $_FILES['fichier']['name'];
        if( !is_uploaded_file($tmp_file) )
        {
            Erreur('Erreur lors du telechargement !');
            exit;
        }
         if( !move_uploaded_file($tmp_file, $_POST['pathupload'].'/'. $name_file) )
        {
            Erreur('Erreur lors du deplacement du fichier !</div></body></html>');
            exit;
        }
    
        header('location:'.$_SERVER['HTTP_REFERER']);
    }
?>