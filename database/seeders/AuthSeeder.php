<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now() -> format('Y-m-d H:i:s');
        DB::table('users') -> insert([
            'name' => 'Vignnesh Ravindran',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'phone' => '+60166636253',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('users') -> insert([
            'name' => 'Joanne Lim',
            'email' => 'joanne@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'clerk',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'phone' => '+60166638465',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('users') -> insert([
            'name' => 'Yong Li Jonn',
            'email' => 'lijonn@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'phone' => '+60166630263',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('users') -> insert([
            'name' => 'Voo Keat Voon',
            'email' => 'keman@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'clerk',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'phone' => '+60166632345',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('users') -> insert([
            'name' => 'Hao Yong',
            'email' => 'hy@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'clerk',
            'address' => 'Lot 123, Jalan Tasik',
            'city' => 'Miri',
            'zipCode' => '98000',
            'phone' => '+60166639087',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}