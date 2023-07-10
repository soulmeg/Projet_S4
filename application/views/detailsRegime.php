<!DOCTYPE html>
<html>
<head>
    <title>Régime 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .list-group-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: none;
            padding: 10px;
            background-color: #f8f9fa;
            margin-bottom: 10px;
        }
        
        .detail-button {
            margin-left: 10px;
        }
        
        .activity-list {
            list-style-type: none;
            padding-left: 0;
            margin-top: 20px;
        }
        
        .activity-list-item {
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            background-color: #d1ecf1;
            margin-bottom: 10px;
        }
        
        .activity-list-item img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .export-button {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Régime 1</h2>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="text-right mb-3">
                    <button class="btn btn-primary export-button">Export PDF</button>
                </div>
                <h3 class="mt-4">Liste des plats</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        Plat 1
                        <a href="<?php echo base_url('user/User/getPlats/1');?>"> <button class="btn btn-primary btn-sm detail-button">Détail du plat</button></a>
                    </li>
                    <li class="list-group-item">
                        Plat 2
                        <button class="btn btn-primary btn-sm detail-button">Détail du plat</button>
                    </li>
                    <li class="list-group-item">
                        Plat 3
                        <button class="btn btn-primary btn-sm detail-button">Détail du plat</button>
                    </li>
                    <li class="list-group-item">
                        Plat 4
                        <button class="btn btn-primary btn-sm detail-button">Détail du plat</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h3 class="mt-4">Liste des activites sportives</h3>
                <ul class="list-group">
                    <li class="list-group-item">Activite 1 </li>
                    <li class="list-group-item">Activite 2 </li>
                    <li class="list-group-item">Activite 3</li>
                    <li class="list-group-item">Activite 4</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
