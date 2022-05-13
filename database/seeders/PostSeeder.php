<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
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
            
            Post::create([
                'title' => $faker->realText($maxNbChars = 20, $indexSize = 2),
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'id_user'=> rand(1,10),
                
            ]);

            $a++;

        }
    }
}
