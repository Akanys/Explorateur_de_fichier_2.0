<?php
          while ($f = readdir($handle)) { //Boucle qui enumere tout les fichier d'un repertoire
            $f= str_replace("..",'.',$f);
            $lien=str_replace(" ",'%20',$f); /*Pour les espace fichier*/
            $replien=str_replace(" ",'%20',$rep);/*idem pour les dossier*/
            
            if($f === "."){}
            elseif(@is_dir($rep.'/'.$f)){ /*verifie si c'est un repertoire*/
              
              echo '<a href="?dir='.$replien.'/'.$lien.'"><img alt="Dossier" src="'.$IMGFOLDER.'" width="50px"/>'.$f.'</a><br />'; 
            
            }
            elseif(@is_file($rep.'/'.$f)){/*Verifie si c'est bien un fichier*/
            
              echo '<img src="'.$IMGFILE.'" width="50px" alt="Fichier"/>'.$f.'<a href="?delete='.$replien.'/'.$lien.'" onclick="return confirm(\'Supprimer '.$f.' ?\');"><img alt="Supprimer" width="30px" title="/!\Supprimer/!\ " src="'.$IMGDELETE.'" /></a><a href="?download='.$replien.'/'.$lien.'" ><img alt="Telecharger" width="30px" title="Telecharger " src="'.$IMGUPLOAD.'" /></a><br />';
          }
          }
          ?>