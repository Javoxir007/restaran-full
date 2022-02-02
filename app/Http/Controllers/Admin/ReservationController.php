<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    
    public function index()
    {
        $reservate = Reservation::orderBy('id', 'desc')->paginate(10);
        return view('admin/reservation/index', compact('reservate'));
    }

    public function store(Request $request)
    {
        $reservationData = $request->validate([
            'name' => 'required|string|min:3|max:15',
            'email' => 'required|email',
            'person' => 'required|numeric',
            'date' => 'required',
            'message' => 'max:200'
        ]);

        $created = Reservation::create($reservationData);
        if($created){
            return redirect()->back()->with(['success' => 'Xabar jo`natildi']);
        }
        return redirect()->back();
    }

    public function destroy($id)
    {   
        $item = Reservation::find($id);
        $item->delete();
        return redirect()->route('admin/reservation/index')->with(['success' => 'Buyurtma o`chirildi']);
    }

}
