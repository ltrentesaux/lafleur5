
<div class="row">
	<div class="col-lg-12">
		<div id="demo" class="carousel slide my-4" data-bs-ride="carousel">
			<!-- Indicators/dots -->
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
				<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
				<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
			</div>
			<!-- The slideshow/carousel --> 
			<div class="carousel-inner">
			<?php 
			
				$nb=1;
				while ($news = $lesNews->fetch())
				{?>
					<div class="carousel-item <?php if ($nb==1) echo 'active';?>">
						<img src = "<?php echo WEBROOT."public/images/News/".$news->ImageNews; ?>" alt = "Los Angeles" class = "d-block img-fluid">
        				<div class="carousel-caption d-none d-md-block">
            				<div class = "mr-5 ml-5">
								<h5 class = "bg-success bg-gradient"><?php echo $news->TitreNews; ?></h5>
								<p class = "bg-success bg-gradient"><?php echo $news->ContenuNews; ?></p>
							</div>
          				</div>
					</div>
				<?php 
			    $nb++;	
			}
				$lesNews->closeCursor();
			?>
			</div>
			  
			  <!-- Left and right controls/icons -->
			  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </button>
			</div>
      </div>
    </div>
</div>