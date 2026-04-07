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
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Blog Post</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Edit Blog Post</h4>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Author</label>
                                            <input type="text" name="author" class="form-control" value="{{ old('author', $blog->author) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Published Date</label>
                                            <input type="date" name="published_at" class="form-control" value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d') : '') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Thumbnail</label>
                                            @if($blog->thumbnail)
                                                <div class="mb-2">
                                                    <img src="{{ asset($blog->thumbnail) }}" alt="" style="height:60px; border-radius:4px;">
                                                    <small class="text-muted d-block">Upload new to replace</small>
                                                </div>
                                            @endif
                                            <input type="file" name="thumbnail" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Sort Order</label>
                                            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $blog->sort_order) }}" min="0">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea name="short_description" class="form-control" rows="2">{{ old('short_description', $blog->short_description) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tags</label>
                                            <div id="tag-list">
                                                @if($blog->tags && count($blog->tags))
                                                    @foreach($blog->tags as $i => $tag)
                                                    <div class="d-flex align-items-center mb-2 tag-row">
                                                        <input type="text" name="tags[]" class="form-control mr-2" value="{{ $tag }}" placeholder="e.g. DataAI">
                                                        <button type="button" class="btn {{ $i === 0 ? 'btn-success' : 'btn-danger' }} btn-sm" onclick="{{ $i === 0 ? 'addTagRow()' : 'removeTagRow(this)' }}">
                                                            <i class="fas fa-{{ $i === 0 ? 'plus' : 'minus' }}"></i>
                                                        </button>
                                                    </div>
                                                    @endforeach
                                                @else
                                                <div class="d-flex align-items-center mb-2 tag-row">
                                                    <input type="text" name="tags[]" class="form-control mr-2" placeholder="e.g. DataAI">
                                                    <button type="button" class="btn btn-success btn-sm" onclick="addTagRow()">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="description" class="form-control" rows="10">{{ old('description', $blog->description) }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-2">
                                        <i class="fas fa-save mr-1"></i> Update Post
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
