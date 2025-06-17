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
                    <h1 class="m-0 text-primary"> Landora</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ url("/") }}" class="nav-item nav-link ">Home</a>
                        <a href="{{ url("/about") }}" class="nav-item nav-link">About</a>
    @auth
                        <div class="nav-item dropdown">
                            <a href="{{ url("#") }}" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ url("/property-type") }}" class="dropdown-item">Property Type</a>
                                <a href="{{ url("/property-list") }}" class="dropdown-item active">Property List</a>
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

<!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Property List</h1>
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url("#") }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url("#") }}">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Property List</li>
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

        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Explore Our Properties</h1>
                            <p>Discover premium listings tailored to your needs—whether you're looking to buy your dream home, invest in real estate, or find the perfect rental. We bring you the best of the market, all in one place.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="{{ url('#tab-1') }}">Featured</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="{{ url('#tab-2') }}">For Sale</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="{{ url('#tab-3') }}">For Rent</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">

{{-- Starting Col --}}
@foreach ($properties as $property )

                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <a href="{{ route('properties.show', $property->id) }}">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('storage/' . $property->image) }}" alt="">
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{ $property->status }}</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{ $property->type }}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">₦ {{ $property->price }}</h5>
                                        <a class="d-block h5 mb-2" href="{{ url("") }}">{{ $property->title }}</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $property->address }}</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{ $property->area }} Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{ $property->beds }} Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{ $property->baths }} Bath</small>
                                    </div>
                                </div>
                                </a>
                            </div>

@endforeach
{{-- Ending Col --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->

@endsection


