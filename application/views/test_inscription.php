<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>register1</title>
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
                <h1 style="text-align: center;">Inscription</h1>
                <form action="<?php echo site_url("user/User/process_register1"); ?>" method="post">
                      <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">First Name</label>
                        <input name="nom" type="text" value="Rakotonarivo" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Last Name</label>
                        <input type="text" name="prenom" value="Megane" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                      </div>
                      <div class="mb-3">
                        <label for="birthdateInput" class="form-label">Birth Date</label>
                        <input type="date" name="dateNaissance" value="2020-02-02" class="form-control" id="birthdateInput" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="poidsInput"  class="form-label">Poids</label>
                        <input type="number" name="poids" value="10" class="form-control" id="poidsInput">
                      </div>
                      <div class="mb-3">
                        <label for="tailleInput" name="taille" class="form-label">Taille</label>
                        <input type="text"  name="taille" value="10" class="form-control" id="tailleInput">
                      </div>
                      <div class="mb-4">
                        <label class="form-label">Gender</label>
                        <div class="radio-container">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="maleRadio" value="g">
                                <label class="form-check-label" for="maleRadio">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="femaleRadio" value="f">
                                <label class="form-check-label"  for="femaleRadio">Female</label>
                            </div>
                        </div>
                      </div>
                      <button></button>
                      <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                </form>
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