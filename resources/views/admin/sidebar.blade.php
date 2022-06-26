<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <p>Пользователь</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.posts.index') ? 'active' : '' }} ">
                    <a href="#">
                        <i class="fas fa-pen-square"></i>
                        <p>Новости</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.posts.index') ? 'active' : '' }} ">
                    <a href="{{url('bemor')}}">
                        <i class="fas fa-plus"></i>
                        <p>Bemorlar</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


