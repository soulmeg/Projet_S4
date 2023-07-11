<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landing Page</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/landingPage.css'); ?>" />
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
     
        <div class="container-fluid">
            <div class="container-fluid">
            <!-- <?php echo $user_session;?> -->
              <div class="card">
                <div class="card-body">
                    <h2 class="card-title fw-semibold mb-4">Nos regimes</h2>

                    <?php if(count($regimes) !=0 ){?>
                    <?php for ($i=0; $i < count($regimes); $i++) {  ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card presentation-card">
                                <img src="../../assets/images/fitness.jpg" class="card-img-top presentation-card" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $regimes[$i]['nom']; ?></h5>
                                    <h5 class="card-title"><?php echo $poids_session;?></h5>
                                    <p class="card-text">
                                        Prix unitaire pour <?php echo $regimes[$i]['duree']; ?>jours  : <?php echo $regimes[$i]['PrixRegime']; ?> Ar
                                    </p>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="<?php echo base_url('user/Regime/getRegimes/'.$regimes[$i]['idRegime'].'/1000');?>" class="btn btn-primary">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php }?>
                </div>
            </div>
        </div>            
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/apexcharts.min.js'); ?>"></script>
    <!-- <script src="../../assets/js/simplebar.js"></script> -->
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/sidebarmenu.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
</body>
</html>
