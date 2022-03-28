
    <div class="row">

 
      <div class="col-lg-3">

 
        <h1 class="my-4">Catalogue</h1>

        <div class="list-group">

            <a href='<?php echo WEBROOT."fleur/index";?>' class='list-group-item'>Toutes</a>

            <?php // Liste des catégories

       

            while( $UneCat = $lescategs->fetch() ) 

            { 

              echo "<a href='".WEBROOT."fleur/index/".$UneCat->CodCat."' class='list-group-item'>".$UneCat->LibCat."</a>"; 

            } 

            ?>

        </div>

      </div> <!-- /.col-lg-3 -->

 
      <div class="col-lg-9">

    

        <div class="row">

        <?php 

            

          while($UneFleur=$lesFleurs->fetch(PDO::FETCH_OBJ))

          {

          ?>

              <div class="col-lg-4 col-md-6 mb-4">

                <div class="card h-100">

                  <a href="#"><img class="card-img-top" src="<?php echo WEBROOT."public/images/fleurs/".$UneFleur->PhotoFl;?>" alt=""></a>

                  <div class="card-body">

                    <h4 class="card-title">

                      <a href="#"><?php echo $UneFleur->DesignFl;?></a>

                    </h4>

                    <h5><?php echo $UneFleur->PrixFl;?> €</h5>

                    <p class="card-text"></p>

                  </div>

                  <div class="card-footer">

                   <a href='<?php echo WEBROOT."Panier/ajout/".$UneFleur->RefFl;?>' class="btn btn-success"><i class="fas fa-cart-plus"></i> Ajouter</a>

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