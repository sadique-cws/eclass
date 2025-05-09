@extends('landing.publiclayout')

@section('title')
    Student Dashboard
@endsection

@section('content')
    <div class="container my-5">
        <!-- Welcome Section -->
        <div class="bg-warning p-5 rounded shadow-sm mb-4 text-dark">
            <h2 class="fw-bold">Welcome back, {{ Auth::user()->name ?? 'Student' }}!</h2>
            <p class="lead">Here's what's happening in your learning portal today.</p>
        </div>

        <!-- Dashboard Cards -->
        <div class="row g-4">
            <!-- Courses Enrolled -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-journal-check display-4 text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold">Enrolled Courses</h5>
                        <p class="card-text fs-4">5 Active Courses</p>
                    </div>
                </div>
            </div>

            <!-- Progress Tracker -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-graph-up-arrow display-4 text-success"></i>
                        </div>
                        <h5 class="card-title fw-bold">Progress</h5>
                        <p class="card-text fs-4">72% Overall</p>
                    </div>
                </div>
            </div>

            <!-- Announcements -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-megaphone-fill display-4 text-danger"></i>
                        </div>
                        <h5 class="card-title fw-bold">Announcements</h5>
                        <p class="card-text fs-4">3 New Notices</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Options -->
        <div class="mt-5">
            <h4 class="mb-3">Quick Access</h4>
            <div class="d-flex flex-wrap gap-3">
                <button class="btn btn-outline-dark px-4 py-2">View Timetable</button>
                <button class="btn btn-outline-dark px-4 py-2">Download Materials</button>
                <button class="btn btn-outline-dark px-4 py-2">Ask a Doubt</button>
                <button class="btn btn-outline-dark px-4 py-2">Attendance Report</button>
            </div>
        </div>
    </div>
@endsection
