<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Author::factory(3)->create();
    }

//    public function run()
//    {
//        \App\Models\Books::factory(3)->create();
//    }
}
