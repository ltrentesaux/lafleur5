
 <?php 
 function getToutesFleurs()
 {
	  $connexion=BDDConnexionPDO();
      $sql="SELECT * FROM fleur";
      $catalogue=$connexion->query($sql);
      $catalogue->setFetchMode(PDO::FETCH_OBJ);
      return $catalogue;
 }

 function setAjoutFleur($refFl, $designFl,$prixFl, $photoFl) 
{ 
    try { $conn = BDDConnexionPDO();
    $reqInsert=$conn->prepare("INSERT INTO news (TitreNews,ContenuNews,DateNews,ImageNews) VALUES (?,?,?,?)");
    $reqInsert->execute(array($titre, $contenu, $date, $image));
    return $reqInsert;
    }
    catch (PDOException $e) 
{  
    die('Erreur' .$e->getMessage());
}
}


function modifFleur($refFl, $designFl,$prixFl, $photoFl) 
{ 
    try { $conn = BDDConnexionPDO();
    $reqInsert=$conn->prepare("UPDATE fleur SET refFl=?,designFl=?, SET prixFl=?, photoFl=? WHERE NumNews=?");
    $reqInsert->execute(array($refFl, $designFl,$prixFl, $photoFl));
    return $reqInsert;
    }
    catch (PDOException $e) 
{  
    die('Erreur' .$e->getMessage());
}
}



function deleteFleur($refFl, $designFl,$prixFl, $photoFl) 
{ 
    try { $conn = BDDConnexionPDO();
    $reqInsert=$conn->prepare("DELETE FROM news WHERE NumNews=?");
    $reqInsert->execute(array($refFl, $designFl,$prixFl, $photoFl));
    return $reqInsert;
    }
    catch (PDOException $e) 
{  
    die('Erreur' .$e->getMessage());
}
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
