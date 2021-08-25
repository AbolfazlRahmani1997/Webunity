<aside id="side-overlay">
    <!-- Side Header -->
    <div class="content-header content-header-fullrow">
        <div class="content-header-section align-parent">
            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary align-v-l" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-times text-danger"></i>
            </button>
            <!-- END Close Side Overlay -->

            <!-- User Info -->
            <div class="content-header-item">
                <a class="img-link ml-5" href="">
                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar0.jpg" alt="">
                </a>
                <a class="align-middle link-effect text-primary-dark font-w600" href="">Admin</a>
            </div>
            <!-- END User Info -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <div class="content-side">
        <!-- Search -->
        <div class="block pull-t pull-r-l">
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-square btn-secondary px-10">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Search -->

        <!-- Mini Stats -->
        <div class="block pull-r-l">
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="row">
                    <div class="col-4">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Stat</div>
                        <div class="font-size-h4">100</div>
                    </div>
                    <div class="col-4">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Stat</div>
                        <div class="font-size-h4">200</div>
                    </div>
                    <div class="col-4">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Stat</div>
                        <div class="font-size-h4">300</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Mini Stats -->

        <!-- Block -->
        <div class="block pull-r-l">
            <div class="block-header bg-body-light">
                <h3 class="block-title">Title</h3>
                <div class="block-options pl-0">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                </div>
            </div>
            <div class="block-content">
                <p>Content...</p>
            </div>
        </div>
        <!-- END Block -->
    </div>
    <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->

<!-- Sidebar -->
<!--
    Helper classes

    Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
    Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
        If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

    Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
    Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
        - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
-->
<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-right animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-l" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">Web</span><span class="font-size-xl text-primary">Unity</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side User -->
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar0.jpg" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="">
                    <img class="img-avatar" src="assets/media/avatars/avatar0.jpg" alt="">
                </a>
                <ul class="list-inline pr-0 mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="">J. Smith</a>
                    </li>
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="si si-drop"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" href="">
                            <i class="si si-logout"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a class="active" href="">
                        <i class="si si-cup"></i>
                        <span class="sidebar-mini-hide">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">
                    <span class="sidebar-mini-visible">HD</span>
                    <span class="sidebar-mini-hidden">Heading</span>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                        <i class="si si-puzzle"></i>
                        <span class="sidebar-mini-hide">کاربران</span>
                    </a>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">افزودن</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">مشاهده همه</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">دسترسی</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                        <i class="si si-puzzle"></i>
                        <span class="sidebar-mini-hide">Dropdown</span>
                    </a>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">Link #1</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Link #2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
