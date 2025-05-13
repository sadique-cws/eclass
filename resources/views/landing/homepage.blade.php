@extends('landing.publiclayout')

@section('title', 'Welcome')

@section('content')
    <x-banner/>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose Our Platform?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-laptop fs-1 text-primary mb-3"></i>
                            <h4>Learn Anywhere</h4>
                            <p>Access courses from any device, anytime, anywhere</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-people fs-1 text-primary mb-3"></i>
                            <h4>Expert Teachers</h4>
                            <p>Learn from industry experts and experienced educators</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-certificate fs-1 text-primary mb-3"></i>
                            <h4>Get Certified</h4>
                            <p>Earn certificates upon completing your courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
