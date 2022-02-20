<?php

use App\BookCategorie;
use Illuminate\Database\Seeder;

class BookCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BookCategorie::class,6)->create();
    }
}
