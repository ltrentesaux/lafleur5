
<div align="center">
    <h2>Modification d'une news </h2>
        <form method = 'POST' action=''>
            <table  class="table table-bordered" border=3px >
                <tr>
                    <td> <b> Titre </b> </td>
                    <td> <input type="text" name="titre" required> </td>
                </tr>

                <tr>
                    <td> <b> Date </b> </td>
                    <td> <input type="date" name="date" value="<?php echo date("Y-m-d"); ?>"> </td>
                </tr>

                <tr>
                    <td> <b> Contenu </b> </td>
                    <td> <textarea name="contenu" required ></textarea> </td>
                </tr>

                <tr>
                    <td> <b> Image </b> </td>
                    <td> <input type="text" name="image" required> </td>
                </tr>
            </table>
            <input type="image" img src="public/images/gestion/Enregistrer.png" class="btn btn-success">
            <a button type="button" class="btn btn-danger" href="/lafleur5/news/gestion"><img src="public/Images/Divers/Annuler.png"></a>  
        </form>
</div>