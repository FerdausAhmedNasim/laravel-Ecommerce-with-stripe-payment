<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="{{ route('dashboard') }}" class="brand-link">
            <!--begin::Brand Image-->
            <img src="{{ asset('dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow" />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                            <i class="nav-arrow bi"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('categories') }}" class="nav-link">
                        <i class="nav-icon bi bi-star-half"></i>
                        <p>Category</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/catgories') }}" class="nav-link">
                        <i class="nav-icon bi bi-filetype-js"></i>
                        <p>Sub Category</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('bands') }}" class="nav-link">
                        <i class="bi bi-backpack4-fill"></i>
                        <p>Brand</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('products') }}" class="nav-link">
                        <i class="bi bi-bag-fill"></i>
                        <p>Product</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ url('orders') }}" class="nav-link">
                        <i class="bi bi-bag-fill"></i>
                        <p>Orders</p>
                    </a>
                </li>

                {{-- dark or light mode --}}
                <li class="nav-item">
                    <a href="{{ route('color.mode') }}" class="nav-link">
                        <i class="bi bi-brightness-high"></i>
                        <p>{{ session('mode') === 'dark' ? 'Light Mode' : 'Dark Mode' }}</p>
                    </a>
                </li>
                 
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
