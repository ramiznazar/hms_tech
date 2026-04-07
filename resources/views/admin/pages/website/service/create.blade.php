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
                                <li class="breadcrumb-item"><a href="{{ route('admin.service.index') }}">Services</a></li>
                                <li class="breadcrumb-item active">Add New</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Service</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">New Service</h4>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('admin.service.store') }}" method="POST">
                                @csrf

                                <!-- Card Info -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="e.g. Mobile App Development" value="{{ old('title') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Icon</label>
                                            <select name="icon" class="form-control">
                                                <option value="">— Select Icon —</option>
                                                <option value="fa-solid fa-mobile-screen-button" {{ old('icon') == 'fa-solid fa-mobile-screen-button' ? 'selected' : '' }}>App Development</option>
                                                <option value="fa-solid fa-globe" {{ old('icon') == 'fa-solid fa-globe' ? 'selected' : '' }}>Web Development</option>
                                                <option value="fa-solid fa-bullhorn" {{ old('icon') == 'fa-solid fa-bullhorn' ? 'selected' : '' }}>Digital Marketing</option>
                                                <option value="fa-solid fa-pen-ruler" {{ old('icon') == 'fa-solid fa-pen-ruler' ? 'selected' : '' }}>Graphic Designing</option>
                                                <option value="fa-solid fa-laptop-code" {{ old('icon') == 'fa-solid fa-laptop-code' ? 'selected' : '' }}>Freelancing</option>
                                                <option value="fa-solid fa-screwdriver-wrench" {{ old('icon') == 'fa-solid fa-screwdriver-wrench' ? 'selected' : '' }}>Maintenance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Sort Order</label>
                                            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}" min="0">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Short Description <small class="text-muted">(shown on listing card)</small></label>
                                            <textarea name="short_description" class="form-control" rows="3" placeholder="Brief description for the service card">{{ old('short_description') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h5 class="mb-3">Detail Page Content</h5>

                                <!-- Detail Info -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Heading <small class="text-muted">(left column on detail page)</small></label>
                                            <input type="text" name="heading" class="form-control" placeholder="e.g. Delivering High-Quality Mobile Experiences" value="{{ old('heading') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description 1</label>
                                            <textarea name="description_1" class="form-control" rows="5" placeholder="First paragraph on detail page">{{ old('description_1') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description 2</label>
                                            <textarea name="description_2" class="form-control" rows="5" placeholder="Second paragraph on detail page">{{ old('description_2') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h5 class="mb-3">Technologies &amp; Languages Used</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Technologies <small class="text-muted">(e.g. Flutter, React Native)</small></label>
                                            <div id="tech-list">
                                                <div class="d-flex align-items-center mb-2 tech-row">
                                                    <input type="text" name="technologies[]" class="form-control mr-2" placeholder="e.g. Flutter">
                                                    <button type="button" class="btn btn-success btn-sm tech-add-btn" onclick="addTechRow()">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-2">
                                        <i class="fas fa-save mr-1"></i> Save Service
                                    </button>
                                    <a href="{{ route('admin.service.index') }}" class="btn btn-secondary waves-effect">
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
<script>
    function addTechRow() {
        var list = document.getElementById('tech-list');
        var row = document.createElement('div');
        row.className = 'd-flex align-items-center mb-2 tech-row';
        row.innerHTML = '<input type="text" name="technologies[]" class="form-control mr-2" placeholder="e.g. Flutter">'
                      + '<button type="button" class="btn btn-danger btn-sm" onclick="removeTechRow(this)">'
                      + '<i class="fas fa-minus"></i></button>';
        list.appendChild(row);
    }
    function removeTechRow(btn) {
        btn.closest('.tech-row').remove();
    }
</script>
@endpush
@endsection
