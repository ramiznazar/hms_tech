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
                                <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Portfolio Item</h4>
                    </div>
                </div>
            </div>

            <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Basic Info -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Basic Info</h4>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Project title" value="{{ old('title', $portfolio->title) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Subtitle <small class="text-muted">(tag above title)</small></label>
                                            <input type="text" name="subtitle" class="form-control" placeholder="e.g. techvantage solutions" value="{{ old('subtitle', $portfolio->subtitle) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Short Description <small class="text-muted">(shown on listing page)</small></label>
                                            <textarea name="short_description" class="form-control" rows="2" placeholder="Brief description for the portfolio card">{{ old('short_description', $portfolio->short_description) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description 1</label>
                                            <textarea name="description_1" class="form-control" rows="4" placeholder="First paragraph on detail page">{{ old('description_1', $portfolio->description_1) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description 2</label>
                                            <textarea name="description_2" class="form-control" rows="4" placeholder="Second paragraph on detail page">{{ old('description_2', $portfolio->description_2) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Details -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Project Details</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Client Name</label>
                                            <input type="text" name="client_name" class="form-control" placeholder="e.g. Edward Ummen" value="{{ old('client_name', $portfolio->client_name) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="category_id" class="form-control">
                                                <option value="">— Select Category —</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat->id }}" {{ old('category_id', $portfolio->category_id) == $cat->id ? 'selected' : '' }}>
                                                        {{ $cat->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" name="location" class="form-control" placeholder="e.g. California, USA" value="{{ old('location', $portfolio->location) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Project Date</label>
                                            <input type="text" name="project_date" class="form-control" placeholder="e.g. 30 Oct, 2023" value="{{ old('project_date', $portfolio->project_date) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" name="status" class="form-control" placeholder="e.g. 100% Satisfied" value="{{ old('status', $portfolio->status) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Duration</label>
                                            <input type="text" name="duration" class="form-control" placeholder="e.g. 03 Months" value="{{ old('duration', $portfolio->duration) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Live Preview Links -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Live Preview Links</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Website URL</label>
                                            <input type="text" name="website_url" class="form-control" placeholder="https://example.com" value="{{ old('website_url', $portfolio->website_url) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>iOS / App Store URL</label>
                                            <input type="text" name="ios_url" class="form-control" placeholder="https://apps.apple.com/..." value="{{ old('ios_url', $portfolio->ios_url) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Android / Google Play URL</label>
                                            <input type="text" name="android_url" class="form-control" placeholder="https://play.google.com/..." value="{{ old('android_url', $portfolio->android_url) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Working Process -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Working Process</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>What We Built</label>
                                            <textarea name="what_we_built" class="form-control" rows="5" placeholder="Describe what was built...">{{ old('what_we_built', $portfolio->what_we_built) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Why It Was Built</label>
                                            <textarea name="why_it_was_built" class="form-control" rows="5" placeholder="Explain the purpose and goals...">{{ old('why_it_was_built', $portfolio->why_it_was_built) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Technologies Used</label>
                                            <div id="tech-list">
                                                @if($portfolio->technologies && count($portfolio->technologies))
                                                    @foreach($portfolio->technologies as $i => $tech)
                                                        <div class="d-flex align-items-center mb-2 tech-row">
                                                            <input type="text" name="technologies[]" class="form-control mr-2" placeholder="e.g. Laravel" value="{{ $tech }}">
                                                            @if($i === 0)
                                                                <button type="button" class="btn btn-success btn-sm tech-add-btn" onclick="addTechRow()">
                                                                    <i class="fas fa-plus"></i>
                                                                </button>
                                                            @else
                                                                <button type="button" class="btn btn-danger btn-sm" onclick="removeTechRow(this)">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="d-flex align-items-center mb-2 tech-row">
                                                        <input type="text" name="technologies[]" class="form-control mr-2" placeholder="e.g. Laravel">
                                                        <button type="button" class="btn btn-success btn-sm tech-add-btn" onclick="addTechRow()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Images & Order -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Images & Display Order</h4>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Thumbnail <small class="text-muted">(leave blank to keep current)</small></label>
                                            @if($portfolio->thumbnail)
                                                <div class="mb-2">
                                                    <img src="{{ asset($portfolio->thumbnail) }}" alt="Current thumbnail"
                                                        style="height:80px; border-radius:6px; object-fit:cover;">
                                                </div>
                                            @endif
                                            <input type="file" name="thumbnail" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Gallery Images <small class="text-muted">(leave blank to keep current)</small></label>
                                            @if($portfolio->gallery_images)
                                                <div class="d-flex flex-wrap gap-2 mb-2">
                                                    @foreach($portfolio->gallery_images as $img)
                                                        <img src="{{ asset($img) }}" alt=""
                                                            style="height:60px; width:80px; object-fit:cover; border-radius:4px;">
                                                    @endforeach
                                                </div>
                                            @endif
                                            <input type="file" name="gallery_images[]" class="form-control" accept="image/*" multiple>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Sort Order</label>
                                            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $portfolio->sort_order) }}" min="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="row mb-4">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-2">
                            <i class="fas fa-save mr-1"></i> Update Portfolio Item
                        </button>
                        <a href="{{ route('admin.portfolio.index') }}" class="btn btn-secondary waves-effect">
                            Cancel
                        </a>
                    </div>
                </div>

            </form>

        </div>

    </div>
@endsection

@push('scripts')
<script>
    function addTechRow() {
        var list = document.getElementById('tech-list');
        var row = document.createElement('div');
        row.className = 'd-flex align-items-center mb-2 tech-row';
        row.innerHTML = '<input type="text" name="technologies[]" class="form-control mr-2" placeholder="e.g. Laravel">'
                      + '<button type="button" class="btn btn-danger btn-sm" onclick="removeTechRow(this)">'
                      + '<i class="fas fa-minus"></i></button>';
        list.appendChild(row);
    }

    function removeTechRow(btn) {
        btn.closest('.tech-row').remove();
    }
</script>
@endpush
