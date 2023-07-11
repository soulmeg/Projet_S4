
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"> Liste de tous les Activités sportives </h3>
                </div>
              </div>
              <div class="row">
                <?php
                  foreach( $sports as $sport ){ ?>
                  <div class="card my-3 offset-1">
                      <div class="card-body">
                        <div class="body-title">
                          Nom : <?php echo $sport['nom']; ?> 
                        </div>
                        <div class="row my-3">
                          <div class="col-lg-3">
                            <a href="<?php echo site_url('admin/admin/modify_sport').'/'.$sport['idActivite']; ?>" class="btn btn-primary"> Modifier </a>
                          </div>
                          <div class="col-lg-3 offset-md-2">
                            <a href="<?php echo site_url('admin/admin/remove_sport').'/'.$sport['idActivite']; ?>" class="btn btn-danger"> Supprimer </a>
                          </div>
                        </div>
                      </div>
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>