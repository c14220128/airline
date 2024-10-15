@extends('template')

@section('title')
    Airplane Booking System
@endsection

@section('isi')
    <div class="p-32 flex flex-wrap">
        @foreach ($flights as $flight)
            <div class=" w-1/3 p-2">
                <div class="p-3  rounded-5 border border-black rounded-xl bg-gray-200">
                    <div class="flex justify-between">
                        <div class="font-bold">{{ $flight->flight_code }}</div>
                        <div class="font-bold">{{ $flight->origin }} ➜ {{ $flight->destination }}</div>
                    </div>

                    <div class="p-3">
                        <p>Departure</p>
                        <p class="font-bold italic">{{ $flight->departure_formatted() }}</p>
                        <p>Arrived</p>
                        <p class="font-bold italic">{{ $flight->arrival_formatted() }}</p>
                    </div>

                    <div class="p-3 flex justify-between">
                        <a href="/flights/book/{{ $flight->id }}"
                            class="bg-yellow-400 px-5 py-2 rounded-lg border border-black font-bold">Book Ticket</a>
                        <a href="/flights/book/{{ $flight->id }}"
                            class="bg-yellow-400 px-5 py-2 rounded-lg border border-black font-bold">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
