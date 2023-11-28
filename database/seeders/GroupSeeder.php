<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $day_seed = [
            ['id'=>'1','name'=>'Saleh','part'=>'1'],
            ['id'=>'2','name'=>'Hakimi','part'=>'2'],
            ['id'=>'3','name'=>'Hamiezan','part'=>'3'],
            ['id'=>'4','name'=>'Haziq','part'=>'4'],
            ['id'=>'5','name'=>'Aisyah','part'=>'5'],
            
            ];

            foreach ($day_seed as $day_seed)
        {
            Group::firstOrCreate($day_seed);
        }
    }
}
