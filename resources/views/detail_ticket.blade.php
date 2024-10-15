@extends("template")

@section("isi")

<div class="p-32">

    <h1>Passenger List</h1>

    <table>
        <th></th>

        @foreach ( $flight->tickets as $ticket )
        <tr>
            <td>{{ $ticket->id }}</td>
        </tr>

        @endforeach
    </table>
</div>

@endsection
