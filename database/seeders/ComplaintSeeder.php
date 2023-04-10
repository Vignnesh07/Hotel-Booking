<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComplaintSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        DB::table('complaints') -> insert([
            'name' => 'Chong Hau Yong',
            'roomID' => 'SI001', 
            'complaint' => "Room windows are not closing properly.",
            'status' => 'Unresolved',
            'budget' => '',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('complaints') -> insert([
            'name' => 'Yong Li Jonn',
            'roomID' => 'TR005', 
            'complaint' => "The toilet is dirty and smells, can be cleaner.",
            'status' => 'Unresolved',
            'budget' => '',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('complaints') -> insert([
            'name' => 'Vignnesh Ravindran',
            'roomID' => 'ST010', 
            'complaint' => "Air conditioner can be cooler.",
            'status' => 'Unresolved',
            'budget' => '',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('complaints') -> insert([
            'name' => 'Joanne Lim',
            'roomID' => 'QU007', 
            'complaint' => "Water leakage from the air conditioner.",
            'status' => 'Unresolved',
            'budget' => '',
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('complaints') -> insert([
            'name' => 'Voo Keat Voon',
            'roomID' => 'ES003', 
            'complaint' => "The room is dirty, paints are coming off, and lights are dim.",
            'status' => 'Unresolved',
            'budget' => '',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
