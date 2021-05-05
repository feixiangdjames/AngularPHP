<?php

namespace Database\Factories;

use App\Models\pets;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = pets::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
