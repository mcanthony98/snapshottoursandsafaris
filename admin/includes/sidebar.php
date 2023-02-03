<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      
      <span class="brand-text font-weight-heavy">SNAPSHOT<span class="text-warning">Admin</span></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?php if($pg==1){echo 'active';}?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                </p>
            </a>
            </li>
            <li class="nav-item">
                <a href="employees.php" class="nav-link <?php if($pg==2){echo 'active';}?>">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>
                    Employees
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview <?php if($pg >= 3 && $pg<4 ){echo "menu-open";}?>">
                <a href="#" class="nav-link <?php if($pg >= 3 && $pg<4 ){echo "active";}?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Field marketing
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="reports.php" class="nav-link <?php if($pg==3.1){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reports</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?php if($pg==3.2){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Potential clients</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?php if($pg==3.3){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Converted Clients</p>
                    </a>
                </li>
             </ul>
            </li>
            <li class="nav-item has-treeview <?php if($pg >= 4 && $pg<5 ){echo "menu-open";}?>">
                <a href="#" class="nav-link <?php if($pg >= 4 && $pg<5 ){echo "active";}?>">
                <i class="nav-icon fas fa-globe"></i>
                <p>
                    Website Management
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link <?php if($pg==4.1){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Blogs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?php if($pg==4.2){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Catalogue</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?php if($pg==4.3){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Booking Requests</p>
                    </a>
                </li>
             </ul>
            </li>

            <li class="nav-item has-treeview <?php if($pg >= 5 && $pg<6 ){echo "menu-open";}?>">
                <a href="#" class="nav-link <?php if($pg >= 5 && $pg<6 ){echo "active";}?>">
                <i class="nav-icon far fa-money-bill-alt"></i>
                <p>
                    Accounts
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link <?php if($pg==5.1){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Petty Cash</p>
                    </a>
                </li>
             </ul>
            </li>
            
                    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>