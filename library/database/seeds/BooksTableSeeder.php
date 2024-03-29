<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        $faker = \Faker\Factory::create();
        foreach (App\Author::all() as $author) {
            $author->books()->saveMany(factory(Book::class, $faker->randomDigit)->make());
        };
    }
}
