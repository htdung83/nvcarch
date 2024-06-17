<header class="page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar_transparent rd-navbar_boxed" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="50px" data-xl-stick-up-offset="50px" data-xxl-stick-up-offset="50px" data-body-class="rd-navbar-absolute">
            <!-- RD Navbar Top Panel-->
            <div class="rd-navbar-top-panel">
                <div class="rd-navbar-top-panel__main">
                    <div class="rd-navbar-top-panel__toggle rd-navbar-fixed__element-1 rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-top-panel__main"><span></span></div>
                    @include('web.layouts.partials.top-bar')
                </div>
            </div>
            <div class="rd-navbar-inner rd-navbar-search-wrap">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel rd-navbar-search-lg_collapsable">
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand">
                        <a class="brand-name rounded-3 bg-white p-1" href="{{ url('/') }}" title="{{ config('app.name') }}">
                            <img src="{{ asset('theme/images/logo-521x120.jpg') }}" alt="{{ config('app.name') }}" style="max-height: 75px;"/>
                        </a>
                    </div>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
                    <div class="rd-navbar-search_collapsable">
                        @include('web.layouts.partials.navigation')
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
