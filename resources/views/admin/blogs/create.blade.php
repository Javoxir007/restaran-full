@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span class="d-flex align-items-center">Bloglar</span>
                    <a href="{{ route('admin/blogs/index') }}" class="btn btn-outline-success">Ortga qaytish</a>
                </div>

                <div class="card-body">
                    <form class="row" action="{{ route('admin/blogs/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('POST')
                        <div class="mb-3 col-6">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="" class="form-label">Food name</label>
                            <input type="text" class="form-control" name="food_name">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Category</label>
                            <select class="form-select" name="category_id">
                                <option>Tanlang</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Date</label>
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Author</label>
                            <select class="form-select" name="author_id">
                                <option>Tanlang</option>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="" class="form-label">Short description</label>
                            <textarea class="form-control" rows="3" name="short_description"></textarea>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="" class="form-label">Full description</label>
                            <textarea class="form-control" rows="3" name="full_description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success col-4 offset-8">Yaratish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection