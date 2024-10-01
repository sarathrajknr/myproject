<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("books")->insert([
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'quantity' => 10,
                'date_of_issue' => '2024-09-25',
                'date_of_return' => '2024-10-10',
                'remarks' => 'Classic novel',
                'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'quantity' => 5,
                'date_of_issue' => '2024-09-22',
                'date_of_return' => '2024-10-05',
                'remarks' => 'Dystopian fiction',
                'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'quantity' => 8,
                'date_of_issue' => '2024-09-20',
                'date_of_return' => '2024-10-03',
                'remarks' => 'Pulitzer Prize winner',
                'created_at' => now(),
                    'updated_at' => now(),
            ],
        ]);
    }
}
