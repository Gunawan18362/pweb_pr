@if(request()->has('username'))
<nav class="navbar navbar-expand-lg shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="{{ route('dashboard', ['username' => request()->query('username')]) }}">
      🏸 AeroSmash <small class="text-light-50">Store</small>
    </a>

    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard', ['username' => request()->query('username')]) }}">
            <i class="bi bi-house-door"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}">
            <i class="bi bi-box-seam"></i> Pengelolaan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profile', ['username' => request()->query('username')]) }}">
            <i class="bi bi-person-circle"></i> Profile
          </a>
        </li>
        <li class="nav-item ms-2">
          <a class="btn btn-outline-light btn-sm" href="{{ route('login.form') }}">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endif
