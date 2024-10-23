<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi menu-icon mdi-chart-bar"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        {{-- <li class="nav-item nav-category">Products</li> --}}

        {{-- Product  --}}
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                <i class="menu-icon mdi mdi-folder-outline"></i>
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Categories
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Products
                    </a>
                </li>
                </ul>
            </div>
        </li>

        {{-- Supplier  --}}
        <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#supplier" aria-expanded="false" aria-controls="supplier">
            <i class="menu-icon mdi mdi-folder-outline"></i>
            <span class="menu-title">Supplier</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="supplier">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('suppliers.index') }}">Suppliers
                    </a>
                </li>
            </ul>
        </div>
        </li>



        <li class="nav-item nav-category">Account Center</li>
        <li class="nav-item">
            {{-- <a class="nav-link" href="{{ route('user_infos.index') }}">
                <i class="mdi menu-icon mdi-account"></i>
                <span class="menu-title">Account</span>
            </a> --}}
        </li>
    </ul>
</nav>