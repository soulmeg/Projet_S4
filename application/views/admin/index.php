<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>nano</title>
  <!-- <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" /> -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>" />
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
            <div class="card mb-2 p-3">
              <div class="card-body">
                <!-- <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logo.png" width="180" alt="">
                </a> -->
                <h1 style="text-align: center;">Log In</h1>
                <form class="form" method="POST" class="my-3" action="<?php echo site_url('user/user/login'); ?>">
                  <div class="text-dark text-center">
                    Enter you credentials to continue
                  </div>
                  <div class="my-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwordInput" name="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <input class="form-check-input primary" type="checkbox" value="" id="showPasswordCheckbox">
                        <label class="form-check-label text-dark" for="passwordInput">
                        Show Password
                      </label>
                    </div>
                  </div>
                  <div class="my-3">
                    <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Log in">
                  </div>
                  <!-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">LOG IN</a> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
  <script>
  // Récupérer les éléments du DOM
const showPasswordCheckbox = document.getElementById('showPasswordCheckbox');
const passwordInput = document.getElementById('passwordInput');

// Écouter l'événement "change" de la case à cocher
showPasswordCheckbox.addEventListener('change', function() {
  // Vérifier si la case est cochée
  if (showPasswordCheckbox.checked) {
    // Afficher le texte du mot de passe
    passwordInput.type = 'text';
  } else {
    // Masquer le texte du mot de passe
    passwordInput.type = 'password';
  }
});

  </script>
</body>
</html>