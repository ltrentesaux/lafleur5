
    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Nos Produits</h1>

        <?php 
         require_once("modeles/m_categorie.php");
         $catalogue=getLesCategories();
        ?>
         <div class="list-group">
         <a href="index.php?page=catalogue" class="list-group-item">Toutes</a>
        <?php 
        while ($uneFleur = $catalogue->fetch())
        {
                  
            echo '<a href="index.php?page=catalogue&categ='.$uneFleur->codCat.'" class="list-group-item">'.$uneFleur->libCat.'</a>';
            
        }
        ?>
        </div>
      </div>
      <!-- /.col-lg-3 -->






      <?php
        if (isset($_GET["categ"])==false)
        {
            require_once("modeles/m_fleur.php");
             $catalogue=getToutesFleurs(); 
     
      }
      else 
	 {
        require_once("modeles/m_fleur.php");
         $catalogue=getFleurs($_GET["categ"]);
     }

      ?>
       <div class="col-lg-9">
        
           <div class="row">
       

      <?php 
        while ($uneFleur = $catalogue->fetch())
        {
            
?>                
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="public/images/Fleurs/<?php echo $uneFleur->photoFl; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $uneFleur->designFl; ?></a>
                </h4>
                <h5><?php echo $uneFleur->prixFl; ?> €</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer">
                <div class="text-muted"> <button type="button" class="btn btn-success"> <i class="fas fa-cart-plus"></i> Ajouter </button> </div>
              </div>
            </div>
          </div>

          <?php } ?>


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->