@extends('template')

@section('title')
    Airplane Booking System
@endsection

@section('isi')
    <div class="p-32 flex flex-wrap">
        @foreach ($flights as $flight )
            <div class=" w-1/3 p-2">
                <div class="p-3  rounded-5 border border-black rounded-md bg-slate-100 ">
                    <div class="flex justify-between">
                        <div class="font-bold">{{ $flight->flight_code }}</div>
                        <div class="font-bold">{{ $flight->origin }} ➜  {{ $flight->destination }}</div>
                    </div>

                    <div>
                        <p>Departure</p>
                        <p>{{ $flight->departure_time }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
