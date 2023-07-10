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
                        <button class="btn btn-primary btn-sm detail-button" data-toggle="modal" data-target="#detailModal" data-plat="Plat 1" data-ingredients="Ingrédient 1, Ingrédient 2, Ingrédient 3">Détail du plat</button>
                    </li>
                    <li class="list-group-item">
                        Plat 2
                        <button class="btn btn-primary btn-sm detail-button" data-toggle="modal" data-target="#detailModal" data-plat="Plat 2" data-ingredients="Ingrédient 4, Ingrédient 5, Ingrédient 6">Détail du plat</button>
                    </li>
                    <li class="list-group-item">
                        Plat 3
                        <button class="btn btn-primary btn-sm detail-button" data-toggle="modal" data-target="#detailModal" data-plat="Plat 3" data-ingredients="Ingrédient 7, Ingrédient 8, Ingrédient 9">Détail du plat</button>
                    </li>
                    <li class="list-group-item">
                        Plat 4
                        <button class="btn btn-primary btn-sm detail-button" data-toggle="modal" data-target="#detailModal" data-plat="Plat 4" data-ingredients="Ingrédient 10, Ingrédient 11, Ingrédient 12">Détail du plat</button>
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
    
    <div id="detailModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détail du plat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 id="platTitle"></h4>
                    <ul id="ingredientList" class="list-group"></ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $('#detailModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var plat = button.data('plat');
            var ingredients = button.data('ingredients').split(', ');
            var modal = $(this);
            modal.find('#platTitle').text(plat);
            modal.find('#ingredientList').empty();
            ingredients.forEach(function (ingredient) {
                var listItem = $('<li>', { class: 'list-group-item', text: ingredient });
                modal.find('#ingredientList').append(listItem);
            });
        });
    </script>
</body>
</html>
