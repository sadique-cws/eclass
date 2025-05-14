@extends('admin.adminlayout')

@section('content')
<div class="container-fluid dashboard-container">
    <div class="row">
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9 col-md-8 content-column">
            <div class="dashboard-header">
                <h2 class="welcome-text">Welcome, Admin</h2>
                <p class="date-text">{{ date('l, F d, Y') }}</p>
            </div>
            
            <div class="stats-cards">
                <div class="stats-card students-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div class="card-info">
                        <h3 class="count">{{$countStudent}}</h3>
                        <p class="title">Total Students</p>
                    </div>
                </div>
                
                <div class="stats-card courses-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    </div>
                    <div class="card-info">
                        <h3 class="count">{{$countCourses}}</h3>
                        <p class="title">Total Courses</p>
                    </div>
                </div>
                
                <div class="stats-card categories-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                    </div>
                    <div class="card-info">
                        <h3 class="count">{{$countCategories}}</h3>
                        <p class="title">Total Categories</p>
                    </div>
                </div>
                
                <div class="stats-card admissions-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                    </div>
                    <div class="card-info">
                        <h3 class="count">{{$countAdmissions}}</h3>
                        <p class="title">Total Admissions</p>
                    </div>
                </div>
                
                <div class="stats-card payments-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                    </div>
                    <div class="card-info">
                        <h3 class="count">20+</h3>
                        <p class="title">Total Payments</p>
                    </div>
                </div>
                
                <div class="stats-card batches-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg>
                    </div>
                    <div class="card-info">
                        <h3 class="count">20+</h3>
                        <p class="title">Total Batches</p>
                    </div>
                </div>
            </div>
            
            <div class="recent-activity">
                <h4 class="section-title">Recent Activity</h4>
                <div class="activity-container">
                    <!-- Placeholder for recent activity content -->
                    <p class="no-activity">No recent activities to display.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
