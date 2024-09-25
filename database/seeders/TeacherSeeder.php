<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Dummy Data
        DB::table("teachers")->insert([

            [
                'name' => 'Sarathraj',
                'email' => 'sarath@gmail.com',
                'phone' => 'kayalode',
                'subject' => 'Machine Design',
                'address' => 'MIT Anjarakandy',
                'date_of_birth' => '1990-07-12',
                'hire_date' => '2014-07-30',  
                'salary' => 25000,
                'qualification' => 'M-tech',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rahul',
                'email' => 'rahu@gmail.com',
                'phone' => 'koothali',
                'subject' => 'Engg Design',
                'address' => 'MIT Anjarakandy',
                'date_of_birth' => '1990-07-15',
                'hire_date' => '2014-07-30',  
                'salary' => 25000,
                'qualification' => 'M-tech',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


    }
}
