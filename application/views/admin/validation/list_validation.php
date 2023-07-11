
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold"> Liste de tous les validations </h3>
                </div>
              </div>
              <div class="row">
                <table class="table">
                  <thead>
                    <th>Id Validation</th>
                    <th>Utilisateur</th>
                    <th>Code</th>
                    <th>Montant</th>
                    <th></th>
                    <th></th>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($validations as $validation) { ?>
                        <tr>
                          <td> <?php echo $validation['idValidation']; ?> </td>
                          <td> <?php echo $validation['username']." ".$validation['lastname']; ?> </td>
                          <td> <?php echo $validation['code']; ?> </td>
                          <td> <?php echo $validation['montant']; ?> </td>

                          <?php 
                            if( $validation['etat'] == 0 ){ ?>
                              <td> 
                                <a href="<?php echo site_url('admin/admin/reject_validation/'.$validation['idValidation']); ?>" class="btn btn-danger"> Rejeter </a>
                              </td>

                              <td> 
                                <a href="<?php echo site_url('admin/admin/accept_validation/'.$validation['idValidation']).'/'.$validation['code'].'/'.$validation['montant'].'/'.$validation['idUser']; ?>" class="btn btn-success "> Accepter </a>
                              </td>
                            <?php }
                              else if($validation['etat'] == 1){ ?>
                                    <td></td>    
                                    <td class="btn btn-success disabled">
                                        Demande Validée
                                    </td>    
                            <?php } 
                              else if( $validation['etat'] == -1 ){ ?>
                                    <td class="btn btn-danger disabled">
                                        Demande Rejetée
                                    </td>    
                                <td></td>    
                              <?php } ?>
                        </tr>
                    <?php } ?>
                  </tbody>
                </table>    

              </div>
            </div>
          </div>
        </div>