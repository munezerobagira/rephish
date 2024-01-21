<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Audience>
 */
class AudienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [


            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'campaign_id' => $this->faker->numberBetween(1, 10),
            'email' => $this->faker->email(),
            'phone_number' => $this->faker->phoneNumber(),
            'whatsapp_number' => $this->faker->phoneNumber(),
            'facebook_handler' => $this->faker->userName(),
            'twitter_handler' => $this->faker->userName(),


        ];
    }
}
