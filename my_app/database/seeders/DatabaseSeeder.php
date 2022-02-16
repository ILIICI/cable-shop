<?php

namespace Database\Seeders;

use App\Models\Smartphone;
use App\Models\ModelSmartphone;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Smartphone::factory(5)->create();
        ModelSmartphone::factory(40)->create();
    }
}