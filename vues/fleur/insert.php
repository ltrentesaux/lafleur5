<h1>Ajout d'une fleur </h1>

<form method='POST' action='<?php echo WEBROOT."fleur/insert"; ?>'>

        <table class='table table-bordered table-hover'>

           

            <thead> <tr>  <th> <b> Référence </th>  <td> <input type='text' size='40' name='Ref' required> </td> </tr>       

                    <tr>  <th> <b> Désignation </th>  <td> <input type='text' size='40' name='Desig' required> </td> </tr>

                    <tr>  <th> <b> Prix </th>  <td> <input type='text' size='5' name='Prix' required> €</td> </tr>

                    <tr>  <th> <b> Photo </th>  <td> <input type='text' size='40' name='Photo' required> </td> </tr>

                    <tr>  <th> <b> Catégorie </th>  <td> 

                                <select name="cat">

                                <?php 

                                   while( $UneCat = $lesCat->fetch() ) 

                                   {   

                                       echo "<option value='".$UneCat->CodCat."'>".$UneCat->LibCat."</option>";

                                   } ?> 

                                 </select>

                                </td> </tr>                 

            </thead>

        </table>

        <div align='center'>

        <br/>

        <input class='btn btn-success' type='image' src='<?php echo WEBROOT."public/images/divers/Enregistrer.png";?>'> 

         <a class='btn btn-danger' href='<?php echo WEBROOT."/fleur/gestion";?>'><img border=0 src='<?php echo WEBROOT."public/images/divers/Annuler.png";?>'></a>

                                </div> 

</form>

<br/><br/>