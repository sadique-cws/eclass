@extends('landing.publiclayout')

@section('title')
    Student Login
@endsection

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <!-- Left Section (Welcome Message) -->
            <div class="col-lg-6 mb-4">
                <div class="p-4 bg-warning rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold display-5 text-dark mb-3">Welcome Back!</h2>
                    <p class="lead text-dark">
                        Access your dashboard, track your progress, and continue your learning journey with {{ env('APP_NAME') }}.
                    </p>
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Student" class="img-fluid mt-4" style="max-width: 300px;">
                </div>
            </div>

            <!-- Right Section (Login Form) -->
            <div class="col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-dark text-white text-center fw-bold">
                        Student Login Portal
                    </div>
                    <div class="card-body">
                        @session('msg')
                            <div class="alert alert-danger" role="alert">{{session("msg")}}</div>
                        @endsession
                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email">
                                @error('email')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                @error('password')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="remember" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-dark w-100 fw-bold" value="Login">
                            </div>

                            <p class="text-center text-muted small mt-2">
                                New student? <a href="{{ route('public.apply') }}">Apply now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
