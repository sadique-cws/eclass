@extends('admin.adminlayout')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include("admin.sidebar")
            </div>
            <div class="col-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="">Manage Categories ({{ count($categories) }})</h2>

                    <a href="{{ route("categories.create") }}" class="btn btn-success">
 Add New Category <i class="bi bi-send"></i></a>
                </div>

                <hr>
                <table class="table table-hover table-bodered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category title</th>
                            <th>Category Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($categories as $cat)
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->cat_title}}</td>
                            <td>{{$cat->cat_description}}</td>

                            <td class="d-flex gap-2">
                                <form method="post" action="{{ route("categories.destroy", $cat) }}">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-x-circle"></i> Delete</button>
                                </form>
                                <a href="{{ route("categories.edit", $cat) }}" class="btn btn-success"><i class="bi bi-check2-circle"></i>
 Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
