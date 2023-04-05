<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        
        for($i = 1; $i <5 ;$i++){
        DB::table('staff') -> insert([
            Staff::create([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'authority' => 'Admin',
                'password' => Hash::make('123456'),
                'conf_password' => Hash::make('123456'),
                'salary' => mt_rand(1000,3000),
                'address' => Str::random(50),
                'zipCode' => mt_rand(0,9999),
                'phone' => $faker->phoneNumber,
                
                ]),
            ]);
        }
    }
}