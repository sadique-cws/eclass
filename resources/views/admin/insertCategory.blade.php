@extends('admin.adminlayout')

@section('title')
    Insert Category
@endsection

@section('content')
<div class="container-fluid dashboard-container">
    <div class="row">
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9 col-md-8 content-column">
            <div class="dashboard-header">
                <h2 class="page-title">Insert Category</h2>
                <div class="header-actions">
                    <a href="{{ route('categories.index') }}" class="btn-back">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                        <span>Back to Categories</span>
                    </a>
                </div>
            </div>

            <div class="form-container">
                <form action="{{ route('categories.store') }}" method="POST" class="custom-form">
                    @csrf
                    <div class="form-group">
                        <label for="cat_title" class="form-label">Category Title</label>
                        <input type="text" id="cat_title" name="cat_title" value="{{ old('cat_title') }}" class="form-control-custom" placeholder="Enter category title">
                        @error('cat_title')
                            <div class="form-error">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="cat_description" class="form-label">Category Description</label>
                        <textarea id="cat_description" rows="5" name="cat_description" class="form-control-custom" placeholder="Enter category description">{{ old('cat_description') }}</textarea>
                        @error('cat_description')
                            <div class="form-error">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn-submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                            Create Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
