<?php

namespace Database\Factories;

use App\Models\Smartphone;
use Bezhanov\Faker\Provider\Device;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Smartphone>
 */
class SmartphoneFactory extends Factory
{
    protected $model = Smartphone::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Device($faker));

        return [
           'brand_name' =>$faker->deviceManufacturer
        ];
    }
}