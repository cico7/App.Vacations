<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class departmentFactory extends Factory
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
            'user_id'=>$this->faker->userName,
            'department_name'=>$this->faker->domainWord              ,
            'department_desription'=>$this->faker->slug
        ];
    }
}
