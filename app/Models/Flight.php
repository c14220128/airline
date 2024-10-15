<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;



    public function departure_formatted()
    {
        return Carbon::parse($this->departure_time)->format('l, d F Y H:i');
    }
    public function arrival_formatted()
    {
        return Carbon::parse($this->arrival_time)->format('l, d F Y H:i');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'flight_id', 'id');
    }
}
