@include('dashboard.master.dashboard.head')
    <body class="sb-nav-fixed">
        @include('dashboard.master.dashboard.topnav')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('dashboard.master.dashboard.sidenav')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('main')
                </main>
                @include('dashboard.master.dashboard.footer')
            </div>
        </div>
        @include('dashboard.master.dashboard.js')
    </body>
</html>
