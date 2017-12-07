function display_(file)
{
var obj=document.getElementById(file);
	if(obj.style.display=="none")
obj.style.display="block";
	else
obj.style.display="none";
}

function load(nameid)
{
var champsearch=document.getElementById(nameid);
var TIME_RELOAD=1500;
champsearch.onkeyup=function ()
{
 var launcher= window.setTimeout(function () { recherchetable(champsearch.value); },TIME_RELOAD);	
 champsearch.onkeydown=function ()
 {
	   window.clearTimeout(launcher);
   }
 }
}

window.onload=function ()
{
 load("larecherche");
}

function recherchetable(recherche)
{
var champsearch=document.getElementById('larecherche');
document.getElementById('recherche').innerHTML=""; /*Vide le contenu  de la recherche*/
if(fichiers.indexOf(recherche) === -1)
{
console.log('Pas ici');
champsearch.style.backgroundColor = '#fc8989';
}
else{
console.log('ici');
champsearch.style.backgroundColor = '#c7ffd5';
}
}