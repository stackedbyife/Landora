
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>
<body>
    <div class="container-xxl bg-white p-0">
        @include('admin.partials.spinner')

    <div class="content">
        @include('admin.partials.navbar')
    <main>
        @yield('content')
    </main>

    @include('admin.partials.footer')
    </div>
            <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('admin.partials.scripts')
</body>
</html>
