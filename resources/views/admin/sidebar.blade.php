<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.users.index') }}">
                        <i class="fas fa-user"></i>
                        <p>Foydalanuvchi</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.vaccination_infos.index') ? 'active' : '' }} ">
                    <a href="{{ route('admin.vaccination_infos.index') }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Emlash turlari</p>
                    </a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user()->position == 'admin')
                    <li class="nav-item {{ request()->routeIs('admin.xodim.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.xodim.index') }}">
                            <i class="fas fa-pen-square"></i>
                            <p>Xodimlar</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>


