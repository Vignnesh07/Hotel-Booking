<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        DB::table('bookings') -> insert([
            'fName' => 'Joanne',
            'lName' => 'Lim',
            'roomType' => 'single',
            'roomNumber' => 'SI001',
            'email' => 'jlzy21@icloud.com',
            'idCard' => '010121136666',
            'phone' => '+60166638568',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'bookingAmount' => 900,
            'paidAmount' => 0,
            'checkInDate' => '2023-03-28',
            'checkOutDate' => '2023-04-03',
            'bookingStatus' => 'booked',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('bookings') -> insert([
            'fName' => 'Li Jonn',
            'lName' => 'Yong',
            'roomType' => 'double',
            'roomNumber' => 'DO001',
            'email' => 'jlzy21@icloud.com',
            'idCard' => '010121136273',
            'phone' => '+60166638568',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'bookingAmount' => 1500,
            'paidAmount' => 0,
            'checkInDate' => '2023-03-28',
            'checkOutDate' => '2023-04-03',
            'bookingStatus' => 'booked',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        
        DB::table('bookings') -> insert([
            'fName' => 'Keman',
            'lName' => 'Handsome',
            'roomType' => 'triple',
            'roomNumber' => 'TR001',
            'email' => 'jlzy21@icloud.com',
            'idCard' => '010121139999',
            'phone' => '+60166638568',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'bookingAmount' => 2100,
            'paidAmount' => 0,
            'checkInDate' => '2023-03-28',
            'checkOutDate' => '2023-04-03',
            'bookingStatus' => 'booked',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('bookings') -> insert([
            'fName' => 'Vignnesh',
            'lName' => 'Ravindran',
            'roomType' => 'presidential',
            'roomNumber' => 'PS003',
            'email' => 'jlzy21@icloud.com',
            'idCard' => '010121130987',
            'phone' => '+60166638568',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'bookingAmount' => 6000,
            'paidAmount' => 0,
            'checkInDate' => '2023-03-28',
            'checkOutDate' => '2023-04-03',
            'bookingStatus' => 'booked',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('bookings') -> insert([
            'fName' => 'Hao',
            'lName' => 'Yong',
            'roomType' => 'king',
            'roomNumber' => 'KI001',
            'email' => 'jlzy21@icloud.com',
            'idCard' => '010121139876',
            'phone' => '+60166638568',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'bookingAmount' => 1800,
            'paidAmount' => 0,
            'checkInDate' => '2023-03-28',
            'checkOutDate' => '2023-04-03',
            'bookingStatus' => 'booked',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('bookings') -> insert([
            'fName' => 'Joanne',
            'lName' => 'Lim',
            'roomType' => 'executive',
            'roomNumber' => 'ES001',
            'email' => 'jlzy21@icloud.com',
            'idCard' => '010121133456',
            'phone' => '+60166638568',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'bookingAmount' => 3600,
            'paidAmount' => 0,
            'checkInDate' => '2023-03-28',
            'checkOutDate' => '2023-04-03',
            'bookingStatus' => 'booked',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('bookings') -> insert([
            'fName' => 'Joanne',
            'lName' => 'Lim',
            'roomType' => 'studio',
            'roomNumber' => 'ST007',
            'email' => 'jlzy21@icloud.com',
            'idCard' => '010121131234',
            'phone' => '+60166638568',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'bookingAmount' => 2400,
            'paidAmount' => 0,
            'checkInDate' => '2023-03-28',
            'checkOutDate' => '2023-04-03',
            'bookingStatus' => 'booked',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
