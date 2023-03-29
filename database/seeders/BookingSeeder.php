<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;

class BookingSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('bookings') -> insert([
            Booking::create([
                // 'id' => '001',
                'cus_name' => 'Joanne Lim',
                'cus_email' => 'jlzy21@icloud.com',
                'cus_id' => '010121137899',
                'cus_phone_number' => '+60166638568',
                'cus_address' => 'Lot 123, Jalan Tasik',
                'cus_city' => 'Miri',
                'cus_zipcode' => '98000',
                'total_price' => 800,
                'paid_amount' => 400,
                'deposit' => 200,
                'check_in_date' => '2023-03-28',
                'check_out_date' => '2023-04-03',
                'checked_in' => true,
                'checked_out' => false,
                'room_id' => 'SI001',


            ]),
        ]);
    }
}
