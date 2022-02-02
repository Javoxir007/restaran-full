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
                    <form class="row" action="/admin/chefs/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')
                        <div class="mb-3 col-3">
                            <label for="" class="form-label">Old image(oldingi rasmi)</label>
                            <img src="{{ $item->image }}" class="form-control">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" value="{{ $item->image }}">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                        </div>
                        <div class="mb-3 col-2">
                            <label for="" class="form-label">Job</label>
                            <input type="text" class="form-control" name="job" value="{{ $item->job }}">
                        </div>
                        <button type="submit" class="btn btn-success col-4 offset-8">O`zgartirish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection