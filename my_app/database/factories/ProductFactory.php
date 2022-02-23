<?php

namespace Database\Factories;

use Bezhanov\Faker\Provider\Device;
use App\Models\Product;
use App\Models\Smartphone;
use App\Models\SubcategoryModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModelSmartphone>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
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
            'product_uuid'=> $faker->randomDigitNotNull(),
            'sugcategory_id' =>SubcategoryModel::all()->random()->id,
            'product_name' =>$faker->deviceModelName,
            'price' => rand(10,99),
            'instock' =>rand(0,10),
            'sncode' =>$faker->randomLetter(),
            'images' => ['0' => 'assets/img/product-details/l1.jpg',
                        '1' => 'assets/img/product-details/bl1.jpg',
                        '2' => 'assets/img/product-details/s1.jpg'],

            'description' => $this->faker->text(100)
        ];
    }
}