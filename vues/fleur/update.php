  <h1>Modification d'une fleur </h1>

    <form method='POST' action='<?php echo WEBROOT."fleur/update";?>'>

        <table class='table table-bordered table-hover'>

 
            <thead> 

                <tr>  <th> <b> Référence </th> <td> <?php echo $UneFleur->RefFl; ?> </td> </tr>

                <tr>  <th> <b> Désignation </th>  <td> <input type='text' size='40' required name='Desig' value='<?php echo $UneFleur->DesignFl;?>'> </td> </tr>       

                <tr>  <th> <b> Prix </th>  <td> <input type='text' size='5' required name='Prix' value='<?php echo $UneFleur->PrixFl;?>'> € </td> </tr>  

                <tr>  <th> <b> Photo </th>  <td> <input type='text' requried size='40' name='Photo' value='<?php echo $UneFleur->PhotoFl;?>'> </td> </tr>      

                <tr>  <th> <b> Catégorie </th> <td>

                            <select name="cat">

                            <?php 

                                while( $UneCat = $lesCat->fetch() ) 

                                {   

                                    echo "<option value='".$UneCat->CodCat."'"; 

                                    if ($UneCat->CodCat==$UneFleur->CodCat) echo "selected"; 

                                    echo ">".$UneCat->LibCat."</option>";

                                } ?> 

                               </select>

                          </td> </tr>

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