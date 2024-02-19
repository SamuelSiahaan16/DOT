<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    @include('template.head')
    @yield('custom_css')
</head>

<body>

    <div class="preloader">
        <img src="{{ asset('img/logo2.png') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>

    <div id="main-wrapper">

        <aside class="left-sidebar with-vertical">

            @include('template.side')

        </aside>

        <div class="page-wrapper">

            <header class="topbar">
                <div class="with-vertical">

                    <nav class="navbar navbar-expand-lg p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse"
                                    href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="navbar-nav quick-links d-none d-lg-flex">

                        </ul>

                        @include('template.header')

                    </nav>

                </div>
            </header>

            <aside class="left-sidebar with-horizontal">

            </aside>

            <div class="body-wrapper">
                <div class="container-fluid">

                    {{ $slot }}

                </div>
            </div>
            <script>
                function handleColorTheme(e) {
                    $("html").attr("data-color-theme", e);
                    $(e).prop("checked", !0);
                }
            </script>
        </div>

    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->

    @include('template.js')
    @yield('custom_js')
</body>

</html>