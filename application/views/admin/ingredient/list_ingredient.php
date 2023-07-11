
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"> Liste de tous les Ingrédients </h3>
                </div>
              </div>
              <div class="row">
                <?php
                  foreach( $ingredients as $ingredient ){ ?>
                  <div class="card my-3 p-3 offset-1">
                      <div class="card-body">
                        <div class="body-title">
                          <div class="row">
                            Nom : <?php echo $ingredient['nom']; ?> 
                          </div>
                          <div class="row">
                            Category : <?php echo $ingredient['categorie']; ?> 

                          </div>
                        </div>
                        <div class="row my-3">
                          <div class="col-lg-3">
                            <a href="<?php echo site_url('admin/admin/modify_ingredient/'.$ingredient['idIngredient']); ?>" class="btn btn-primary"> Modifier </a>
                          </div>
                        </div>
                      </div>
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>