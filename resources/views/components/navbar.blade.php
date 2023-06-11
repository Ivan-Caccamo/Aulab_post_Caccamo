<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}">The Ivan's Post</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">The Ivan's Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        @guest

        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>

        @else

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" 
            onclick="
            event.preventDeFault();
            document.querySelector('#form-logout').submit();
            "
            >
            Logout</a>
              <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">
                @csrf</form>
          </li>
          </ul>
        </li>

        @endguest

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>