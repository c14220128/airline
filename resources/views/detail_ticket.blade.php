@extends('template')

@section('isi')
    <div class="p-32">

        <h1 class="text-3xl font-bold py-8">Passenger List</h1>

        @php
            $i = 1;
        @endphp
        <table class="w-full">
            <tr>
                <td class="w-1/6 font-bold">No</td>
                <td class="w-1/6 font-bold">Passenger Name</td>
                <td class="w-1/6 font-bold">Passenger Phone</td>
                <td class="w-1/6 font-bold">Seat Number</td>
                <td class="w-1/6 font-bold">Boarding</td>
                <td class="w-1/6 font-bold">Delete</td>
            </tr>

            @foreach ($flight->tickets as $ticket)
                <tr>
                    <td class="w-1/6">{{ $i++ }}</td>
                    <td class="w-1/6">{{ $ticket->passenger_name }}</td>
                    <td class="w-1/6 ">{{ $ticket->passenger_phone }}</td>
                    <td class="w-1/6 ">{{ $ticket->seat_number }}</td>
                    <td class="w-1/6 "><a href="">Confirm</a></td>
                    <td class="w-1/6 "><a href="">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
