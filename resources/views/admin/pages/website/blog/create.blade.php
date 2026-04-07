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
                                <li class="breadcrumb-item"><a href="{{ route('admin.blog.index') }}">Blog Posts</a></li>
                                <li class="breadcrumb-item active">Add New</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Blog Post</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">New Blog Post</h4>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control" placeholder="Post title" value="{{ old('title') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Author</label>
                                            <input type="text" name="author" class="form-control" value="{{ old('author', 'HMS Tech Team') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Published Date</label>
                                            <input type="date" name="published_at" class="form-control" value="{{ old('published_at', date('Y-m-d')) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Thumbnail</label>
                                            <input type="file" name="thumbnail" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Sort Order</label>
                                            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}" min="0">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea name="short_description" class="form-control" rows="2" placeholder="Brief summary shown on blog listing">{{ old('short_description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tags</label>
                                            <div id="tag-list">
                                                <div class="d-flex align-items-center mb-2 tag-row">
                                                    <input type="text" name="tags[]" class="form-control mr-2" placeholder="e.g. DataAI">
                                                    <button type="button" class="btn btn-success btn-sm" onclick="addTagRow()">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="description" class="form-control" rows="10">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-2">
                                        <i class="fas fa-save mr-1"></i> Save Post
                                    </button>
                                    <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    function addTagRow() {
        var list = document.getElementById('tag-list');
        var row = document.createElement('div');
        row.className = 'd-flex align-items-center mb-2 tag-row';
        row.innerHTML = '<input type="text" name="tags[]" class="form-control mr-2" placeholder="e.g. DataAI">'
                      + '<button type="button" class="btn btn-danger btn-sm" onclick="removeTagRow(this)">'
                      + '<i class="fas fa-minus"></i></button>';
        list.appendChild(row);
    }
    function removeTagRow(btn) {
        btn.closest('.tag-row').remove();
    }

    ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'underline', 'strikethrough', '|',
                      'bulletedList', 'numberedList', 'blockQuote', '|',
                      'link', 'insertTable', '|', 'undo', 'redo']
        })
        .catch(error => console.error(error));
</script>
@endpush
@endsection
