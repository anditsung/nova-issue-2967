<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_id' => People::factory(),
            'is_contract' => true,
            'user_id' => 1,
        ];
    }
}
