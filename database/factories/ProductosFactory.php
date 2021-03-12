<?php

namespace Database\Factories;

use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Productos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->word,
            'cantidad' => $this->faker->number,
            'descripcion' => $this->faker->text(800),
            'precio' => $this->faker->number,
            'imagen' => $this->faker->imageUrl(1280,720)
        ];
    }
}
