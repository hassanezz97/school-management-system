<?php

use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->delete();
        $classrooms = [
            ['en'=> 'Grade 1', 'ar'=> 'الصف الاول'],
            ['en'=> 'Grade 2', 'ar'=> 'الصف الثاني'],
            ['en'=> 'Grade 3', 'ar'=> 'الصف الثالث'],
            ['en'=> 'Grade 4', 'ar'=> 'الصف الرابع'],
            ['en'=> 'Grade 5', 'ar'=> 'الصف الخامس'],
            ['en'=> 'Grade 6', 'ar'=> 'الصف السادس'],
            ['en'=> 'Grade 7', 'ar'=> 'الصف السابع'],
            ['en'=> 'Grade 8', 'ar'=> 'الصف الثامن'],
            ['en'=> 'Grade 9', 'ar'=> 'الصف التاسع'],
            ['en'=> 'Grade 10', 'ar'=> 'الصف العاشر'],
            ['en'=> 'Grade 11', 'ar'=> 'الصف الحادي عشر'],
            ['en'=> 'Grade 12', 'ar'=> 'الصف الثاني عشر'],
        ];

        foreach ($classrooms as $classroom) {
            Classroom::create([
                'Name_Class' => $classroom,
                'Grade_id' => Grade::all()->unique()->random()->id
            ]);
        }
    }
}
