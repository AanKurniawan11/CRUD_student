<?php

namespace Database\Factories;

use App\Models\Student;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->unique()->numberBetween(1000,2000),
            'nama' => $this->faker->unique()->name(),
            'kelas_id' => $this->faker -> numberBetween(1,5), 
            'tgl_lahir' => $this->faker->date(),
            'hobi' => $this->faker->randomElement(['Reading', 'Sports', 'Music', 'Gaming', 'Traveling']),
        ];
    }
}
