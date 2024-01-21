<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'category' => $this->faker->word(),
            'frequency' => $this->faker->word(),
            'content' => $this->faker->text(),
            'time' => $this->faker->time(),
            'code' => $this->faker->unique()->sentence(),
            'redirect_url' => $this->faker->url(),
            'campaign_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
