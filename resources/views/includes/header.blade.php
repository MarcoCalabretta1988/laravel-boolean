<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark navbar-dark py-3">
        <div class="container-fluid">
          <a href="{{ url('/')}}">

            <img src="{{Vite::asset('resources/img/magic-logo.webp') }}" alt="Logo" class="mx-5" id='logo'>
          </a>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav fw-bold">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/')}}">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="{{ route ('cards.index')}}">DECK</a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </nav>

</header>