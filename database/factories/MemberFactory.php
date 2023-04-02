<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
        // return [
        //     'name' => $this->faker->name(),
        //     'email' => $this->faker->unique()->safeEmail(),
        //     'ic_no' =>  $this->faker->numerify('############'),
        //     'department_id' => '950487bd-0237-4ef2-bffa-e965340878cc',
        // ];

        DB::table('members')->insert([
            'name' => $this->faker->name(),
             'email' => $this->faker->unique()->safeEmail(),
             'ic_no' =>  $this->faker->numerify('############'),
             'department_id' => '950487bd-0237-4ef2-bffa-e965340878cc',
        ]);
    }
}
