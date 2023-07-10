<!DOCTYPE html>
<html lang="en">
        @include('admin.includes.head')
        {{-- @yield('content2');
        @yield('content3');
        @yield('content4'); --}}
        @yield('darknav');
        <body class="sb-nav-fixed">

            @include('admin.includes.header')
            <div id="layoutSidenav">
                @include('admin.includes.sidebar')
                <div id="layoutSidenav_content">
                    @yield('content')
                    @include('admin.includes.footer')
                </div>
            </div>
            @include('admin.includes.scripts')
    </body>
</html>
