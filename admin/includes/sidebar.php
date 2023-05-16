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
                <i class="nav-icon far fa-money-bill-alt"></i>
                <p>
                    Accounts
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="petty-cash.php" class="nav-link <?php if($pg==4.1){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Petty Cash</p>
                    </a>
                </li>
             </ul>
            </li>

            <li class="nav-header">Website Manager</li>

            <li class="nav-item has-treeview <?php if($pg >= 5 && $pg<6 ){echo "menu-open";}?>">
                <a href="#" class="nav-link <?php if($pg >= 5 && $pg<6 ){echo "active";}?>">
                <i class="nav-icon fas fa-address-card"></i>
                <p>
                    Booking Requests
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="travel-requests.php" class="nav-link <?php if($pg==5.1){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Travel Bookings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="booking-requests.php" class="nav-link <?php if($pg==5.2){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Booking Requests</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="flight-bookings.php" class="nav-link <?php if($pg==5.3){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Flight Bookings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="transport-bookings.php" class="nav-link <?php if($pg==5.4){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transport Bookings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="corporate-bookings.php" class="nav-link <?php if($pg==5.5){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Corporate Bookings</p>
                    </a>
                </li>
             </ul>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link <?php if($pg==13){echo 'active';}?>">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                    Reviews
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="enquiries.php" class="nav-link <?php if($pg==7){echo 'active';}?>">
                    <i class="nav-icon fas fa-quote-right"></i>
                    <p>
                    Enquiries
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link <?php if($pg==8){echo 'active';}?>">
                    <i class="nav-icon fas fa-file-image"></i>
                    <p>
                    Gallery
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview <?php if($pg >= 9 && $pg<10 ){echo "menu-open";}?>">
                <a href="#" class="nav-link <?php if($pg >= 9 && $pg<10 ){echo "active";}?>">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Newsletters
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link <?php if($pg==9.1){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Newsletters</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="subscribers.php" class="nav-link <?php if($pg==9.2){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Subscribers</p>
                    </a>
                </li>
             </ul>
            </li>
            <li class="nav-item">
                <a href="blogs.php" class="nav-link <?php if($pg==10){echo 'active';}?>">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>
                    Blogs
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="destinations.php" class="nav-link <?php if($pg==11){echo 'active';}?>">
                    <i class="nav-icon fas fa-compass"></i>
                    <p>
                    Destinations
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="catalogue.php" class="nav-link <?php if($pg==12){echo 'active';}?>">
                    <i class="nav-icon fas fa-map"></i>
                    <p>
                    Catalogue
                    </p>
                </a>
            </li>
                 
            
            <li class="nav-item">
                <a href="javascript:void()" class="nav-link">
                    <i class="nav-icon"></i>
                    <p>
                    
                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>