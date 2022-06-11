<nav class="navbar navbar-dark navbar-expand-lg bg-dark shadow sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Tugas 11</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "Dashboard") ? 'active' : '' }}" aria-current="page" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "Profile") ? 'active' : '' }}" href="/profile">Profile</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item">
            <a class="nav-link disabled text-white" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
          </li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-dark"><i class="bi bi-box-arrow-right"></i>   Log out</button>
          </form>
        @endauth
      </ul>
      
    </div>
  </div>
</nav>
