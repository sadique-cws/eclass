@extends('landing.publiclayout')

@section('title')
    Apply for Admission
@endsection

@section('content')
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Left Section -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                  @session('msg')
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>{{ session('msg') }}</p>
                                <hr>
                            </div>
                        @endsession
                <h1 class="fw-bold text-primary mb-4">Why Choose <span class="text-danger">E-Class?</span></h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent">
                        <i class="bi bi-star-fill text-warning me-2"></i> Expert Faculty with Real Experience
                    </li>
                    <li class="list-group-item bg-transparent">
                        <i class="bi bi-currency-rupee text-success me-2"></i> Affordable Pricing & Scholarships
                    </li>
                    <li class="list-group-item bg-transparent">
                        <i class="bi bi-laptop-fill text-info me-2"></i> 100% Online + Offline Hybrid Model
                    </li>
                    <li class="list-group-item bg-transparent">
                        <i class="bi bi-graph-up-arrow text-primary me-2"></i> Proven Track Record of Success
                    </li>
                </ul>
            </div>

            <!-- Right Section - Form -->
            <div class="col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white text-center fw-bold">
                        Join E-Class Today — 100% Free Registration!
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    placeholder="Enter your full name">
                                @error('name')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                    placeholder="Enter your email">
                                @error('email')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Contact Number</label>
                                <input type="text" name="contact" value="{{ old('contact') }}" class="form-control"
                                    placeholder="e.g. 9876543210">
                                @error('contact')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Education Qualification</label>
                                <input type="text" name="eduction" value="{{ old('eduction') }}" class="form-control"
                                    placeholder="e.g. 12th Pass, B.Sc., etc.">
                                @error('eduction')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Choose a secure password">
                                @error('password')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-danger w-100 fw-bold" value="Apply Now">
                            </div>
                        </form>


                    </div>
                </div>
                <p class="text-center mt-3 text-muted small">Already have an account? <a href="/login">Login here</a></p>
            </div>
        </div>
    </div>
@endsection
