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

// Gestion des Fleurs : Mise à jour

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

        // Mise à jour du contenu de la page dans la base de données 

        $resultats = setModifFleur($_POST['Desig'] , $_POST['Prix'], $_POST['Photo'], $_POST['cat'], $_POST['Ref'] );

 
        // Test du résultat de requête et préparation du message à afficher

        if ($resultats == true)

            AffecterInfoSucces("La fleur '".$_POST['Ref']."' a été modifiée avec succès");

        else

            AffecterInfoEchec("La fleur '".$_POST['Ref']."' n'a pas été modifiée suite à une erreur");

    

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

            // Ajout du contenu de la fleur dans la base de données 

            $resultats = setAjoutFleur( $_POST['Ref'] , $_POST['Desig'], $_POST['Prix'], $_POST['Photo'], $_POST['cat'] );

 
            // Test du résultat de requête et préparation du message à afficher

            if ($resultats == true)

                AffecterInfoSucces("La fleur '".$_POST['Ref']."' a été ajoutée avec succès");

            else

                AffecterInfoEchec("La fleur '".$_POST['Ref']."' n'a pas été ajoutée suite à une erreur");

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

         

        // Test du résultat de requête et préparation du message à afficher

        if ($resultats == true)

                AffecterInfoSucces("La fleur a été supprimée avec succès");

        else

             AffecterInfoEchec("La fleur n'a pas été supprimée suite à une erreur");

        header('location:'.WEBROOT.'fleur/gestion');  

    }

}