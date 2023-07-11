    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"> Modifier le plat : <?php echo $plat['nom']; ?> </h3>
                </div>
              </div>
    
              <form action="<?php echo site_url('admin/admin/modify_plat/'.$plat['idPlat']); ?>" method="POST" class="form">
              <div class="row d-flex">
                <div class="card my-3 col-lg-5">
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Nom du plat </label>
                      </div>
                      <div class="col-lg-5">
                        <input type="text" class="form-control" value="<?php echo $plat['nom']; ?>" name="nom" id="">
                      </div>
                    </div>
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Apport moyen </label>
                      </div>
                      <div class="col-lg-5">
                        <input type="text"class="form-control" value="<?php echo $plat['apport']; ?>" name="apport" id="">
                      </div>
                    </div>
                  </div>

                  <div class="card my-3 col-lg-5 offset-1">
                    <div class="my-3 details-container">
                      <table class="table">
                        <thead>
                          <th> Ingredients </th>
                          <th> </th>
                        </thead>
                        <tbody id="details-container">
                          <?php 
                          $count = 0;
                            foreach($plat['details'] as $detail){ 
                              ?>
                              <tr class="input-group-sm" id="<?php echo ( $count == 0 ) ? "original" : "" ?>">
                                <td>
                                  <select name="ingredient[]"  class="form-select">
                                    <?php
                                      foreach ($ingredients as $ingredient) { ?>
                                        <option <?php echo ($ingredient['idIngredient'] == $detail['idIngredient']) ? "selected" : ""   ?> value="<?php echo $ingredient['idIngredient']; ?>"> <?php echo $ingredient['nom']; ?> </option>
                                      <?php 

                                    } ?>
                                  </select>
                                  <input type="hidden" name="idDetails[]" value="<?php echo $detail['idDetailsPlat']; ?>" >
                                </td>
                              </tr>
                            <?php 
                            $count = $count + 1;
                          } ?>
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
                    <div class="my-3 row mx-auto">
                      <input type="submit" class="btn btn-primary p-3" value="Ajouter le plat">
                    </div>
                    
                  </div>
                </form>  

              </div>
            </div>
          </div>
        </div>