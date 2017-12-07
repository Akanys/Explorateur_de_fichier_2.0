
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" media="screen" type="text/css" title="Design" href="file/style-explorateur.css" />
      <script language="javascript" type="text/javascript" src="file/javascript.js"></script> 
      <title>Explorateur_de_fichier</title>
    </head>

    <body>
      <div id="header" class="container">
        <div class="row justify-content-center">  
          <div class="col-2 col-md-1 nopadding">
            <a href="#" class="icone" onclick="display_('mkdir');"><img alt="button newfiles" width="50px" title="Creer un dossier" src="<?php echo $IMGCREATEFOLDER; ?>" /></a>
          </div>
          <div class="col-2 col-md-1 nopadding">
            <a href="#" class="icone" onclick="display_('search'); display_('space');"><img alt="button search" width="50px" title="Chercher" src="<?php echo $IMGSEARCH; ?>" /></a>
          </div>                  
          <form class="formulaire col-9 col-md-6 " id="search" style="display:none;">
            <input class="champ" type="text" placeholder="Search..." id="larecherche"/><div id="recherche"></div>
          </form>    
          <div class=" col-9 col-md-11">    
            <div class="filariane" />
              <?php include("models/filariane.php"); ?> 
            </div>
          </div>
        </div>
      </div>

      <div id="pagedossier" class="container"> 
      <?php include("models/bouclefichier.php"); ?>
          <script>
          var fichiers = [];
          <?php
            $handle = @opendir($rep); /* Ouvre le repertoire */
          while ($fichier = readdir($handle)) {
          echo "fichiers.push('".$fichier."');";
          } ?>
          console.log(fichiers);
          </script>
          <div class="bulle" id="mkdir" style="display:none;"><form method="get" action="?" >
          <img src="<?= $IMGFOLDER ?>"></img><input type="text" name="mkdir"  title="Cree dossier" size="30" />
          <input type="hidden" name="pathmkdir" value="<?= $replien ?>" />
          </form>
        </div>            
      </div>
    </body>
  </html>

  