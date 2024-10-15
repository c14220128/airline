@extends('template')

@section('isi')
    <div class="p-32">
        <form action="/flight/book" method="post">
            @csrf
            <div class="flex  justify-between text-3xl font-bold border-b  border-1 border-black py-4">
                <h1 class="">Ticket Booking For</h1>

                <input type="text" hidden value="{{ $flight->id }}" name="flight_id">
                <input type="text" value="{{ $flight->flight_code }}" class="text-end font-bold">
            </div>

            <div class="flex  justify-between text-md">
                <div class="font-bold">{{ $flight->origin }} ➜ {{ $flight->destination }}</div>
                <div class="flex gap-2">
                    <p>Departure</p>
                    <p class="font-bold italic">{{ $flight->departure_formatted() }}</p>
                </div>
                <div class="flex gap-2">
                    <p>Arrived</p>
                    <p class="font-bold italic">{{ $flight->arrival_formatted() }}</p>
                </div>
            </div>

            <div class="flex flex-wrap py-3">
                <div class="align-middle w-1/5 text-xl" > Passenger Name </div>
                <input type="text" class="border border-black rounded p-1 w-1/3" name="pass_name">
            </div>

            <div class="flex flex-wrap py-3">
                <div class="align-middle w-1/5 text-xl"> Passenger Phone </div>
                <input type="text" class="border border-black rounded p-1 w-1/3" name="pass_phone">
            </div>

            <div class="flex flex-wrap py-3">
                <div class="align-middle w-1/5 text-xl"> Seat Number </div>
                <input type="text" class="border border-black rounded p-1 w-1/3" name="seat_number">
            </div>

            <div class="flex flex-wrap py-3 justify-end gap-8">
                <a href="/flights" class="bg-red-600 text-white py-2 px-5 rounded"> Cancel </a>
                <input type="submit" class="bg-green-600 text-white py-2 px-5 rounded" value="Book">
            </div>
        </form>

    </div>
@endsection
