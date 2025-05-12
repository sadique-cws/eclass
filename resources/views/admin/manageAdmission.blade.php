@extends('admin.adminlayout')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include("admin.sidebar")
            </div>
            <div class="col-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="">Manage Admissions ({{ count($admissions) }})</h2>

                    <a href="" class="btn btn-success">
 Add New Admission <i class="bi bi-send"></i></a>
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
                    @foreach ($admissions as $ad)
                        <tr>
                            <td>{{$ad->id}}</td>
                            <td>{{$ad->name}}</td>
                            <td>{{$ad->contact}}</td>
                            <td>{{$ad->email}}</td>
                            <td>{{$ad->education}}</td>
                            <td>
                                <a href="" class="btn btn-danger"><i class="bi bi-x-circle"></i>
 Cancel</a>
                                <a href="" class="btn btn-success"><i class="bi bi-check2-circle"></i>
 Approve</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
