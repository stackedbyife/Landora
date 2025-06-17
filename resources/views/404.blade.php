@extends('layouts.app')

@php
    $noHeader = true;
@endphp

@section('content')
        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="{{ url("index.html") }}" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="{{ asset("img/icon-deal.png") }}" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Makaan</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ url("/") }}" class="nav-item nav-link ">Home</a>
                        <a href="{{ url("/about") }}" class="nav-item nav-link ">About</a>
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
                            <a href="{{ url("#") }}" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ url("/testimonial") }}" class="dropdown-item">Testimonial</a>
                                <a href="{{ url("/404") }}" class="dropdown-item active">404 Error</a>
                            </div>
                        </div>
                        <a href="{{ url("/contact") }}" class="nav-item nav-link ">Contact</a>
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

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">404 Error</h1>
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url("#") }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url("#") }}">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">404 Error</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="{{ asset("img/header.jpg") }}" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- 404 Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">404</h1>
                        <h1 class="mb-4">Page Not Found</h1>
                        <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                        <a class="btn btn-primary py-3 px-5" href="{{ url("") }}">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->

@endsection
