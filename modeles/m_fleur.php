
 <?php 
 function getToutesFleurs()
 {
	  $connexion=BDDConnexionPDO();
      $sql="SELECT * FROM fleur";
      $catalogue=$connexion->query($sql);
      $catalogue->setFetchMode(PDO::FETCH_OBJ);
      return $catalogue;
 }

function getFleurs($choix)
 {
	  $connexion=BDDConnexionPDO();
      $sql="SELECT * FROM fleur WHERE codCat = ?";
      $catalogue=$connexion->prepare($sql);
      $catalogue->execute(array($choix));
      $catalogue->setFetchMode(PDO::FETCH_OBJ);
      return $catalogue;
 }
 ?>
