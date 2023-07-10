<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>  
    <form action="<?php echo site_url("user/User/insertion_user"); ?>" method="post">
        <p>Nom<input type="text" name="nom" id=""></p>
        <p>Prenom<input type="text" name="prenom" id=""></p>
        <p>dateNaissanc<input type="date" name="dateNaissance" id=""></p>
        <p>sexe<input type="text" name="sexe" id=""></p>
        <p>email<input type="email" name="email" id=""></p>
        <p>password<input type="password" name="password" id=""></p>
        <p>poids<input type="text" name="poids" id=""></p>
        <p>taille<input type="text" name="taille" id=""></p>
        <p><input type="submit" value="valider"></p>
    </form>
</body>
</html>