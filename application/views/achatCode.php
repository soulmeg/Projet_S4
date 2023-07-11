<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>nano</title>
  <!-- <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" /> -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.min.css');?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css');?>"/>
</head>
<body>
    <h4>Id : <?php echo $user_session; ?></h4>
    Achat De code 
    <ul>
        <?php foreach ($code as $codes) { ?>
            <li> 
                <?php echo $codes['nom'] ; ?>
                <a href="<?php echo site_url("user/User/validation/".$codes['idCode']."/".$user_session); ?>"><?php echo $codes['valeur']?></a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>