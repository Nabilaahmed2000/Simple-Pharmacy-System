 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset ('adminAssets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('adminAssets/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('dashboard.admin.show',1) }}" class="d-block">Alexander Pierce</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie "></i>
              <p>
                Pharmacy Owner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item child-tab">
                <a href="{{route('pharmacyOwners.index')}}" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>All Pharmacy Owners</p>
                </a>
              </li>
              <li class="nav-item child-tab">
                    <a href="{{route('pharmacyOwners.create')}}" class="nav-link">
                        <i class="fas fa-user-plus"></i>
                        <p>Add Pharmacy Owner</p>
                    </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-doctor"></i>
              <p>
                Doctor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item child-tab">
                <a href="{{route('doctors.index')}}" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>All Doctors</p>
                </a>
              </li>
              <li class="nav-item child-tab">
                    <a href="{{route('doctors.create')}}" class="nav-link">
                        <i class="fas fa-user-plus"></i>
                        <p>Add new doctor</p>
                    </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
                <a href="{{ route('dashboard.users.index') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                    <p>
                        Users
                    </p>
                </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-staff-snake"></i>
              <p>
                Pharmacy
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item child-tab">
                <a href="{{ route('dashboard.pharmacy.index') }}" class="nav-link">
                <i class="fas fa-building-shield"></i>
                  <p>All Pharmacies</p>
                </a>
              </li>
              <li class="nav-item child-tab">
                    <a href="{{ route('dashboard.pharmacy.create') }}" class="nav-link">
                    <i class="fas fa-plus"></i>
                        <p>Add new Pharmacy</p>
                    </a>
              </li>
            </ul>
          </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-prescription-bottle-alt"></i>
                <p>
                    Medicine
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item child-tab">
                    <a href="{{ route('dashboard.medicine.index') }}" class="nav-link">
                    <i class="fas fa-pills"></i>
                    <p>All Medicines</p>
                    </a>
                </li>
                <li class="nav-item child-tab">
                        <a href="{{ route('dashboard.medicine.create') }}" class="nav-link">
                        <i class="fas fa-plus"></i>
                            <p>Add new Medicine</p>
                        </a>
                </li>
                </ul>
            </li>
            <!-- pharmacy area -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-location-dot"></i>
                <p>
                    Pharmacy Area
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item child-tab">

                    <!-- all pharmacy area route -->
                    <a href="{{ route('dashboard.area.index') }}" class="nav-link">
                    <i class="fas fa-map-location"></i>
                        <p>All Pharmacy Area</p>
                        </a>
                    </li>
                    <li class="nav-item child-tab">
                            <a href="{{ route('dashboard.area.create') }}" class="nav-link">
                            <i class="fas fa-plus"></i>
                                <p>Add new Pharmacy Area</p>
                            </a>
                    </li>
                </ul>
            </li>
            <!-- orders -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                    Orders
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item child-tab">
                        <a href="{{ route('dashboard.order.index') }}" class="nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        <p>
                            All Orders
                        </p>
                        </a>
                    </li>
                    <li class="nav-item child-tab">
                            <a href="{{ route('dashboard.order.create') }}" class="nav-link">
                            <i class="fa fa-plus"></i>
                                <p>
                                    Add new Order
                                </p>
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
