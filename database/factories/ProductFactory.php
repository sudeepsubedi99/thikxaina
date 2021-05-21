<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = mt_rand(1000, 20000);
        return [
            'name' => $this->faker->name(),
            'price' => $price,
            'description' => $this->faker->paragraph(3, true),
            // 'media_id' => $this->faker->image('public/storage',640,480, null, false),

        ];
    }
}
