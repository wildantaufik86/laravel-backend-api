<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $reg = fake()->unique()->numerify('#########');
    $gender = fake()->randomElement(['Male', 'Female']);

    return [
      'name' => fake()->unique()->name($gender),
      'registration_num' => $reg,
      'gender' => $gender,
      'address' => fake()->unique()->address(),
    ];
  }
}