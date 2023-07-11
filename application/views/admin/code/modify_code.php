    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"> Modifier le code : <?php echo $code['nom']; ?> </h3>
                </div>
              </div>
              <div class="row">
                
                <div class="card my-3">
                  <form action="<?php echo site_url('admin/admin/modify_codes').'/'.$code['idCode']; ?>" method="POST" class="form">
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Nom du Code ( identifiant ) </label>
                      </div>
                      <div class="col-lg-5">
                        <input type="text" class="form-control" name="nom" value="<?php echo $code['nom']; ?>" id="">
                      </div>
                    </div>
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Montant du code </label>
                      </div>
                      <div class="col-lg-5">
                        <input class="form-control" type="text" value="<?php echo $code['valeur']; ?>" name="montant" id="">
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