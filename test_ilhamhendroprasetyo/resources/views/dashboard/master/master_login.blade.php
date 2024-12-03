@include('dashboard.master.login.head')
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    @yield('main')
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                @include('dashboard.master.login.footer')
            </div>
        </div>
        @include('dashboard.master.login.js')
    </body>
</html>
