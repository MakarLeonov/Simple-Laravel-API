<?php

namespace Database\Factories;

use App\Models\AutoMark;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class AutoMarkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AutoMark::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'logo' => $this->faker->imageUrl(640, 480),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
