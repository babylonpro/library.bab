<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::truncate();

        $faker = \Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 100; $i++) {
            Author::create([
                'name' => $faker->name,
            ]);
        }
    }
}
