@extends('admin.adminlayout')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include("admin.sidebar")
            </div>
            <div class="col-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="">Manage Students ({{ count($students) }})</h2>
                </div>

                <hr>
                <table class="table table-hover table-bodered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Education</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($students as $std)
                        <tr>
                            <td>{{$std->id}}</td>
                            <td>{{$std->name}}</td>
                            <td>{{$std->contact}}</td>
                            <td>{{$std->email}}</td>
                            <td>{{$std->education}}</td>
                            <td>
                                <a href="" class="btn btn-success"><i class="bi bi-x-circle"></i>View</a>
                                <a href="" class="btn btn-danger"><i class="bi bi-x-circle"></i>Inactive</a>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
