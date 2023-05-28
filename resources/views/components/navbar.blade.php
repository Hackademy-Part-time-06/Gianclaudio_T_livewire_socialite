<link rel="stylesheet" href="style.css">
<nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-custom bg-primary fixed-top">
  <div class="container-fluid">
    
      <a class="navbar-brand" href="#">Navbar</a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
      <span class="navbar-toggler-icon"></span>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="stylenav collapse navbar-collapse me-3" id="navbarNav">
        <!-- Left links -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-hover js_NavbarMenu navbar-custom">
          <li class="nav-item active">
            <a class="nav-link active " aria-current="page" href="{{route('index')}}">
            <i class="bi bi-stopwacht-fill"></i>
            Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('books.create')}}">Crea Libro</a>
          </li>
          <!-- Navbar dropdown -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="{{route('books.index')}}"
              id="navbarDropdown"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              Lista libri
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">Action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          
        </ul>
        
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  </div>
    
  </nav>

