<?php
function getLesNews()
{
        $connexion=BDDConnexionPDO();
         $sql="SELECT * FROM NEWS";
         $news=$connexion->query($sql);
         $news->setFetchMode(PDO::FETCH_OBJ);
         return $news;
}

// Ajoute une nouvelle news dans la table 
function setAjoutNews($titre,$contenu,$date,$image) 
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


function modifNews($titre,$contenu,$date,$image,$num) 
{ 
    try { $conn = BDDConnexionPDO();
    $reqInsert=$conn->prepare("UPDATE news SET TitreNews=?,ContenuNews=?, SET DateNews=?, ImageNews=?, NumNews=? WHERE NumNews=?");
    $reqInsert->execute(array($titre, $contenu, $date, $image, $num));
    return $reqInsert;
    }
    catch (PDOException $e) 
{  
    die('Erreur' .$e->getMessage());
}
}



function deleteNews($titre,$contenu,$date,$image) 
{ 
    try { $conn = BDDConnexionPDO();
    $reqInsert=$conn->prepare("DELETE FROM news WHERE NumNews=?");
    $reqInsert->execute(array($titre, $contenu, $date, $image));
    return $reqInsert;
    }
    catch (PDOException $e) 
{  
    die('Erreur' .$e->getMessage());
}
}

?>