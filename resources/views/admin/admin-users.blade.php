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
                    <a href="{{ route('admin.admin-users') }}" class="nav-item nav-link active" ><i class="fa fa-th me-2"></i>Members</a>
                    <a href="{{ route('admin.admin-properties') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Properties</a>
                    <a href="{{ route('admin.admin-form') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Add Properties</a>
                    <a href="{{ url("chart.html") }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Booking</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

@section('content')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-white shadow rounded p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">All Members</h5>
                    {{-- <a href="#" class="btn btn-sm btn-primary">Add New</a> --}}
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Joined</th>
                                <th>Status</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <span class="badge bg-info text-dark">{{ ucfirst($user->role ?? 'member') }}</span>
                                </td>
                                <td>{{ $user->created_at->format('d M, Y') }}</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                {{-- <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                        <a href="#" class="btn btn-sm btn-outline-warning">Edit</a>
                                        <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </div>
                                </td> --}}
                            </tr>
                            @endforeach
                            @if ($users->isEmpty())
                            <tr>
                                <td colspan="7" class="text-center text-muted">No users found.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->

@endsection
