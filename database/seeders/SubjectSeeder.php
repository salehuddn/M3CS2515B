<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $day_seed = [
            ['id'=>'1','subject_code'=>'CSC510','subject_name'=>'Discrete'],
            ['id'=>'2','subject_code'=>'CSC404','subject_name'=>'programming'],
            ['id'=>'3','subject_code'=>'ITT593','subject_name'=>'forensic'],
            ['id'=>'4','subject_code'=>'ITT545','subject_name'=>'web'],
            ['id'=>'5','subject_code'=>'ICT450','subject_name'=>'database'],
            
            ];

            foreach ($day_seed as $day_seed)
        {
            Subject::firstOrCreate($day_seed);
        }
    }
}
