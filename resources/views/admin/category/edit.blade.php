@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span class="d-flex align-items-center">Kategoriyalar</span>
                    <a href="{{ route('admin/category/index') }}" class="btn btn-outline-success">Ortga qaytish</a>
                </div>

                <div class="card-body">
                    <form action="/admin/category/{{ $item->id }}" method="POST">
                    @csrf @method('PATCH')
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                        </div>
                        <button type="submit" class="btn btn-success col-4 offset-8">O`zgartirish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection