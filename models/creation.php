<?php
    
    if(isset($_GET['touch'])&&!empty($_GET['touch'])&&isset($_GET['path'])&&!empty($_GET['path'])) /*Permer de crée un fichier*/
    {
     if(file_exists($_GET['path'].'/'.$_GET['touch']))
     {
        Erreur('Un fichier porte deja le nom : '.$_GET['touch'].' !');
        exit;
     }
     if(!@touch($_GET['path'].'/'.$_GET['touch']))
     {
         Erreur('Erreur l\'ors de la creation du fichier '.$_GET['touch'].'');
         exit;
     }  
     header('location:'.'?dir='.$_GET['path']); /*Redirection a l'url precedent*/
    }
    
    if(isset($_GET['mkdir'])&&!empty($_GET['mkdir'])&&isset($_GET['pathmkdir'])&&!empty($_GET['pathmkdir']))
    {
     if(file_exists($_GET['pathmkdir'].'/'.$_GET['mkdir'])&&is_dir($_GET['pathmkdir'].'/'.$_GET['mkdir']))
     {
      Erreur('Erreur un dossier porte deja se nom :'.$_GET['mkdir'].' ...');
      exit;
        }
     if(!@mkdir($_GET['pathmkdir'].'/'.$_GET['mkdir'],0755)){
         Erreur('Erreur l\'ors de la création du fichier '.$_GET['mkdir'].'!');
         exit;
     }
      header('location:?dir='.$_GET['pathmkdir']);
    }

?>