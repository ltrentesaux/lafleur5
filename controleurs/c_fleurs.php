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
// Gestion des fleurs  : Mise � jour 
//########################################################################################// 
function update() {
if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
   
include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
}

 else {
    if(modifFleur($_POST['titre'],$_POST['contenu'],$_POST['date'], $_POST['image'])==true)
        {
            AffecterInfoSucces("La fleur � �t� modifi�e !");
        }
        else
        {
            AffecterInfoEchec("La fleur n'a pas pu �tre modifi�e");
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
            AffecterInfoSucces("La fleur � �t� ajout�e !");
        }
        else
        {
            AffecterInfoEchec("La fleur n'a pas pu �tre ajout�e");
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
            AffecterInfoSucces("La fleur � �t� ajout�e !");
        }
        else
        {
            AffecterInfoEchec("La fleur n'a pas pu �tre ajout�e");
        }
         header('location:'.WEBROOT.'fleurs/gestion');

 }

 }