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
}
