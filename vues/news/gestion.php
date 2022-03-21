<?php require_once('modeles/m_news.php');
$lesnews=getLesNews();
?>
<div align="center">
    <img src="<?php echo WEBROOT.'public/images/Divers/news-64.png' ?>">
</div>
<h3 align="center"> Gestion des News </h3>
<?php AfficherAlertes(); ?>
<table align="center" width="90%" cellpaddin="4" border="1">
    
    <thead>
        <tr style="background-color: lightblue">
            <th> <b> Titre </th>
            <th> <b> Date </th>
            <th> <b> Modifier </th>
            <th> <b> Supprimer </th>
        </tr>
    </thead>
    <body>
        <?php
            while($unenews = $lesnews->fetch())
            {
                echo"<tr>
                <td>".$unenews->TitreNews."</td>
                <td>".$unenews->DateNews."</td>
                <td><a href='".WEBROOT."news/update/".$unenews->NumNews."'><img src='".WEBROOT."public/images/gestion/Modifier.png'></td>
                <td><a href='".WEBROOT."news/delete/".$unenews->NumNews."'><img src='".WEBROOT."public/images/gestion/poubelle.png'></td>
                </tr>";
            }
        ?>
</table>
<br>
<div align="center">
    <button type="button" class="btn btn-success"><a  style="color:yellow" href="<?php echo WEBROOT.'news/insert'; ?>"><img src="<?php echo WEBROOT.'public/images/gestion/Ajouter.png'; ?>">Ajouter une news </a></button>
</div>
    