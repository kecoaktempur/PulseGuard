<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datetime' => $this->faker->date('Y-m-d H:i:s'),
            'status' => $this->faker->randomElement(['waiting', 'rejected', 'accepted']),
            'admin_id' => null,
        ];
    }
}
