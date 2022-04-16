<header class="py-3 shadow">
    <div class="container align-items-center d-flex">
        <div class="flex-grow-1 d-flex align-items-center">
            <div class="navbar-title me-3">SIMPEL</div>
            <form class="w-100 me-3">
                <input type="search" class="form-control" placeholder="Search...">
            </form>
            <div class="flex-shrink-0 dropdown">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    Hi, {{ $name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownUser2" style="">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

