@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span class="d-flex align-items-center">Maxsulotlar</span>
                    <a href="{{ route('admin/product/index') }}" class="btn btn-outline-success">Ortga qaytish</a>
                </div>

                <div class="card-body">
                    <form class="row" action="/admin/product/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')
                        <div class="mb-3 col-3">
                            <label for="" class="form-label">Now image(xozirgi rasmi)</label>
                            <img src="{{ $item->image }}" class="form-control">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" value="{{ $item->image }}">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                        </div>
                        <div class="mb-3 col-2">
                            <label for="" class="form-label">Category</label>
                            <select class="form-select" name="category_id">
                                <option>{{ $item->category->name }}</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-3">
                            <label for="" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $item->price }}">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="" class="form-label">Old Price</label>
                            <input type="text" class="form-control" name="old_price" value="{{ $item->old_price }}" placeholder="Agar maxsulot arzonlagan bo`lsa oldingi baxosini ko`rsating bo`lmasa shart emas">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="" class="form-label">Discount</label>
                            <input type="text" class="form-control" name="discount" value="{{ $item->discount }}">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="" class="form-label">Stock</label>
                            <input type="text" class="form-control" name="on_stock" value="{{ $item->on_stock }}">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="" class="form-label">Description</label>
                            <textarea class="form-control" rows="3" name="description">{{ $item->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success col-4 offset-8">Yaratish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection