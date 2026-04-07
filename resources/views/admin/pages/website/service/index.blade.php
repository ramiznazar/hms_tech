@extends('admin.layouts.main')
@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
                                <li class="breadcrumb-item active">Services</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Services</h4>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="mt-0 header-title mb-0">All Services</h4>
                                <a href="{{ route('admin.service.create') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus mr-1"></i> Add New
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0 table-centered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="60">#</th>
                                            <th width="60">Icon</th>
                                            <th>Title</th>
                                            <th>Short Description</th>
                                            <th width="80">Order</th>
                                            <th width="120">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($services as $service)
                                            <tr>
                                                <td>{{ $service->id }}</td>
                                                <td>
                                                    @if($service->icon)
                                                        <i class="{{ $service->icon }}" style="font-size:20px;"></i>
                                                    @else
                                                        <span class="text-muted">—</span>
                                                    @endif
                                                </td>
                                                <td>{{ $service->title ?? '—' }}</td>
                                                <td>{{ Str::limit($service->short_description, 70) }}</td>
                                                <td>{{ $service->sort_order }}</td>
                                                <td>
                                                    <a href="{{ route('admin.service.edit', $service->id) }}"
                                                        class="btn btn-sm btn-info mr-1" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.service.destroy', $service->id) }}"
                                                        method="POST" class="d-inline"
                                                        onsubmit="return confirm('Delete this service?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center text-muted py-4">
                                                    No services found.
                                                    <a href="{{ route('admin.service.create') }}">Add one now.</a>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
