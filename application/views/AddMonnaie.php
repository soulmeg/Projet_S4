<!DOCTYPE html>
<html>
<head>
    <title>Affichage de codes avec validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .code-item {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
        }
        
        .code-price {
            justify-self: end;
        }

        .content{
            margin-left:20%;
            width: 80%;
        }
    </style>
</head>
<body>

    <div class="container content">
        <?php if(isset($user_session)) {
            echo $user_session;
        }
        else{
            echo "mbola tsy tonga le idUser";
        }
        ?>       
        <?php  echo "etatCode: ".$etat; ?>
        <h2>Codes Disponibles</h2>
        <ul id="code-list" class="list-group">
            <?php foreach ($code as $codes) { ?>
                <li class="list-group-item code-item">
                    <span><?php echo $codes['nom']; ?></span>
                    <span class="code-price"><?php echo $codes['valeur'];?></span>
                </li>
            <?php } ?>
        </ul>
        <br>
        <br>
        <div>
            <h2>Validation de code</h2>
            <form action="<?php echo site_url("user/User/validationCode"); ?>" method="POST" class="form">
                <div class="form-group">
                    <input type="text" class="form-control" id="code-input" placeholder="Entrez le code" namespace name="nomCode">
                </div>
                <?php if(isset($erreur)) { ?>
                    <p> <?php echo $erreur; ?> </p>
                 <?php } ?>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>
