<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class employeeFactory extends Factory
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
            'employee_first_name'=>$this->faker->firstName,
            'employee_last_name'=>$this->faker->lastName,
            'oib'=>null,
            'job_name' => null,
            'employee_address'=> null,
            'employee_email' =>$this->faker->unique()->freeEmail,
            'phone_number'=>null
        ];
    }
}
