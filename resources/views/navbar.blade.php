 <!--start header -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" 
id="mainNav" style=" background-color: transparent !important;">
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="/">
            <i class="fa fa-fw fa-dashboard" style="color: #5ba8ff;"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench" style="color: #5ba8ff;"></i>
            <span class="nav-link-text">Tables</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
              <a class="nav-link" href="users.php">
                <i class="fa fa-fw fa-user" style="color: #5ba8ff;"></i>
                <span class="nav-link-text">Users</span>
              </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
              <a class="nav-link" href="{{route('Owner.index')}}">
                <i class="fa fa-fw fa-users" style="color: #5ba8ff;"></i>
                <span class="nav-link-text">Garage Owners</span>
              </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
              <a class="nav-link" href="{{route('ParkingArea.index')}}">
                <i class="fa fa-fw fa-car" style="color: #5ba8ff;"></i>
                <span class="nav-link-text">Parking Areas</span>
              </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
              <a class="nav-link" href="{{ route('Card.index') }}">
                <i class="fa fa-fw fa-address-card" style="color: #5ba8ff;"></i>
                <span class="nav-link-text">Cards</span>
              </a>
            </li>
            
          </ul>
        </li>
        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"  style="color: #5ba8ff;"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler"style="background: #343a40;">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left "  style="color:#5ba8ff;"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

 <!--end header -->  