@extends('admin.layouts.app')

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ url("index.html") }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset("admin/img/user.jpg") }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ route('admin.admin-users') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Members</a>
                    <a href="{{ route('admin.admin-properties') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Properties</a>
                    <a href="{{ route('admin.admin-form') }}" class="nav-item nav-link active" ><i class="fa fa-table me-2"></i>Add Properties</a>
                    <a href="{{ url("chart.html") }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Booking</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

@section('content')
<div class="container mt-5">
    <h2>Add New Property</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.admin-form.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Location</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price (₦)</label>
            <input type="text" name="price" class="form-control" step="0.01" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Area </label>
            <input type="text" name="area" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Beds </label>
            <input type="text" name="beds" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Bathtubs</label>
            <input type="text" name="baths" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="">Select One</option>
                <option value="Available">Available</option>
                <option value="Sold">Sold</option>
                <option value="Rented">Rented</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Property Type</label>
            <select name="type" class="form-control" required>
                <option value="">Select One</option>
                <option value="Apartment">Apartment</option>
                <option value="Villa">Villa</option>
                <option value="Home">Home</option>
                <option value="Office">Office</option>
                <option value="Building">Building</option>
                <option value="Townhouse">Townhouse</option>
                <option value="Shop">Shop</option>
                <option value="Garage">Garage</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Image</label>
            <input class="form-control" type="file" name="image" id="formFile" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Property</button>
    </form>
</div>

@endsection
