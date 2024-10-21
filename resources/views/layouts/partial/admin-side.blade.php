<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi menu-icon mdi-chart-bar"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

      

        {{-- <li class="nav-item nav-category">Blotter Record</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#blotter" aria-expanded="false" aria-controls="blotter">
                <i class="menu-icon mdi mdi-folder-outline"></i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blotter">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('blotters.index') }}">Blotter
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('people.index') }}">Person
                        </a>
                    </li>
                </ul>
            </div>
        </li> --}}

        <li class="nav-item nav-category">Account Center</li>
        <li class="nav-item">
            {{-- <a class="nav-link" href="{{ route('user_infos.index') }}">
                <i class="mdi menu-icon mdi-account"></i>
                <span class="menu-title">Account</span>
            </a> --}}
        </li>
    </ul>
</nav>