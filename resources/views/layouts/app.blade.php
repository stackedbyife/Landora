
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    <div class="container-xxl bg-white p-0">
    @include('partials.spinner')
    @if(!isset($noHeader))
        @include('partials.navbar')
        @include('partials.header')
        {{-- @include('partials.search') --}}
    @endif



    <main>
        @yield('content')
    </main>

    @include('partials.footer')
            <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('partials.scripts')
</body>
</html>
