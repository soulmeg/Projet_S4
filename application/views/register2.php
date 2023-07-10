<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>register2</title>
  <link rel="stylesheet" href="../../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <h1 style="text-align: center;">Register</h1>
                <div>
                <?php
                $register1Data = $this->session->userdata('register1_data');

                if ($register1Data) {
                    $nom = $register1Data['nom'];
                    $prenom = $register1Data['prenom'];
                    $dateNaissance = $register1Data['dateNaissance'];
                    $poids = $register1Data['poids'];
                    $taille = $register1Data['taille'];
                    $sexe = $register1Data['sexe'];
                ?>
                <form action="<?php echo site_url("user/User/insertion_user"); ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" value="rakotonarivomegane@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" value="meg" class="form-control" id="passwordInput" name="password">
                        </div>

                        <!-- Afficher les données du formulaire précédent -->
                        <input type="hidden" name="nom" value="<?php echo $nom; ?>">
                        <input type="hidden" name="prenom" value="<?php echo $prenom; ?>">
                        <input type="hidden" name="dateNaissance" value="<?php echo $dateNaissance; ?>">
                        <input type="hidden" name="poids" value="<?php echo $poids; ?>">
                        <input type="hidden" name="taille" value="<?php echo $taille; ?>">
                        <input type="hidden" name="sexe" value="<?php echo $sexe; ?>">

                        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                    </form>
                <?php
                } else {
                    echo "Missing register1 data.";
                }
                ?>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>