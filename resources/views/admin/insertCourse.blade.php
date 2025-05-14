@extends('admin.adminlayout')

@section('title')
    Insert Course
@endsection

@section('content')
<div class="container-fluid dashboard-container">
    <div class="row">
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9 col-md-8 content-column">
            <div class="dashboard-header">
                <h2 class="page-title">Insert Course</h2>
                <div class="header-actions">
                    <a href="{{ route('course.index') }}" class="btn-back">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                        <span>Back to Courses</span>
                    </a>
                </div>
            </div>

            <div class="form-container">
                <form action="{{ route('course.store') }}" method="POST" class="custom-form" enctype="multipart/form-data">
                    @csrf
                   <div class="row">
                     <div class="form-group col">
                        <label for="title" class="form-label">Course Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control-custom" placeholder="Enter course title">
                        @error('title')
                            <div class="form-error">{{$message}}</div>
                        @enderror
                    </div>
                     <div class="form-group col">
                        <label for="duration" class="form-label">Course Duration</label>
                        <input type="text" id="duration" name="duration" value="{{ old('duration') }}" class="form-control-custom" placeholder="Enter course duration">
                        @error('duration')
                            <div class="form-error">{{$message}}</div>
                        @enderror
                    </div>
                     <div class="form-group col">
                        <label for="author" class="form-label">Course Author</label>
                        <input type="text" id="author" name="author" value="{{ old('author') }}" class="form-control-custom" placeholder="Enter course author">
                        @error('author')
                            <div class="form-error">{{$message}}</div>
                        @enderror
                    </div>
                   </div>
                    
                    <div class="row">
                         <div class="form-group col">
                        <label for="fees" class="form-label">Course Fees</label>
                        <input type="text" id="fees" name="fees" value="{{ old('fees') }}" class="form-control-custom" placeholder="Enter course fees">
                        @error('fees')
                            <div class="form-error">{{$message}}</div>
                        @enderror
                    </div>
                     <div class="form-group col">
                        <label for="fees" class="form-label">Course Discount Price</label>
                        <input type="text" id="discount_price" name="discount_price" value="{{ old('discount_price') }}" class="form-control-custom" placeholder="Enter course discount price">
                        @error('discount_price')
                            <div class="form-error">{{$message}}</div>
                        @enderror
                    </div>
                     <div class="form-group col">
                        <label for="fees" class="form-label">Course Category</label>
                        <select id="category_id" name="category_id" value="{{ old('category_id') }}" class="form-control-custom" placeholder="Enter course category">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->cat_title }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="form-error">{{$message}}</div>
                        @enderror
                    </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="description" class="form-label">Course Description</label>
                        <textarea id="description" rows="5" name="description" class="form-control-custom" placeholder="Enter course description">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="form-error">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image" class="form-label">Course Image</label>
                        <input type="file" id="image" name="image" class="form-control-custom">
                        @error('image')
                            <div class="form-error">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn-submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                            Create Course
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
