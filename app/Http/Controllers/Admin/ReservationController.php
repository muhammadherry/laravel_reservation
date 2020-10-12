<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $Reservation = Reservation::all();
        return view('admin.reservation.index',compact('Reservation'));
    }

    public function create(Request $request)
    {
        \App\Reservation::create($request->all());
        return redirect('/welcome');
    }

    public function status($id)
    {
        $Reservation = Reservation::find($id);
        $Reservation ->status = true;
        $Reservation ->save();
        Toastr::success('Reservation successfully confirmed','Success',
        ["positionClass"=>"toast-top-right"]);
        return redirect()->back();
    }

    public function store(Request $request)
    {
       
    }

    public function show(Reservation $reservation)
    {
        
    }

    public function edit($id)
    {
        $Reservation = \App\Reservation::find($id);
        return view('admin.reservation.edit',['Reservation'=>$Reservation]);
    }

    public function update(Request $request,$id)
    {
        $Reservation = \App\Reservation::find($id);
        $Reservation->update($request ->all()); 
       
        return redirect('/reservation');
    }

    public function destroy(Reservation $reservation)
    {
        
    }
}
