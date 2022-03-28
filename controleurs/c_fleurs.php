<?php 

require_once('modeles/m_fleur.php');

require_once('modeles/m_categorie.php');

 
$_SESSION['action']();

 
//#################################################################################################################################//

// Catalogue des Fleurs

//#################################################################################################################################//

function index()

{

    $lescategs=getLesCategories();

    if (isset($_SESSION['idurl']))

       $lesFleurs=getLesFleursCat($_SESSION['idurl']); 

    else

       $lesFleurs=getLesFleurs(); 

    include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');

}

 


 
//#################################################################################################################################//

// Gestion des Fleurs : Liste

//#################################################################################################################################//

function gestion()

{

    $lesfleurs = getLesFleurs(); 

    include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');

}

 
//#################################################################################################################################//

// Gestion des Fleurs : Mise � jour

//#################################################################################################################################//

function update()

{

    if ($_SERVER['REQUEST_METHOD'] != 'POST')

    {

        $lesCat = getLesCategories();

        // Affichage de la news dans un formulaire 

        $UneFleur= getUneFleur($_SESSION['idUrl']);

        include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');

    }

    else

    {

        // Mise � jour du contenu de la page dans la base de donn�es 

        $resultats = setModifFleur($_POST['Desig'] , $_POST['Prix'], $_POST['Photo'], $_POST['cat'], $_POST['Ref'] );

 
        // Test du r�sultat de requ�te et pr�paration du message � afficher

        if ($resultats == true)

            AffecterInfoSucces("La fleur '".$_POST['Ref']."' a �t� modifi�e avec succ�s");

        else

            AffecterInfoEchec("La fleur '".$_POST['Ref']."' n'a pas �t� modifi�e suite � une erreur");

    

            header('location:'.WEBROOT.'fleur/gestion');  

    }

}

 
//#################################################################################################################################//

// Gestion des Fleurs : Insertion

//#################################################################################################################################//

function insert()

{

    if ($_SERVER['REQUEST_METHOD'] != 'POST')

    {

      $lesCat=getLesCategories();

      include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');

    }

    else

    {

            // Ajout du contenu de la fleur dans la base de donn�es 

            $resultats = setAjoutFleur( $_POST['Ref'] , $_POST['Desig'], $_POST['Prix'], $_POST['Photo'], $_POST['cat'] );

 
            // Test du r�sultat de requ�te et pr�paration du message � afficher

            if ($resultats == true)

                AffecterInfoSucces("La fleur '".$_POST['Ref']."' a �t� ajout�e avec succ�s");

            else

                AffecterInfoEchec("La fleur '".$_POST['Ref']."' n'a pas �t� ajout�e suite � une erreur");

           header('location:'.WEBROOT.'fleur/gestion');  

    }

}





 
//#################################################################################################################################//

// Gestion des Fleurs : Suppression

//#################################################################################################################################//

function delete()

{

    if ($_SERVER['REQUEST_METHOD'] != 'POST')

    {

      // Affichage de la fleur 

        $UneFleur= getUneFleur($_SESSION['idUrl']);

        include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');

    }

    else

    {

        $resultats = setSupprimerFleur($_POST['Ref'] );

         

        // Test du r�sultat de requ�te et pr�paration du message � afficher

        if ($resultats == true)

                AffecterInfoSucces("La fleur a �t� supprim�e avec succ�s");

        else

             AffecterInfoEchec("La fleur n'a pas �t� supprim�e suite � une erreur");

        header('location:'.WEBROOT.'fleur/gestion');  

    }

}