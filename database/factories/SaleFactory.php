<?php

namespace Database\Factories;

use App\Models\Sales;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SaleFactory extends Factory
{
    protected $model = Sales::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->name(),
            "appeal" => $this->faker->text(),
            "description" => $this->faker->text(50),
            "thumbnail" => $this->faker->image(storage_path('app/public/uploads'), 230, 350, null, false)
        ];
    }
}
