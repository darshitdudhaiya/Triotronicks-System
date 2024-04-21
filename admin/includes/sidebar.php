<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
      <!-- Brand Logo -->
      <a href="<?= urlOf('admin/') ?>" class="text-center">
        <img src="<?= urlOf('admin/assets/images/logo.png') ?>" alt="Logo" class="brand-image elevation-3" id="brand-logo">
        <span class="brand-text font-weight-light"> </span>
      </a>
    </div>
    <?php if (isset($_SESSION['LoggedInUserId'])) { ?>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= urlOf('admin/assets/images/user.png') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Triotronics</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Dashboard
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= urlOf('admin/products') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Products</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="<?= urlOf('admin/sales-details') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Sales Details</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?= urlOf('admin/services') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Service</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="<?= urlOf('admin/services-details') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Service Details</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?= urlOf('admin/classes') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Classes</p>
                </a>
              </li><li class="nav-item">
                <a href="<?= urlOf('admin/contacts') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Account
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= urlOf('admin/change-password.php') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= urlOf('admin/logout.php') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Log out</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    <?php } ?>
  </div>
</aside>