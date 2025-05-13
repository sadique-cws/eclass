@extends('admin.adminlayout')

@section('title')
    Manage Courses
@endsection

@section('content')
<div class="container-fluid dashboard-container">
    <div class="row">
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9 col-md-8 content-column">
            <div class="dashboard-header">
                <h2 class="page-title">Manage Courses</h2>
                <div class="header-actions">
                    <div class="student-count">
                        <span class="badge bg-primary">{{ count($courses) }} Courses</span>
                    </div>
                    <div class="search-container">
                        <input type="text" id="studentSearch" class="search-input" placeholder="Search students...">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="search-icon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                </div>
            </div>

            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Duration</th>
                            <th>Instructor</th>
                            <th>Category</th>
                            <th>Fee</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{$course->id}}</td>
                                <td><span>{{$course->title}}</span></td>
                                <td><span>{{$course->duration}}</span></td>
                                <td><span>{{$course->instructor}}</span></td>
                                <td><span>{{$course->category}}</span></td>
                                <td><span>{{$course->discount_price}}<del>{{$course->fee}}</del></span></td>
                                <td><img src="{{ $course->image }}" alt="{{ $course->title }}" class="course-image"></td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="" class="btn-view" title="View details">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            <span>View</span>
                                        </a>
                                        <a href="" class="btn-inactive" title="Mark as inactive">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <span>Inactive</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
