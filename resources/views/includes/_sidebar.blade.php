<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item {{ Route::current()->getName() == 'home' ? 'start active open' : '' }}">
                <a href="{{ route('home') }}" class="nav-link nav-toggle">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="title">Home</span>
                    <span class="selected"></span>
                    {{--<span class="arrow open"></span>--}}
                </a>
            </li>
            <li class="nav-item {{ Route::current()->getName() == 'leads' ? 'start active open' : '' }}">
                <a href="{{ route('leads') }}" class="nav-link nav-toggle">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span class="title">Leads</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{ Route::current()->getName() == 'events' ? 'start active open' : '' }}">
                <a href="{{ route('events') }}" class="nav-link nav-toggle">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <span class="title">Events</span>
                    <span class="selected"></span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
