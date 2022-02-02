<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{

    public function index()
    {
        $authors = Author::with(['blog:id,author_id'])->orderBy('id', 'desc')->paginate(10);
        return view('admin/author/index', compact('authors'));
    }

    public function create()
    {
        return view('admin/author/create');
    }

    public function store(Request $request)
    {
        $authorData = $request->validate([
            'name' => 'required|string|min:3|max:25'
        ]);

        $created = Author::create($authorData);
        
        if($created){
            return redirect()->route('admin/author/index')->with(['success' => 'Kategoriya yaratildi']);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $item = Author::findOrFail($id);
        return view('admin/author/edit', compact('item'));
    }

    public function update($id, Request $request)
    {
        $author = Author::find($id);

        $authorUpdateData = $request->validate([
            'name' => 'required|string|min:3|max:25'
        ]);

        $update = $author->update($authorUpdateData);
        
        if($update){
            return redirect()->route('admin/author/index')->with(['success' => 'O`zgartirildi']);
        }
        return redirect()->back();

    }

    public function destroy($id)
    {
        $item = Author::find($id);
        $item->delete();
        return redirect()->route('admin/author/index')->with(['success' => 'O`chirildi']);
    }

}
