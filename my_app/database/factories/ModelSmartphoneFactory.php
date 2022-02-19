<?php

namespace Database\Factories;

use Bezhanov\Faker\Provider\Device;
use App\Models\ModelSmartphone;
use App\Models\Smartphone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModelSmartphone>
 */
class ModelSmartphoneFactory extends Factory
{
    protected $model = ModelSmartphone::class;
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
            'modelsmartphone_id'=> $faker->randomDigitNotNull(),
            'smartphone_id' =>Smartphone::all()->random()->id,
            'model_name' =>$faker->deviceModelName,
            'price' => rand(10,99),
            'description' => $this->faker->text(100)
        ];
    }
}