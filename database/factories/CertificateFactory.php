<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certificate>
 */
class CertificateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'certificate_number' => fake()->numerify('################'),
            'email' => fake()->freeEmail,
            'is_activated' => false,
            'expiration_date' => fake()->dateTimeBetween($startDate = '-2 years', $endDate = '+2 years', $timezone = null),
            'description' => fake()->sentence,
        ];
    }
}
