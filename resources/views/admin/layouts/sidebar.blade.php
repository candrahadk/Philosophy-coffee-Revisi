<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Philosophy Coffee</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">PC</a>
        </div>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a target="_blank" href="{{ route('home') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Kunjungi Website
            </a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class={{ \Route::is('dashboard') ? 'active' : '' }}><a class="nav-link"
                    href="{{ route('dashboard') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a></li>
            <li class="menu-header">Pages</li>
            <li class={{ \Route::is('menu.index') ? 'active' : '' }}><a class="nav-link"
                    href="{{ route('menu.index') }}"><i class="fas fa-th-large"></i>
                    <span>Menu</span></a></li>
            <li class={{ \Route::is('reservation.index') ? 'active' : '' }}><a class="nav-link"
                    href="{{ route('reservation.index') }}"><i class="far fa-file-alt"></i>
                    <span>Reservasi</span></a></li>

            <li class="menu-header">Admin</li>
            <li class={{ \Route::is('profile.edit') ? 'active' : '' }}><a class="nav-link"
                    href="{{ route('profile.edit') }}"><i class="fas fa-user"></i>
                    <span>Profil</span></a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();"><i
                            class="fas fa-sign-out-alt"></i>
                        <span>Log Out</span></a>
                </form>
            </li>
        </ul>
    </aside>
</div>
