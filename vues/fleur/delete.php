   <h1>Suppression d'une fleur </h1>

    <form method='POST' action='<?php echo WEBROOT."fleur/delete"; ?>'>

        <table class='table table-bordered table-hover'>

           

            <thead> <tr>  <th> <b> Référence </th> <td> <?php echo $UneFleur->RefFl; ?> </td> </tr>

                    <tr>  <th> <b> Désignation </th>  <td> <?php echo $UneFleur->DesignFl;?> </td> </tr> 

                    <tr>  <th> <b> Prix </th>  <td> <?php echo $UneFleur->PrixFl;?> €</td> </tr>  

                    <tr>  <th> <b> Photo </th> <td> <?php echo $UneFleur->PhotoFl;?> </td> </tr>                        

                    <tr>  <th> <b> Catégorie </th>  <td>  <?php echo getUneCategorie($UneFleur->CodCat);?> </td> </tr>  

 
            </thead>

        </table>

        <input type='hidden' name='Ref' value='<?php echo $UneFleur->RefFl;?>'>

        <div align='center'>

        <br/>

        <input class='btn btn-success' type='image' src='<?php echo WEBROOT."public/images/divers/Enregistrer.png";?>'> 

            <a class='btn btn-danger' href='<?php echo WEBROOT."/fleur/gestion";?>'><img border=0 src='<?php echo WEBROOT."public/images/divers/Annuler.png";?>'></a>

        </div> 

</form>

<br/><br/>