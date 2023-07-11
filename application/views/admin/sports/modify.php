    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"> Modifier le sport : <?php echo $sport['nom']; ?> </h3>
                </div>
              </div>
              <div class="row">
                
                <div class="card my-3">
                  <form action="<?php echo site_url('admin/admin/update_sport').'/'.$sport['idActivite']; ?>" method="POST" class="form">
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Nom de l'activite </label>
                      </div>
                      <div class="col-lg-5">
                        <input type="text" class="form-control" name="nom" value="<?php echo $sport['nom']; ?>" id="">
                      </div>
                    </div>
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Perte apporté </label>
                      </div>
                      <div class="col-lg-5">
                        <input class="form-control" type="text" value="<?php echo $sport['perte']; ?>" name="perte" id="">
                      </div>
                    </div>
                    <div class="my-3 row mx-auto">
                      <input type="submit" class="btn btn-primary p-3" value="Modifier le code">
                    </div>
                  </form>  
                </div>

              </div>
            </div>
          </div>
        </div>