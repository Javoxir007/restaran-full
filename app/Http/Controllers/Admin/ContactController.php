<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function index()
    {
        $messages = Contact::orderBy('id', 'desc')->paginate(10);
        return view('admin/contact/index', compact('messages'));
    }

    public function store(Request $request)
    {
        $contactData = $request->validate([
            'f_name' => 'required|string|min:3|max:15',
            'l_name' => 'required|string|min:3|max:15',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|min:3|max:200'
        ]);

        $created = Contact::create($contactData);
        if($created){
            return redirect()->back()->with(['success' => 'Jo`natildi. Siz bilan boglanishadi']);
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $item = Contact::find($id);
        $item->delete();
        return redirect()->route('admin/contact/index')->with(['success' => 'Xabar o`chirildi']);
    }

}
