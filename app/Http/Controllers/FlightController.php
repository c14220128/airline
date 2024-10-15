<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function daftar_penerbangan_page(){

        $flights = Flight::all();
        return view('daftar_penerbangan', compact('flights'));
    }

    public function book_ticket_page(Request $request){
        $flight = Flight::find($request->id);
        return view("book_ticket", compact('flight'));
    }

    public function detail_ticket(Request $request){
        $flight = Flight::find($request->id);
        return view("detail_ticket", compact('flight'));
    }


}
