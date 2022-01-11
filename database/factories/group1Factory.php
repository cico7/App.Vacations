<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class group1Factory extends Factory
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
            'group_name'=>$this->faker->word,
            'can_approve_request'=>$this->faker->boolean,
            'can_enter_request'=>$this->faker->boolean,
            'can_add_free_days'=>$this->faker->boolean,
            'can_add_new_user'=>$this->faker->boolean,
            'can_change_group_rights'=>$this->faker->boolean,
            'group_description'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true)

        ];
    }
}
