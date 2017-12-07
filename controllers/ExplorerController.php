<?php
header('Content-Type: text/html; charset=utf-8');/*Encodage*/

include("Lien.php");

include("models/Erreur.php");
include("models/pathname.php");
include("models/download.php");
include("models/verification.php");
include("models/creation.php");
include("models/renommer.php");
include("models/supprimer.php");

if(isset($_GET['dir'])&&!empty($_GET['dir'])&&file_exists($_GET['dir'])&&is_dir($_GET['dir'])) /*Verifie la variable et bien un repertoire*/
{
$rep=$_GET['dir'];
$rep=str_replace("//","/",$rep);
$handle = @opendir($rep); /* Ouvre le repertoire */
$rep=str_replace(".."," ",$rep);

if(!$handle)
  {
	Erreur('Erreur l\'ors de l\'ouverture de '.$rep.' !');
	exit;
}

include("views/ExplorerView.php");

}
?>

