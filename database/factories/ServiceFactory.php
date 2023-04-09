<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Service;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' =>$this->faker->paragraph(),
            'cost' => $this->faker->randomNumber(4, true),
            'is_pupular' => $this->faker->randomElement(['0', '1']),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
