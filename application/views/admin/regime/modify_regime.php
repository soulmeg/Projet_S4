    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"> Modifier le Régime : <?php echo $regime['nom']; ?> </h3>
                </div>
              </div>
    
              <form action="<?php echo site_url('admin/admin/add_regime'); ?>" method="POST" class="form">
              <div class="row d-flex">
                <div class="card my-3 col-lg-5">
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Nom du Régime </label>
                      </div>
                      <div class="col-lg-5">
                        <input type="text" value="<?php echo $regime['nom']; ?>" class="form-control" name="nom" id="">
                      </div>
                    </div>
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Apport moyen </label>
                      </div>
                      <div class="col-lg-5">
                        <input type="text"class="form-control" value="<?php echo $regime['apport']; ?>" name="apports" id="">
                      </div>
                    </div>
                </div>

                  <div class="card my-3 col-lg-5 offset-1">
                    <div class="my-3 details-container">
                      <table class="table">
                        <thead>
                          <th> Plats Composants </th>
                          <th> </th>
                        </thead>
                        <tbody id="details-container">
                          <?php
                            for ($i=0; $i < count($regime['plats']) ; $i++) { ?>
                                <tr class="input-group-sm" id="<?php echo ($i == 0 ) ? "original" : ""; ?>">
                                  <td>
                                    <select name="plats[]" id="original" class="form-select">
                                      <?php
                                        foreach ($plats as $plat) { ?>
                                          <option <?php echo ($regime['plats'][$i]['idPlat'] == $plat['idPlat']) ? "selected" : "" ?> value="<?php echo $plat['idPlat']; ?>"> <?php echo $plat['nom']; ?> </option>
                                        <?php } ?>
                                    </select>
                                  </td>
                                </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td></td>
                            <td>
                              <a onclick="clone()" class="btn btn-dark"> Add </a>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>   
                  </div> 
              </div>
              <div class="row d-flex">
                  <div class="card my-3 col offset-1">
                    <div class="my-3 details-container">
                      <h3> Tranche de Prix </h3>
                      <table class="table">
                        <thead>
                          <th> Durée ( jours ) </th>
                          <th> Apport </th>
                          <th> Prix </th>
                        </thead>
                        <tbody id="details-container-2">
                          <?php 
                            for ($i=0; $i < count($regime['tranches']) ; $i++) {  ?>
                              <tr class="input-group-sm" id="<?php echo ( $i == 0 ) ? "original-2" : "" ?>">
                                <td>
                                    <input type="text" class="form-control" value="<?php echo $regime['tranches'][$i]['duree']; ?>" name="duree[]" id="">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $regime['tranches'][$i]['apport']; ?>" class="form-control" name="apport[]" id="">
                                </td>
                                <td>
                                  <input type="text" value="<?php echo $regime['tranches'][$i]['PrixRegime']; ?>" class="form-control" name="prix[]" id="">
                                </td>
                              </tr>
                            <?php }
                          ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td></td>
                            <td>
                              <a onclick="cloneTime()" class="btn btn-dark"> Add </a>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <div class="my-3 row mx-auto">
                      <input type="submit" class="btn btn-primary p-3" value="Ajouter le regime">
                    </div>
                    
                  </div>
                </form>  
              </div>
            </div>
          </div>
        </div>