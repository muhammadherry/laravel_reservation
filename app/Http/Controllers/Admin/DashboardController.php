<?php

namespace App\Http\Controllers\Admin;

use App\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $reservationcount = Reservation::count();
        return view('admin.dashboard',compact('reservationcount'));
    }
}
