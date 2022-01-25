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
            'manager_id'=>rand(1,3),
            'department_name'=>$this->faker->domainWord,
            'department_desription'=>$this->faker->slug
        ];
    }
}
