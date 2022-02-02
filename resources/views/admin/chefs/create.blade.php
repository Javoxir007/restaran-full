@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span class="d-flex align-items-center">Oshpazlar</span>
                    <a href="{{ route('admin/chefs/index') }}" class="btn btn-outline-success">Ortga qaytish</a>
                </div>

                <div class="card-body">
                    <form class="row" action="{{ route('admin/chefs/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('POST')
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Job</label>
                            <input type="text" class="form-control" name="job">
                        </div>
                        <button type="submit" class="btn btn-success col-4 offset-8">Yaratish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection