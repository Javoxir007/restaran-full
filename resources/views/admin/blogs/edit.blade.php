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
                    <form class="row" action="/admin/blogs/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')
                        <div class="mb-3 col-3">
                            <label for="" class="form-label">Now image(xozirgi rasmi)</label>
                            <img src="{{ $item->image }}" class="form-control">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" value="{{ $item->image }}">
                        </div>
                        <div class="mb-3 col-5">
                            <label for="" class="form-label">Food name</label>
                            <input type="text" class="form-control" name="food_name" value="{{ $item->food_name }}">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Category</label>
                            <select class="form-select" name="category_id">
                                <option>{{ $item->category->name }}</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" value="{{ $item->date }}">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Author</label>
                            <select class="form-select" name="author_id">
                                <option>{{ $item->author->name }}</option>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="" class="form-label">Short description</label>
                            <textarea class="form-control" rows="3" name="short_description">{{ $item->short_description }}</textarea>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="" class="form-label">Full description</label>
                            <textarea class="form-control" rows="3" name="full_description">{{ $item->full_description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success col-4 offset-8">Yaratish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

