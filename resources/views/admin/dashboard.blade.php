@extends('admin.adminlayout')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include("admin.sidebar")
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4 mb-4">
                        <div class="card bg-danger text-white px-3 py-2 rounded-lg">
                            <div class="card-body">
                                <h2 class="display-6">20+</h2>
                                <h6 class="fw-bold">Total Students</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="card bg-info text-white px-3 py-2 rounded-lg">
                            <div class="card-body">
                                <h2 class="display-6">20+</h2>
                                <h6 class="fw-bold">Total Courses</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="card bg-dark text-white px-3 py-2 rounded-lg">
                            <div class="card-body">
                                <h2 class="display-6">20+</h2>
                                <h6 class="fw-bold">Total Categories</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="card bg-warning text-white px-3 py-2 rounded-lg">
                            <div class="card-body">
                                <h2 class="display-6">20+</h2>
                                <h6 class="fw-bold">Total Admission</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="card bg-success text-white px-3 py-2 rounded-lg">
                            <div class="card-body">
                                <h2 class="display-6">20+</h2>
                                <h6 class="fw-bold">Total Payments</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="card bg-primary text-white px-3 py-2 rounded-lg">
                            <div class="card-body">
                                <h2 class="display-6">20+</h2>
                                <h6 class="fw-bold">Total Batches</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
