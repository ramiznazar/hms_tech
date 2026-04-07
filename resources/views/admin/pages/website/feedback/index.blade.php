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
                                <li class="breadcrumb-item active">Feedbacks</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Feedbacks</h4>
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
                                <h4 class="mt-0 header-title mb-0">All Feedbacks</h4>
                                <a href="{{ route('admin.feedback.create') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus mr-1"></i> Add New
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0 table-centered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="60">#</th>
                                            <th width="70">Image</th>
                                            <th>Name</th>
                                            <th>Post / Title</th>
                                            <th>Description</th>
                                            <th width="120">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($feedbacks as $feedback)
                                            <tr>
                                                <td>{{ $feedback->id }}</td>
                                                <td>
                                                    @if($feedback->image)
                                                        <img src="{{ asset($feedback->image) }}" alt=""
                                                            class="rounded-circle" style="width:44px; height:44px; object-fit:cover;">
                                                    @else
                                                        <span class="text-muted">—</span>
                                                    @endif
                                                </td>
                                                <td>{{ $feedback->name ?? '—' }}</td>
                                                <td>{{ $feedback->post ?? '—' }}</td>
                                                <td>{{ Str::limit($feedback->description, 80) }}</td>
                                                <td>
                                                    <a href="{{ route('admin.feedback.edit', $feedback->id) }}"
                                                        class="btn btn-sm btn-info mr-1" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.feedback.destroy', $feedback->id) }}"
                                                        method="POST" class="d-inline"
                                                        onsubmit="return confirm('Delete this feedback?')">
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
                                                    No feedbacks found.
                                                    <a href="{{ route('admin.feedback.create') }}">Add one now.</a>
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
