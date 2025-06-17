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
                    <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ route('admin.admin-users') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Members</a>
                    <a href="{{ route('admin.admin-properties') }}" class="nav-item nav-link active" ><i class="fa fa-keyboard me-2"></i>Properties</a>
                    <a href="{{ route('admin.admin-form') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Add Properties</a>
                    <a href="{{ url("chart.html") }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Booking</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

@section('content')
<!-- Properties Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-white shadow rounded p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">All Properties</h5>
                    <a href="{{ route('admin.admin-form') }}" class="btn btn-sm btn-primary">Add Property</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Address</th>
                                <th>Price</th>
                                <th>Area</th>
                                <th>Beds</th>
                                <th>Baths</th>
                                <th>Listed On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="fw-semibold">{{ $property->title }}</td>
                                <td>{{ $property->address }}</td>
                                <td>
                                    <span class="badge bg-success">
                                        ₦{{ number_format((float) str_replace(',', '', $property->price), 0) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-muted">{{ $property->area }} Sqft</span>
                                </td>
                                <td>
                                    <span class="badge bg-info text-dark">{{ $property->beds }} Beds</span>
                                </td>
                                <td>
                                    <span class="badge bg-secondary">{{ $property->baths }} Baths</span>
                                </td>
                                <td>{{ $property->created_at->format('d M, Y') }}</td>
                            </tr>
                            @endforeach
                            @if ($properties->isEmpty())
                            <tr>
                                <td colspan="8" class="text-center text-muted">No properties available.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties Table End -->
@endsection
