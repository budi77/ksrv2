<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
// use Database\Factories\MemberSeeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::factory()->count(50)->create();
        // DB::table('members')->insert([
        //     'name' => $this->faker->name(),
        //      'email' => $this->faker->unique()->safeEmail(),
        //      'ic_no' =>  $this->faker->numerify('############'),
        //      'department_id' => '950487bd-0237-4ef2-bffa-e965340878cc',
        // ]);

    }
}
