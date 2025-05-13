@extends('admin.adminlayout')

@section('title')
    Insert Category
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include("admin.sidebar")
            </div>
            <div class="col-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="">Insert Category</h2>

                    <a href="{{ route("categories.index") }}" class="btn btn-success"> View all Categories <i class="bi bi-send"></i></a>
                </div>

                <hr>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route("categories.store") }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Category title</label>
                                <input type="text" name="cat_title" value="{{ old("cat_title") }}" class="form-control">
                                @error('cat_title')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Categdescription</label>
                                <textarea rows="5" name="cat_description" class="form-control">{{ old("cat_description") }}</textarea>
                                @error('cat_description')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit"  class="btn btn-success w-100" value="Create Category">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
