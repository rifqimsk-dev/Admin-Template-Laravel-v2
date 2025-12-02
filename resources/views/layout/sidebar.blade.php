<!-- Sidebar Start -->
<aside class="left-sidebar with-vertical">
    <div>
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <!-- Sidebar scroll-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- ---------------------------------- -->
                <!-- Home -->
                <!-- ---------------------------------- -->

                <li class="nav-small-cap">
                    <iconify-icon
                        icon="solar:menu-dots-bold"
                        class="nav-small-cap-icon fs-4"
                    ></iconify-icon>
                    <span class="hide-menu">Apps</span>
                </li>
                <!-- ---------------------------------- -->
                <!-- Dashboard -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('/') }}" id="get-url">
                        <iconify-icon
                            icon="solar:screencast-2-linear"
                            class="aside-icon"
                        ></iconify-icon>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <!-- ---------------------------------- -->
                <!-- Front Pages -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a
                        class="sidebar-link has-arrow"
                        href="javascript:void(0)"
                        aria-expanded="false"
                    >
                        <iconify-icon
                            icon="solar:home-angle-linear"
                            class="aside-icon"
                        ></iconify-icon>
                        <span class="hide-menu">Master Data</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item selected-ex">
                            <a
                                href=""
                                class="sidebar-link sublink active-ex"
                            >
                                <div
                                    class="round-16 d-flex align-items-center justify-content-center"
                                >
                                    <iconify-icon
                                        icon="solar:stop-circle-line-duotone"
                                    ></iconify-icon>
                                </div>
                                <span class="hide-menu">Data 1</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- End Sidebar scroll-->
    </div>
</aside>
<!--  Sidebar End -->
