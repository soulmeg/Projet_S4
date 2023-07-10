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
    </style>
</head>
<body>
    <div class="container">
        <h2>Liste de codes avec prix</h2>
        <ul id="code-list" class="list-group">
            <li class="list-group-item code-item">
                <span>Code 1</span>
                <span class="code-price">$10</span>
            </li>
            <li class="list-group-item code-item">
                <span>Code 2</span>
                <span class="code-price">$20</span>
            </li>
            <li class="list-group-item code-item">
                <span>Code 3</span>
                <span class="code-price">$30</span>
            </li>
            <li class="list-group-item code-item">
                <span>Code 4</span>
                <span class="code-price">$40</span>
            </li>
        </ul>
        <br>
        <br>
        <div>
            <h2>Validation de code</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="code-input" placeholder="Entrez le code">
            </div>
            <button type="button" class="btn btn-primary" >Valider</button>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>
