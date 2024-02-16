<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $data = Reservation::with('user')->get();
        return view('reservation.index', compact('data'));
    }
}
