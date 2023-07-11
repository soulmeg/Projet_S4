
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"> Liste de tous les Régimes </h3>
                </div>
              </div>
              <div class="row">
                <?php
                  foreach( $regimes as $regime ){ ?>
                  <div class="card my-3 p-3 col-lg-5 offset-1">
                      <div class="card-body">
                        <div class="body-title">
                          <div class="row">
                            Nom : <?php echo $regime['nom']; ?> , Apport : <?php echo $regime['apport'] ?>
                          </div>
                        </div>
                        <div class="row my-3">
                          <div class="col-lg-6">
                            <a href="<?php echo site_url('admin/admin/see_regime/'.$regime['idRegime']); ?>" class="btn btn-primary"> Voir le regime </a>
                          </div>
                        </div>
                      </div>
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>