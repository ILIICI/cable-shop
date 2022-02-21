<?php

namespace Database\Factories;

use App\Models\Navbar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubcategoryModel>
 */
class SubcategoryModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'navbars_id' =>Navbar::all()->random()->id,
            'subcategory_item_title'=> $this->faker->text(10),
            'subcategory_item_route' =>"subcategory",
        ];
    }
}