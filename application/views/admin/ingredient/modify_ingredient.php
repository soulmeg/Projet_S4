    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"> Modifier l'Ingredient : <?php echo $ingredient['nom']; ?> </h3>
                </div>
              </div>
              <div class="row">
                
                <div class="card my-3">
                  <form action="<?php echo site_url('admin/admin/mod_ingredient/'.$ingredient['idIngredient']); ?>" method="POST" class="form">
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Nom de l'ingredient </label>
                      </div>
                      <div class="col-lg-5">
                        <input type="text" value="<?php echo $ingredient['nom']; ?>" class="form-control" name="nom" id="">
                      </div>
                    </div>
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Categorie </label>
                      </div>
                      <div class="col-lg-5">
                        <select name="categorie" id="" class="form-select">
                            <?php 
                              foreach ($categories as $category) { ?>
                                  <option value="<?php echo $category['idCategorie']; ?> "> <?php echo $category['nom']; ?> </option>  
                            <?php } ?>                          
                        </select>
                      </div>
                    </div>
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for=""  class="form-label"> Apport </label>
                      </div>
                      <div class="col-lg-5">
                        <input type="text" value="<?php echo $ingredient["apport"]; ?>" class="form-control" name="apport" id="">
                      </div>
                    </div>
                    <div class="my-3 row p-3">
                      <div class="col-lg-5">
                        <label for="" class="form-label"> Unite </label>
                      </div>
                      <div class="col-lg-5">
                        <input type="text" value="<?php echo $ingredient['unite']; ?>" class="form-control" name="unite" id="">
                      </div>
                    </div>
                    <div class="my-3 row mx-auto">
                      <input type="submit" class="btn btn-primary p-3" value="Modifier l'ingredient">
                    </div>
                  </form>  
                </div>

              </div>
            </div>
          </div>
        </div>