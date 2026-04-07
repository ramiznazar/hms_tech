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
                                <li class="breadcrumb-item"><a href="{{ route('admin.pricing.index') }}">Pricing Plans</a></li>
                                <li class="breadcrumb-item active">Add New</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Pricing Plan</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">New Pricing Plan</h4>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('admin.pricing.store') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Plan Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="e.g. Starter Plan" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Price ($)</label>
                                            <input type="number" name="price" class="form-control" placeholder="e.g. 19" value="{{ old('price', 0) }}" min="0" step="0.01">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Billing Cycle</label>
                                            <select name="billing_cycle" class="form-control">
                                                <option value="Month" {{ old('billing_cycle') == 'Month' ? 'selected' : '' }}>Month</option>
                                                <option value="Year" {{ old('billing_cycle') == 'Year' ? 'selected' : '' }}>Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Sort Order</label>
                                            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}" min="0">
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <div class="form-group mb-0 mt-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="is_featured" name="is_featured" {{ old('is_featured') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="is_featured">Featured Plan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description <small class="text-muted">(shown below price)</small></label>
                                            <textarea name="description" class="form-control" rows="2" placeholder="Brief description for this plan">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h5 class="mb-3">Plan Features</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="feature-list">
                                            <div class="d-flex align-items-center mb-2 feature-row">
                                                <input type="text" name="features[]" class="form-control mr-2" placeholder="e.g. Patent Search">
                                                <button type="button" class="btn btn-success btn-sm" onclick="addFeatureRow()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-2">
                                        <i class="fas fa-save mr-1"></i> Save Plan
                                    </button>
                                    <a href="{{ route('admin.pricing.index') }}" class="btn btn-secondary waves-effect">
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
    function addFeatureRow() {
        var list = document.getElementById('feature-list');
        var row = document.createElement('div');
        row.className = 'd-flex align-items-center mb-2 feature-row';
        row.innerHTML = '<input type="text" name="features[]" class="form-control mr-2" placeholder="e.g. Patent Search">'
                      + '<button type="button" class="btn btn-danger btn-sm" onclick="removeFeatureRow(this)">'
                      + '<i class="fas fa-minus"></i></button>';
        list.appendChild(row);
    }
    function removeFeatureRow(btn) {
        btn.closest('.feature-row').remove();
    }
</script>
@endpush
@endsection
