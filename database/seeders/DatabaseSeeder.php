<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            AdministratorSeeder::class,
            SettingSeeder::class,
            PackageSeeder::class,          
            QuestionSeeder::class,
            TestimoniSeeder::class 
        ]);
    }
}
