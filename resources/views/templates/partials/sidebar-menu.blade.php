<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">
            <li><a href="home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Institutions</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-university"></i> TUTORING AGENCY <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('tutoring-agency.index') }}">Data Tutoring Agencies</a></li>
                    <li><a href="foo">What is</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-cogs"></i> SETUP <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('category.sub.index') }}">Category & Sub Category</a></li>
                    <li><a href="foo">What is</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Users & Visitors</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-users"></i> USERS <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('user.index') }}">Data Users</a></li>
                    <li><a href="foo">Statistic Presentation</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-slideshare"></i> VISITORS <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="foo">Data Visitors</a></li>
                    <li><a href="foo">Statistic Presentation</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Services App</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-share-alt"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="foo">E-commerce</a></li>
                    <li><a href="foo">Projects</a></li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Master</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-suitcase"></i> Administrator <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('admin.index') }}">Data Admin</a></li>
                    <li><a href="foo">What is</a></li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
</div>