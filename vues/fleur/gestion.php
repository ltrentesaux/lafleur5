<div align="center"><h1> Gestion des fleurs </h1></div>

<br/>

<?php AfficherAlertes(); ?>

 
<!-- Tableau des fleurs -->

<table class="table table table-bordered table-hover">

<tr class='table-primary'>           

            <th> <b> Photo </th>

                    <th> <b> Référence </th>

                    <th> <b> Désignation </th>

                    <th> <b> Prix </th>

                    <th> Modifier </th> 

                    <th> Supprimer </th> 

 </tr>

    <?php

    while( $UneFleur = $lesfleurs->fetch() ) 

    { 

         echo "<tr> <td align='center'> <img src='".WEBROOT."public/images/fleurs/".$UneFleur->PhotoFl."' width='40'> </td>";

         echo "<td>".$UneFleur->RefFl."</td>";

         echo "<td>".$UneFleur->DesignFl."</td>";

         echo "<td align='right'> ".$UneFleur->PrixFl." €</td>";

         echo "<td align='center'> <a href='".WEBROOT."news/update/".$UneFleur->RefFl."'>

                     <img src='".WEBROOT."public/images/divers/Modifier.png'></a></td>";

         echo "<td align='center'> <a href='".WEBROOT."news/delete/".$UneFleur->RefFl."'>

                     <img src='".WEBROOT."public/images/divers/poubelle.png'></a></td> </tr>";

              

    } 

    ?>

</table>

 
<p align='center'><a class='btn btn-success' href='<?php echo WEBROOT."fleur/insert";?>'><img border=0 src='<?php echo WEBROOT."public/images/divers/Ajouter.png";?>'>&nbsp;Ajouter une fleur</a></p>


