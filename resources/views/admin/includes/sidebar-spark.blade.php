<nav class="navbar navbar-expand navbar-theme">
    <a class="sidebar-toggle d-flex me-2">
        <i class="hamburger align-self-center"></i>
    </a>

    <form class="d-none d-sm-inline-block">
        <input class="form-control form-control-lite" type="text" placeholder="Search projects...">
    </form>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown ms-lg-2">
                <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
                    <i class="align-middle fas fa-cog"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                        @csrf
                        <button class="border-0 bg-white"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i>logout</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
