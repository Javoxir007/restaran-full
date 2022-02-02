<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chef;

class ChefController extends Controller
{
    
    public function index()
    {
        $chefs = Chef::orderBy('id', 'desc')->paginate(10);
        return view('admin/chefs/index', compact('chefs'));
    }

    public function create()
    {
        return view('admin/chefs/create');
    }

    public function store(Request $request)
    {
        $chefData = $request->validate([
            'image' => 'required|file|max:5120|mimes:png,jpg,jpeg',
            'name' => 'required|min:3|max:15',
            'job' => 'required|min:3|max:15'
        ]);

        $full_path = null;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $image_name = time()."_img"."$extension";
            $uploaded->move(public_path('assets/img/chef'), $image_name);
            $full_path = '/assets/img/chef/'.$image_name;
        }

        $chefData['image'] = $full_path;

        $created = Chef::create($chefData);
        if($created){
            return redirect()->route('admin/chefs/index')->with(['success' => 'Yaratildi']);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $item = Chef::findOrFail($id);
        return view('admin/chefs/edit', compact('item'));
    }

    public function update($id, Request $request)
    {
        $chef = Chef::find($id);

        $chefUpdateData = $request->validate([
            'image' => 'file|max:5120|mimes:png,jpg,jpeg',
            'name' => 'required|min:3|max:15',
            'job' => 'required|min:3|max:15'
        ]);

        $full_path = $chef->image;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $image_name = time()."_img"."$extension";
            $uploaded->move(public_path('assets/img/chef'), $image_name);
            $full_path = '/assets/img/chef/'.$image_name;
        }

        $chefUpdateData['image'] = $full_path;

        $update = $chef->update($chefUpdateData);
        if($update){
            return redirect()->route('admin/chefs/index')->with(['success' => 'O`zgartirildi']);
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $item = Chef::find($id);
        $item->delete();
        return redirect()->route('admin/chefs/index')->with(['success' => 'O`chirildi']);
    }

}
