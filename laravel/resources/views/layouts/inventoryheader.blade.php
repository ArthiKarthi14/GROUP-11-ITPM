
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">Autoaum</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{Request::is('/inventorys') ? 'active' : ''}}"  href="{{url('/inventorys')}}">Inventory Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('add_inventory') ? 'active' : ''}}" href="{{url('/add_inventory')}}">Add Inventory</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>