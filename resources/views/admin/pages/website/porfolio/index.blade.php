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
                                <li class="breadcrumb-item"><a href="#">Website</a></li>
                                <li class="breadcrumb-item active">Portfolio</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Portfolio</h4>
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
                                <h4 class="mt-0 header-title mb-0">All Portfolio Items</h4>
                                <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus mr-1"></i> Add New
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0 table-centered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="60">#</th>
                                            <th width="70">Thumbnail</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Client</th>
                                            <th>Date</th>
                                            <th>Order</th>
                                            <th width="100">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($portfolios as $portfolio)
                                            <tr>
                                                <td>{{ $portfolio->id }}</td>
                                                <td>
                                                    @if($portfolio->thumbnail)
                                                        <img src="{{ asset($portfolio->thumbnail) }}" alt=""
                                                            class="rounded" style="width:50px; height:40px; object-fit:cover;">
                                                    @else
                                                        <span class="text-muted">—</span>
                                                    @endif
                                                </td>
                                                <td>{{ $portfolio->title ?? '—' }}</td>
                                                <td>{{ $portfolio->category->name ?? '—' }}</td>
                                                <td>{{ $portfolio->client_name ?? '—' }}</td>
                                                <td>{{ $portfolio->project_date ?? '—' }}</td>
                                                <td>{{ $portfolio->sort_order }}</td>
                                                <td>
                                                    <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}"
                                                        class="btn btn-sm btn-info mr-1" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}"
                                                        method="POST" class="d-inline"
                                                        onsubmit="return confirm('Delete this portfolio item?')">
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
                                                <td colspan="8" class="text-center text-muted py-4">
                                                    No portfolio items found.
                                                    <a href="{{ route('admin.portfolio.create') }}">Add one now.</a>
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