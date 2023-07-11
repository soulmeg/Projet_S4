<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Codes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/admin/add_code'); ?>">Ajouter Codes</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/admin/list_code'); ?>">Listes des Codes</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Utilisateurs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/admin/list_user'); ?>">Listes des Utilisateurs</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Effacer des Utilisateurs</a></li> -->
                <!-- <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Regimes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/admin/list_regimes'); ?>">Listes des Regimes</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/admin/add_regimes'); ?>">Ajouter des Regimes</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Activités Sportives</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/admin/list_sport'); ?>">Liste des activités</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/admin/add_sport'); ?>">Ajouter une activité</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/admin/list_validation'); ?>" >
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">
                  Validation des codes
              </span>
              <!-- <i class="menu-arrow"></i> -->
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ingredient" aria-expanded="false" aria-controls="ingredient">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Ingredients</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ingredient">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/admin/list_ingredients'); ?>">Liste des ingredients</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/admin/add_ing'); ?>">Ajouter un ingredient</a></li>
              </ul>
            </div>
          </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu" aria-expanded="false" aria-controls="menu">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Menus</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/admin/list_plates'); ?>">Liste des Menus</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/admin/add_plates'); ?>">Ajouter un menu</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>