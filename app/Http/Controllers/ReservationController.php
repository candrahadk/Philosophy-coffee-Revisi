<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //

    public function index()
    {
        return view('admin.pages.reservation.index', [
            'title' => 'Reservasi',
            'reservations' => Reservation::latest()->filter(request('search'))->paginate(10)->withQueryString()
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'customer' => 'required|max:255',
            'phone' => 'required|max:255',
            'menu_id' => 'required|integer',
            'qty' => 'required|integer',
            'date' => 'required',
            'time' => 'required',
        ]);

        $reservation = new Reservation();
        $reservation->customer = $request->customer;
        $reservation->phone = $request->phone;
        $reservation->qty = $request->qty;
        $reservation->menu_id = $request->menu_id;
        $reservation->confirmed = '0';
        $reservation->created_at = $request->date . ' ' . $request->time;
        $reservation->save();
        return redirect()->route('reservation')->with('status', 'Reservasi berhasil!');
    }


    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return redirect()->route('reservation.index')->with('status', 'Data terhapus!');
    }

    public function confirm($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->confirmed = $reservation->confirmed == '1' ? '0' : '1';
        $reservation->save();

        return redirect()->route('reservation.index')->with('status', 'Terkonfirmasi!');
    }
}