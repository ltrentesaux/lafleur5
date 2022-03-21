<?php 
 function getLesCategories()
 {
	  $connexion=BDDConnexionPDO();
         $sql="SELECT * FROM categorie";
         $catalogue=$connexion->query($sql);
         $catalogue->setFetchMode(PDO::FETCH_OBJ);
         return $catalogue;
 }
