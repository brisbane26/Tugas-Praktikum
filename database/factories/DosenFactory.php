<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Dosen::class;
    public function definition(): array
    {
        return [
            'nip' => $this->faker->numerify('#########'),
            'nama_dosen' => $this->faker->name(),
            'email_dosen' => $this->faker->safeEmail(),
            'no_hp' => $this->faker->phoneNumber()
        ];
    }
}
