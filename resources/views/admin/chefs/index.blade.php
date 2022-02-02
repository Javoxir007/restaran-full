@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span class="d-flex align-items-center">Oshpazlar</span>
                    <a href="{{ route('admin/chefs/create') }}" class="btn btn-outline-success">Yangi qo`shish</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th width="5%">Image</th>
                                <th>Name</th>
                                <th>Job</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($chefs as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="{{ $item->image }}" width="100%">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->job }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin/chefs/edit', $item->id) }}" class="btn btn-primary">O`zgartirish</a>
                                </td>
                                <td class="text-center"> 
                                    <form action="{{ route('admin/chefs/destroy', $item->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                        <button class="btn btn-danger" onclick="return confirm('Aniq o`chirmoqchimisiz?')">O`chirish</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                    {{ $chefs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection