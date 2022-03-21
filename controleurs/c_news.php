<?php require_once('modeles/m_news.php'); 
// Si besoin 
// Appel de la fonction correspondante (Fonctions variables) 
$_SESSION['action']();
//########################################################################################//
// Carrousel des news 
//########################################################################################//
function index() { 
	$lesNews=getLesNews(); 
	include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');
}
//########################################################################################// 
// Gestion des News : Liste 
//########################################################################################// 
function gestion() 
{ 
	$lesNews=getLesNews(); 
	include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
} 
//########################################################################################// 
// Gestion des News : Mise à jour 
//########################################################################################// 
function update() {
if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
   
include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
}

 else {
    if(modifNews($_POST['titre'],$_POST['contenu'],$_POST['date'], $_POST['image'])==true)
        {
            AffecterInfoSucces("La news à été modifiée !");
        }
        else
        {
            AffecterInfoEchec("La news n'a pas pu être modifiée");
        }
         header('location:'.WEBROOT.'news/gestion');

 }

} 
//########################################################################################// 
// Gestion des News : Insertion 
//########################################################################################//
function insert() { 

if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
   
include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
}

 else {

    if(SetAjoutNews($_POST['titre'],$_POST['contenu'],$_POST['date'], $_POST['image'])==true)
        {
            AffecterInfoSucces("La news à été ajoutée !");
        }
        else
        {
            AffecterInfoEchec("La news n'a pas pu être ajoutée");
        }
         header('location:'.WEBROOT.'news/gestion');
 }

 }

//########################################################################################// 
// Gestion des News : Suppression
//########################################################################################// 
function delete() {
if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
   
include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
}

 else {
  if(deleteNews($_POST['titre'],$_POST['contenu'],$_POST['date'], $_POST['image'])==true)
        {
            AffecterInfoSucces("La news à été ajoutée !");
        }
        else
        {
            AffecterInfoEchec("La news n'a pas pu être ajoutée");
        }
         header('location:'.WEBROOT.'news/gestion');

 }

 }
