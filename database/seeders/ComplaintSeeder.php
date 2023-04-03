<?php

namespace Database\Seeders;

use App\Models\Complaint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('complaints') -> insert([
            'name' => 'Chong Hau Yong',
            'roomID' => 'SI001', 
            'complaint' => "Room windows are not closing properly.",
            'status' => 'unresolved',
            'budget' => '',
        ]);

        DB::table('complaints') -> insert([
            'name' => 'Yong Li Jonn',
            'roomID' => 'TR005', 
            'complaint' => "The toilet is dirty and smells, can be cleaner.",
            'status' => 'unresolved',
            'budget' => '',
        ]);
    }
}
