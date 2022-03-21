<?php require_once('modeles/m_fleur.php'); 
// Si besoin 
// Appel de la fonction correspondante (Fonctions variables) 
$_SESSION['action']();
//########################################################################################//
// Cattalogue des fleurs
//########################################################################################//
function index() { 
	$lesFleurs=getToutesFleurs(); 
	include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');
}
//########################################################################################// 
// Gestion des fleurs : Liste 
//########################################################################################// 
function gestion() 
{ 
	$lesFleurs=getToutesFleurs(); 
	include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
} 
//########################################################################################// 
// Gestion des fleurs  : Mise à jour 
//########################################################################################// 
function update() {
if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
   
include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
}

 else {
    if(modifFleur($_POST['titre'],$_POST['contenu'],$_POST['date'], $_POST['image'])==true)
        {
            AffecterInfoSucces("La fleur à été modifiée !");
        }
        else
        {
            AffecterInfoEchec("La fleur n'a pas pu être modifiée");
        }
         header('location:'.WEBROOT.'fleurs/gestion');

 }

} 
//########################################################################################// 
// Gestion des fleurs  : Insertion 
//########################################################################################//
function insert() { 

if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
   
include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
}

 else {

    if(SetAjoutFleur($_POST['titre'],$_POST['contenu'],$_POST['date'], $_POST['image'])==true)
        {
            AffecterInfoSucces("La fleur à été ajoutée !");
        }
        else
        {
            AffecterInfoEchec("La fleur n'a pas pu être ajoutée");
        }
         header('location:'.WEBROOT.'fleurs/gestion');
 }

 }

//########################################################################################// 
// Gestion des fleurs  : Suppression
//########################################################################################// 
function delete() {
if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
   
include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
}

 else {
  if(deletFleur($_POST['titre'],$_POST['contenu'],$_POST['date'], $_POST['image'])==true)
        {
            AffecterInfoSucces("La fleur à été ajoutée !");
        }
        else
        {
            AffecterInfoEchec("La fleur n'a pas pu être ajoutée");
        }
         header('location:'.WEBROOT.'fleurs/gestion');

 }

 }