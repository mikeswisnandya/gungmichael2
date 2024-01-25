<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}"> <i class="nav-icon fas fa-home"></i> <p>Home</p> </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i> <p> Blog Post <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item"> <a href="{{ route('blog.index') }}" class="nav-link {{ Request::is('blog') ? 'active' : '' }}"> <i class="far fa-circle nav-icon"></i> <p>Blog Posts</p> </a>
        </li>
        <li class="nav-item"> <a href="{{ route('projects.index') }}" class="nav-link {{ Request::is('projects') ? 'active' : '' }}"> <i class="far fa-circle nav-icon"></i> <p>Projects</p> </a>
        </li>
        <li class="nav-item"> <a href="{{ route('category.index') }}" class="nav-link {{ Request::is('category') ? 'active' : '' }}"> <i class="far fa-circle nav-icon"></i> <p>Category</p> </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i> <p> Settings <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item"> <a href="/" class="nav-link {{ Request::is('profiles') ? 'active' : '' }}"> <i class="far fa-circle nav-icon"></i> <p>Profiles</p> </a>
        </li>
        <li class="nav-item"> <a href="pages/layout/fixed-topnav.html" class="nav-link"> <i class="far fa-circle nav-icon"></i> <p>Landing Page</p> </a>
        </li>
        <li class="nav-item"> <a href="pages/layout/fixed-footer.html" class="nav-link"> <i class="far fa-circle nav-icon"></i> <p>About Me</p> </a>
        </li>
        <li class="nav-item"> <a href="pages/layout/top-nav-sidebar.html" class="nav-link"> <i class="far fa-circle nav-icon"></i> <p>Projects</p> </a>
        </li>
        <li class="nav-item"> <a href="pages/layout/boxed.html" class="nav-link"> <i class="far fa-circle nav-icon"></i> <p>Blogs</p> </a>
        </li>
    </ul>
</li>
