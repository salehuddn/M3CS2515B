<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $day_seed = [
            ['id'=>'1','lecture_hall_name'=>'DKA','lecture_hall_place'=>'Kuliah'],
            ['id'=>'2','lecture_hall_name'=>'SEMINAR','lecture_hall_place'=>'FSKM'],
            ['id'=>'3','lecture_hall_name'=>'DKA','lecture_hall_place'=>'kuliah'],
            ['id'=>'4','lecture_hall_name'=>'DKB','lecture_hall_place'=>'FSKM'],
            ['id'=>'5','lecture_hall_name'=>'DKE','lecture_hall_place'=>'FSKM'],
            
            ];

            foreach ($day_seed as $day_seed)
        {
            Hall::firstOrCreate($day_seed);
        }
    }
}
