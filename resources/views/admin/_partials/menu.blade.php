<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item @yield('profile_section')">
    <a href="#" class="nav-link">
      <i class="nav-icon fa fa-user"></i>
      <p>
        Profile
      </p>
    </a>
</li>

<li class="nav-item @yield('blogs_section')">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-book"></i>
        <p>
        Blogs
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('category.index')}}" class="nav-link @yield('blogs_category')">
                <i class="far fa-user nav-icon"></i>
                <p>Category</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('blogs.index')}}" class="nav-link @yield('blogs_blog')">
            <i class="far fa-circle nav-icon"></i>
            <p>
                Blogs
            </p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item @yield('setting_section')">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-book"></i>
        <p>
        Settings
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link @yield('business_profile_section')">
                <i class="far fa-user nav-icon"></i>
                <p>Business Profile</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link @yield('employee_section')">
            <i class="far fa-circle nav-icon"></i>
            <p>
                Employee
            </p>
            </a>
        </li>
    </ul>
</li>



