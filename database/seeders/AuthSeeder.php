<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Clerk;
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
        DB::table('admins') -> insert([
            Admin::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
            ]),
        ]);

        DB::table('clerks') -> insert([
            Clerk::create([
                'name' => 'Clerk',
                'email' => 'clerk@gmail.com',
                'password' => Hash::make('123456'),
            ]),
        ]);
    }
}
