<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function book_ticket(Request $request)
    {
        Ticket::create([
            'flight_id' => $request->input("flight_id"),
            'passenger_name' => $request->input("pass_name"),
            'passenger_phone' => $request->input("pass_phone"),
            'seat_number' => $request->input("seat_number"),
            'is_boarding' => false,
            'boarding_time' => null,
        ]);

        return redirect('/flights');
    }
}
