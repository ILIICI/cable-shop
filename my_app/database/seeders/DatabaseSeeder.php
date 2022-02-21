<?php

namespace Database\Seeders;

use App\Models\Navbar;
use App\Models\Smartphone;
use App\Models\ModelSmartphone;
use Illuminate\Database\Seeder;
use App\Models\SubcategoryModel;
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
        Navbar::factory(5)->create();
        SubcategoryModel::factory(20)->create();
        Smartphone::factory(5)->create();
        ModelSmartphone::factory(40)->create();
    }
}