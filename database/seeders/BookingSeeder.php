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
            'fname' => 'Joanne',
            'lname' => 'Lim',
            'roomtype' => 'Single',
            'roomnumber' => 'SI001',
            'email' => 'jlzy21@icloud.com',
            'idcard' => '010121137899',
            'phone' => '+60166638568',
            'residentialaddress' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipcode' => '98000',
            'amount' => 800,
            'paidamount' => 400,
            'deposit' => 200,
            'checkindate' => '2023-03-28',
            'checkoutdate' => '2023-04-03',
            'checkedin' => true,
            'checkedout' => false,
        ]);
    }
}
