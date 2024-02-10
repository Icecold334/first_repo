<!DOCTYPE html>
<html lang="en">
{{-- Head --}}
@include('layout.head')
<body class="g-sidenav-show  bg-gray-200">
    {{-- Sidebar --}}
    @include('layout.side')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('layout.nav')
        <div class="container-fluid py-4">
            {{-- Main Content --}}
            @yield('main')
        </div>
    </main>
    {{-- Display Settings --}}
    @include('layout.display')
    <!--   Core JS Files   -->
    @include('layout.js')
</body>
</html>
