<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Dummy Datas

        DB::table("students")->insert([
            [
                    'name'=>'john Doe',
                    'class'=>10,
                    'address'=>'123 Main St, CityVille',
                    'concession'=>false,
                    'status' => true,
                    'fee'=>1200.50,
                    'phone'=>'123-456-7890',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'name' =>'Jane Smith',
                    'class' =>9,
                    'address' =>'456 Oak St, Townsville',
                    'concession' =>true,
                    'status' => true,
                    'fee' => 900.75,
                    'phone' => '987-654-3210',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' =>'Sarath',
                    'class' => 10,
                    'address' =>'789 Pine St, Cityville',
                    'concession' => false,
                    'status' => true,
                    'fee' => 1200.50,
                    'phone' => '456-789-1234',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' =>'Rahul',
                    'class' => 8,
                    'address' =>'234 Maple Ave, Springfield',
                    'concession' => true,
                    'status' => true,
                    'fee' => 850.00,
                    'phone' => '654-321-0987',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' =>'Nivin',
                    'class' => 7,
                    'address' =>'123 Cedar Rd, Riverdale',
                    'concession' => false,
                    'status' => false,
                    'fee' => 950.25,
                    'phone' => '789-012-3456',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' =>'Emil',
                    'class' => 6,
                    'address' =>'987 Birch St, Greenville',
                    'concession' => true,
                    'status' => true,
                    'fee' => 775.60,
                    'phone' => '321-654-9870',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' =>'Rajith',
                    'class' => 5,
                    'address' =>'456 Spruce Ln, Lakeside',
                    'concession' => false,
                    'status' => true,
                    'fee' => 1025.90,
                    'phone' => '234-567-8901',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' =>'Shilna',
                    'class' => 9,
                    'address' =>'321 Elm St, Hilltown',
                    'concession' => true,
                    'status' => true,
                    'fee' => 1100.75,
                    'phone' => '567-890-1234',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' =>'David',
                    'class' => 10,
                    'address' =>'678 Willow Dr, Brookside',
                    'concession' => false,
                    'status' => false,
                    'fee' => 1300.45,
                    'phone' => '890-123-4567',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' =>'Balan',
                    'class' => 7,
                    'address' =>'789 Aspen Way, Mountainview',
                    'concession' => true,
                    'status' => true,
                    'fee' => 975.00,
                    'phone' => '345-678-9012',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
                
    }
}
