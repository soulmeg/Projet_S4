
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"> Liste de tous les codes </h3>
                </div>
              </div>
              <div class="row">
                <?php
                  foreach( $codes as $code ){ ?>
                  <div class="card my-3 offset-1">
                      <div class="card-body">
                        <div class="body-title">
                          Nom : <?php echo $code['nom']; ?> , Valeur : <?php echo $code['valeur']; ?>, etat <?php echo (( $code['etat'] == 1 ) ? 'Utilisé' : 'Non Utilisé'); ?>
                        </div>
                        <div class="row my-3">
                          <div class="col-lg-3 ">
                            <a href="<?php echo site_url('admin/admin/modify_code/').'/'.$code['idCode']; ?>" class="btn btn-primary"> Modifier </a>
                          </div>
                          <div class="col-lg-3 offset-md-1">
                            <a href="<?php echo site_url('admin/admin/remove_code').'/'.$code['idCode']; ?>" class="btn btn-danger"> Supprimer </a>
                          </div>
                        </div>
                      </div>
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>