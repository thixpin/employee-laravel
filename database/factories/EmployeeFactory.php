<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'salary' => mt_rand(10000, 100000),
            'position' => $this->faker->jobTitle,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'photo' => $this->faker->imageUrl(300, 300, 'people'),
            'joined_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'is_active' => mt_rand(0, 1),
            'department_id' => mt_rand(1, 5),
        ];
    }
}
