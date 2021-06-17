<?php

namespace Database\Factories;

use App\Models\ImageProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImageProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "path" => $this->faker->image('public/storage/images',640,480, null, false),
            "id_product" => $this->faker->numberBetween(1, 30)
        ];
    }
}
