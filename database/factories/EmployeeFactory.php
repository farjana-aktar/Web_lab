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
            //
            'name' =>$this->faker->name,
            'job_title' =>$this->faker->JobTitle,
            'joining_date' =>$this->faker->date,
            'salary' =>$this->faker->randomFloat(2, 100, 100),
            'email' =>$this->faker->unique()->safeEmail,
            'mobile_no' =>$this->faker->unique()->PhoneNumber,
            'address' =>$this->faker->Address,
        ];
    }
}
