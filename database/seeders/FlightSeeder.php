<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
            [
                'flight_code' => 'JT610',
                'origin' => 'SUB',
                'destination' => 'CGK',
                'departure_time' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-20 10:00:00'),
                'arrival_time' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-20 12:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'GA102',
                'origin' => 'CGK',
                'destination' => 'SUB',
                'departure_time' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-21 15:30:00'),
                'arrival_time' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-21 17:30:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'SJ301',
                'origin' => 'SUB',
                'destination' => 'DPS',
                'departure_time' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-22 09:15:00'),
                'arrival_time' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-22 11:15:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'MH450',
                'origin' => 'DPS',
                'destination' => 'SUB',
                'departure_time' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-23 14:45:00'),
                'arrival_time' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-23 16:45:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'QZ750',
                'origin' => 'SUB',
                'destination' => 'YLW',
                'departure_time' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-24 18:30:00'),
                'arrival_time' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-24 20:30:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
