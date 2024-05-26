<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="container text-center mt-4">
            <a href="/admin">
                <img src="{{ asset('frontend/assets/logo.png') }}" width="120px" alt="Logo - {{ config('app.name') }}">
            </a>
        </div>
        <div class="sidebar-menu">
            <ul class="menu mb-5">
                <li class="sidebar-item {{ request()->is('admin') ? 'active' : '' }}">
                    <a href="{{ url('/admin') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('admin/distribution-center') ? 'active' : '' }}">
                    <a href="{{ url('/admin/distribution-center') }}" class='sidebar-link'>
                        <i class="bi bi-house"></i>
                        <span>Distribution Center</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('admin/city') ? 'active' : '' }}">
                    <a href="{{ url('/admin/city') }}" class='sidebar-link'>
                        <i class="bi bi-geo-alt"></i>
                        <span>Kota</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('admin/retail-price') ? 'active' : '' }}">
                    <a href="{{ url('/admin/retail-price') }}" class='sidebar-link'>
                        <i class="bi bi-cash"></i>
                        <span>Harga Retail</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('admin/trucking-price') ? 'active' : '' }}">
                    <a href="{{ url('/admin/trucking-price') }}" class='sidebar-link'>
                        <i class="bi bi-truck"></i>
                        <span>Harga Trucking</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('admin/galery') ? 'active' : '' }}">
                    <a href="{{ url('/admin/galery') }}" class='sidebar-link'>
                        <i class="bi bi-camera"></i>
                        <span>Galery</span>
                    </a>
                </li>
                </li>
                <li class="sidebar-item {{ request()->is('admin/video') ? 'active' : '' }}">
                    <a href="{{ url('/admin/video') }}" class='sidebar-link'>
                        <i class="bi bi-camera-video"></i>
                        <span>Video</span>
                    </a>
                </li>
                <li class="sidebar-item mb-5">
                    <a href="{{ url('/logout') }}" class='sidebar-link text-danger'>
                        <i class="bi bi-arrow-right-circle-fill text-danger"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
