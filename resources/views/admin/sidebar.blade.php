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
                @if(\Illuminate\Support\Facades\Auth::user()->id == 1)
                    <li class="nav-item {{ request()->routeIs('admin.xodim.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.xodim.index') }}">
                            <i class="fas fa-street-view"></i>
                            <p>Xodimlar</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.vaccination_infos.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.vaccination_infos.index') }}">
                            <i class="fas fa-database"></i>
                            <p>Emlash turlari</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item {{ request()->routeIs('admin.bemor.index') ? 'active' : '' }} ">
                    <a href="{{ route('admin.bemor.index') }}">
                        <i class="fas fa-plus"></i>
                        <p>Bemorlar</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.vaccinations.index') ? 'active' : '' }} ">
                    <a href="{{ route('admin.vaccinations.index') }}">
                        <i class="fas fa-pencil-alt"></i>
                        <p>Ro'yxatga olish</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>


