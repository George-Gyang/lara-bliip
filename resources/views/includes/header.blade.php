<!-- <div class="d-flex justify-content-around nav-link py-3">
  <div><a href=""><img src="{{ asset('images/Bliip.png') }}" alt="Bliip Logo"></a></div>
  <nav>
    <ul class="d-flex align-items-center nav">
      <li class="list"><a class="nav-link text-white" href="">Home</a></li>
      <li>
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pricing
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
      </li>
      <li>
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Docs
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item"><a class="nav-link" href="">Demo</a></li>
      <li class="nav-item"><a class="nav-link" href="">Home</a></li>
  </nav>
  <div>
    <button class="btn ">Sign in</button>
    <button class="btn text-white navy-btn">Get Started</button>
  </div>
</div> -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <div><a href=""><img src="{{ asset('images/Bliip.png') }}" alt="Bliip Logo"></a></div>
      <!-- Left links -->
      <ul class="navbar-nav d-md-flex align-items-center m-auto mb-2 mb-lg-0">
        <li class="list"><a class="nav-link text-primary" href="/">Home</a></li>
        <li>
          <div class="dropdown">
            <button class="btn plain-btn border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pricing
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn plain-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Docs
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="">Demo</a></li>
        <li class="nav-item"><a class="nav-link" href="">Contacts</a></li>
      </ul>
      <div class="d-flex">
        <button class="btn btn-outline-primary me-2">Sign in</button>
        <button class="btn text-white navy-btn">Get Started</button>
      </div>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-md-none d-flex justify-content-end">
      <!-- Icon -->
      <!-- <a class="text-reset me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a> -->

      <div class="col-6"><a href=""><img class="img-fluid" src="{{ asset('images/Bliip.png') }}" alt="Bliip Logo"></a></div>
      <!-- side bar -->
      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="fas fa-bars"></i>
      </button>

      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

          <div class=" d-block d-md-none">
            @include('includes.sidebar')
          </div>
        </div>
      </div>
      <!-- Avatar -->
      <!-- <div class="dropdown">
        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div> -->
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->