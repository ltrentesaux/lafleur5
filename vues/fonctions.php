    <?php 
function BDDConnexionPDO (){
    $hote = 'localhost';        // Le chemin vers le serveur
    $port = '3306';
    $nomBd = 'lafleur';         // Le nom de la base de données
    $utilisateur = 'root';      // Le nom d'utilisateur
    $motPasse = '';             // Le mot de passe

    try 
    {
        $connexion = new PDO('mysql:host='.$hote.'; dbname='.$nomBd, $utilisateur, $motPasse);
        $connexion->exec("SET CHARACTER SET utf8");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e)
    {
        // Code à effectuer si echec de la connexion
        echo 'Erreur : '.$e->getMessage().'<br>';
        echo 'N° : '.$e->getCode();
        die;
    }
    return $connexion;
}

function AfficherAlertes()
{
  if (isset($_SESSION['infoSucces']))
  {
      echo '<div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <i class="fa-solid fa-circle-check"></i> '.$_SESSION['infoSucces'].'
          </div>';
      unset($_SESSION['infoSucces']);
  }
  if (isset($_SESSION['infoEchec']))
  {
      echo '<div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <i class="fa-solid fa-triangle-exclamation"></i> '.$_SESSION['infoEchec'].'
          </div>';
      unset($_SESSION['infoEchec']);
  }
}

function AffecterInfoSucces($message)
{
   $_SESSION['infoSucces']=$message;
}

function AffecterInfoEchec($message)
{
   $_SESSION['infoEchec']=$message;
}
?>