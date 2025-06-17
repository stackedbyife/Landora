        <!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="{{ url("index.html") }}" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="{{ asset("img/icon-deal.png") }}" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h1 class="m-0 text-primary">Landora</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ url("/") }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url("/about") }}" class="nav-item nav-link">About</a>
@auth

                <div class="nav-item dropdown">
                    <a href="{{ url("#") }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ url("/property-type") }}" class="dropdown-item">Property Type</a>
                        <a href="{{ url("/property-list") }}" class="dropdown-item">Property List</a>
                        <a href="{{ url("/property-agent") }}" class="dropdown-item">Property Agent</a>
                    </div>
                </div>
@endauth
                <div class="nav-item dropdown">
                    <a href="{{ url("#") }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ url("/testimonial") }}" class="dropdown-item">Testimonial</a>
                        <a href="{{ url("/404") }}" class="dropdown-item">404 Error</a>
                    </div>
                </div>
                <a href="{{ url("/contact") }}" class="nav-item nav-link">Contact</a>
            </div>
@guest
            <a href="{{ url("/login") }}" class="btn btn-primary px-3 d-none d-lg-flex"> Login &nbsp;<i class="fas fa-user-check mt-1"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="{{ url("/register") }}" class="btn btn-primary px-3 d-none d-lg-flex">Register &nbsp;<i class="fas fa-user-edit mt-1"></i></a>
@endguest
@auth
    <form method="POST" action="{{ route('logout') }}" class="d-none d-lg-flex">
        @csrf
        <button type="submit" class="btn btn-danger px-3">
            Logout &nbsp;<i class="fas fa-sign-out-alt mt-1"></i>
        </button>
    </form>
@endauth
        </div>
    </nav>
</div>
        <!-- Navbar End -->
