<nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav" >
        <li class="{{ Route::currentRouteNamed('/') ? 'active' : '' }} nav-item ">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="messages">Messages</a>
          </li>
        </ul>
      </nav>
