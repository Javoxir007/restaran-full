@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span class="d-flex align-items-center">Mualliflar</span>
                    <a href="{{ route('admin/author/index') }}" class="btn btn-outline-success">Ortga qaytish</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin/author/store') }}" method="POST">
                    @csrf @method('POST')
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <button type="submit" class="btn btn-success col-4 offset-8">Yaratish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection