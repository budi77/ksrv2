<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Member;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
                'name' => $this->faker->name(),
                'email' => $this->faker->userName().'@sprm.gov.my',
                'ic_no' =>  $this->faker->numerify('############'),
                'department_id' => '1700b838-0ec4-4eda-acba-75dcbbc3e762',
            
        ];
    }
}
