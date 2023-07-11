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
        .codes{
            height: 300px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="row content">
                <div class="col-lg-6 codes"  style="">
                    <h2>Codes Disponibles</h2>
                    <ul id="code-list codes" class="list-group">
                        <?php foreach ($code as $codes) { ?>
                            <li class="list-group-item code-item">
                                <span><?php echo $codes['nom']; ?></span>
                                <span class="code-price"><?php echo $codes['valeur'];?></span>
                            </li>
                        <?php } ?>
                    </ul>
                    
                </div>                    
                <div class="col-lg-6">
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
            
        </div>
        
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>
