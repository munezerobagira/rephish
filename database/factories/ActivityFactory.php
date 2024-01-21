<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->timestamps();
            'audience_id' => $this->faker->numberBetween(1, 10),
            'phone_number' => $this->faker->phoneNumber(),
            'whatsapp_number' => $this->faker->phoneNumber(),
            'facebook_handler' => $this->faker->userName(),
            'twitter_handler' => $this->faker->userName(),
            'activity' => $this->faker->randomElement(['viewed', 'clicked', 'downloaded']),
        ];
    }
}
