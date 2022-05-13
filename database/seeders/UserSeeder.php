<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = 0;
        $faker = Faker::create();
        while ($a <= 10) {
            
            User::create([
                'name' => $faker->firstName(),
                'surname' => $faker->lastName(),
                'email'=> $faker->email(),
                'active' => rand(0,1)
            ]);

            $a++;

        }
    }
}
