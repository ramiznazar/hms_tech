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
                                <li class="breadcrumb-item active">Blog Posts</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Blog Posts</h4>
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
                                <h4 class="mt-0 header-title mb-0">All Blog Posts</h4>
                                <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus mr-1"></i> Add New
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0 table-centered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="60">#</th>
                                            <th width="80">Thumbnail</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th width="120">Published</th>
                                            <th width="80">Order</th>
                                            <th width="120">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($blogs as $blog)
                                            <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>
                                                    @if($blog->thumbnail)
                                                        <img src="{{ asset($blog->thumbnail) }}" alt="" style="width:60px; height:40px; object-fit:cover; border-radius:4px;">
                                                    @else
                                                        <span class="text-muted">—</span>
                                                    @endif
                                                </td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->author }}</td>
                                                <td>{{ $blog->published_at ? $blog->published_at->format('d M Y') : '—' }}</td>
                                                <td>{{ $blog->sort_order }}</td>
                                                <td>
                                                    <a href="{{ route('admin.blog.edit', $blog->id) }}"
                                                        class="btn btn-sm btn-info mr-1" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.blog.destroy', $blog->id) }}"
                                                        method="POST" class="d-inline"
                                                        onsubmit="return confirm('Delete this blog post?')">
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
                                                <td colspan="7" class="text-center text-muted py-4">
                                                    No blog posts found.
                                                    <a href="{{ route('admin.blog.create') }}">Add one now.</a>
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
