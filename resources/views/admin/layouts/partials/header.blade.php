<header class="page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar_transparent rd-navbar_boxed" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="50px" data-xl-stick-up-offset="50px" data-xxl-stick-up-offset="50px" data-body-class="rd-navbar-absolute">
            <div class="rd-navbar-inner rd-navbar-search-wrap">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel rd-navbar-search-lg_collapsable">
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand">
                        <h1 class="text-uppercase text-white h4">@stack('pageTitle')</h1>
                    </div>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
                    <div class="rd-navbar-search_collapsable">
                        @include('admin.layouts.partials.navigation')
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
