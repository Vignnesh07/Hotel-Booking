<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookings') -> insert([
            'fName' => 'Joanne',
            'lName' => 'Lim',
            'roomType' => 'Single',
            'roomNumber' => 'SI001',
            'email' => 'jlzy21@icloud.com',
            'idCard' => '010121137899',
            'phone' => '+60166638568',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'amount' => 800,
            'paidAmount' => 400,
            'deposit' => 200,
            'checkInDate' => '2023-03-28',
            'checkOutDate' => '2023-04-03',
            'checkedIn' => true,
            'checkedOut' => false,
        ]);
    }
}
