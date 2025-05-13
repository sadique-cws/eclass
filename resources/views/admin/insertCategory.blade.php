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

<style>
/* Form styling */
.form-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    padding: 25px;
    margin-bottom: 2rem;
}

.custom-form {
    max-width: 100%;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #495057;
}

.form-control-custom {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #e9ecef;
    border-radius: 5px;
    font-size: 15px;
    transition: all 0.3s ease;
}

.form-control-custom:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(51, 154, 240, 0.15);
    border-color: #339af0;
}

.form-error {
    margin-top: 5px;
    color: #ff6b6b;
    font-size: 14px;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    margin-top: 30px;
}

.btn-submit {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    background-color: #40c057;
    color: white;
    border: none;
    border-radius: 5px;
    font-weight: 500;
    font-size: 15px;
    cursor: pointer;
    transition: background-color 0.2s ease;
}

.btn-submit:hover {
    background-color: #37b24d;
}

.btn-back {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 16px;
    background-color: #f8f9fa;
    color: #495057;
    border-radius: 5px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s ease;
}

.btn-back:hover {
    background-color: #e9ecef;
    color: #212529;
}
</style>
@endsection
